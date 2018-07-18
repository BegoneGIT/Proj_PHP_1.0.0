<?php
namespace Repository;

use Doctrine\DBAL\Connection;
use Utils\Paginator;

/**
 * Track Repository
 */

class TrackRepository
{
    /**
     * Number of items per page.
     *
     * const int NUM_ITEMS
     */
    const NUM_ITEMS = 10;
    /**
     * Doctrine DBAL connection.
     *
     * @var \Doctrine\DBAL\Connection $db
     */
    protected $db;

    /**
     * PartsRepository constructor.
     *
     * @param \Doctrine\DBAL\Connection $db
     */
    public function __construct(Connection $db)
    {
        $this->db = $db;
    }

    /**
     * Fetch all records.
     *
     * @return array Result
     */
    public function findAll()
    {
        $queryBuilder = $this->queryAll();

        return $queryBuilder->execute()->fetchAll();
    }


    /**
     * Query all records.
     *
     * @return \Doctrine\DBAL\Query\QueryBuilder Result
     */
    protected function queryAll($userLogin)
    {
        $userId = $this->findLoggedUserId($userLogin);

        $queryBuilder = $this->db->createQueryBuilder();

        return $queryBuilder->select('u.INDEKS','u.NAZWA', 't.Data', 't.wartosc')
            ->from('obserwowane', 't')
            ->innerJoin('t','parts','u','t.updated_ID = u.ID')
            ->where('t.uzytkownik_ID = :userId')
            ->setParameter(':userId', $userId, \PDO::PARAM_INT);

    }


    /**
     * Get records paginated.
     *
     * @param int $page Current page number
     *
     * @return array Result
     */
    public function findAllPaginated($page = 1, $userId)
    {
        $countQueryBuilder = $this->queryAll($userId)
            ->select('COUNT(DISTINCT u.INDEKS) AS total_results')
            ->setMaxResults(1);

        $paginator = new Paginator($this->queryAll($userId), $countQueryBuilder);
        $paginator->setCurrentPage($page);
        $paginator->setMaxPerPage(static::NUM_ITEMS);

        return $paginator->getCurrentPageResults();
    }

    /**
     * Save record.
     *
     * It is supposed to add a record with current date,
     * uploaders ID (uzytkownicy.idUzytkownicy) from session and
     * price (updated.CENA)
     *
     * It additionally changes data it gets from $track[updated_ID]
     * to make it really what it's name means, before this operation
     * we have an index (from parts.INDEKS table) in it.
     *
     * @var float $cena is required to change string to a float
     * @param array $part Parts index number
     *
     * @return boolean Result
     *
     */
    public function save($track)
    {
        $idQueryBuilder = $this->db->createQueryBuilder();
        $id = $idQueryBuilder->select('ID','CENA')
            ->from('parts', 'u')
            ->where('u.INDEKS = :part')
            ->setParameter(':part', $track['updated_ID'], \PDO::PARAM_STR);
        $result = $id->execute()->fetch();
        $track['updated_ID'] = $result['ID'];
        $cena = floatval(str_replace(",",".",$result['CENA']));
        $track['wartosc'] = $cena;


        $currentDateTime = new \DateTime();
        $track['Data'] = $currentDateTime->format('Y-m-d H:i:s');


        $track['uzytkownik_ID'] = $this->findLoggedUserId($track['uzytkownik_ID']);

       // return var_dump($track);
            // add new record
           return $this->db->insert('obserwowane', $track);

    }

    /**
     * Finds logged user id by login in table `login`
     *
     * @param $userLogin
     * @return id of the user
     */

    private function findLoggedUserId($userLogin)
    {
        $resultUserId = [];
        $userIdQueryBuilder = $this->db->createQueryBuilder();

        $userID = $userIdQueryBuilder->select('id_uzytkownik')
            ->from('login', 'l')
            ->where('l.login = :login')
            ->setParameter('login', $userLogin, \PDO::PARAM_STR);
        $resultUserId = $userID->execute()->fetch();
       return $resultUserId['id_uzytkownik'];
    }

    /**
     * This is called before save() from this repository
     * Checks whether the form submitted part name exists
     *
     * @param $track
     */
    public function partExists($track)
    {
        $queryBuilder = $this->db->createQueryBuilder();

        $queryBuilder->select('p.ID')
            ->from('parts', 'p')
            ->where('p.INDEKS = :track')
            ->setParameter('track', $track['updated_ID'], \PDO::PARAM_STR);

        return $queryBuilder->execute()->fetchAll();
    }
}