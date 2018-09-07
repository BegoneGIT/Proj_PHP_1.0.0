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
    protected function queryAll($userId)
    {
        //$userId = $this->findLoggedUserId($userLogin);

        $queryBuilder = $this->db->createQueryBuilder();

        return $queryBuilder->select('t.ID','u.INDEKS','u.NAZWA', 't.Data', 't.wartosc')
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

    public function findLoggedUserId($userLogin)
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

    public function usersTracked()
    {
        $queryBuilder = $this->db->createQueryBuilder();

        $queryBuilder->select(
            'u.idUzytkownicy','u.Imie','u.Nazwisko','u.email',
            'p.INDEKS','p.NAZWA',
            't.Data','t.wartosc'
        )
            ->from('obserwowane', 't')
            ->innerJoin('t','uzytkownicy', 'u','t.uzytkownik_ID = u.idUzytkownicy')
            ->innerJoin('t', 'parts', 'p','t.updated_ID = p.ID');

            return $queryBuilder->execute()->fetchAll();
    }

    /**
     * Deletes from table obserwowane
     *
     * @param $trackID
     * @return \Doctrine\DBAL\Query\QueryBuilder
     */
    public function deleteTrack($trackID)
    {
        $this->db->delete('obserwowane', ['id' => $trackID]);

        return 1;
    }

    /**
     * Returns info on specific part based on it's ID in obserwowane
     *
     * @param $trackID
     * @return array
     */
    public function partInfo($trackID)
    {
        $queryBuilder = $this->db->createQueryBuilder();

        $queryBuilder->select('p.INDEKS','p.NAZWA')
            ->from('obserwowane', 't')
            ->where('t.id = :track')
            ->innerJoin('t','parts', 'p','t.updated_ID = p.ID')
            ->setParameter('track', $trackID, \PDO::PARAM_STR);

        return $queryBuilder->execute()->fetchAll();
    }

    public function userTracks($trackID,$userID)
    {
        $queryBuilder = $this->db->createQueryBuilder();

        $queryBuilder->select('t.id')
            ->from('obserwowane', 't')
            ->where('t.id = :track')
            ->andWhere('t.uzytkownik_ID = :userID')
            ->setParameter('track', $trackID, \PDO::PARAM_INT)
            ->setParameter('userID', $userID, \PDO::PARAM_INT);

        return $queryBuilder->execute()->fetchAll();

    }
}