<?php
namespace Repository;

use Doctrine\DBAL\Connection;
use Utils\Paginator;

/**
 * Parts Repository
 */

class PartsRepository
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
/*    public function findAll()
    {
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->select('INDEKS', 'NAZWA', 'LOKALIZACJA', 'STAN_MIN', 'CENA1')
            ->from('updated');

        return $queryBuilder->execute()->fetchAll();
    }*/


    /**
     * Query all records.
     *
     * @return \Doctrine\DBAL\Query\QueryBuilder Result
     */
    protected function queryAll()
    {
        $queryBuilder = $this->db->createQueryBuilder();

        return $queryBuilder->select('t.INDEKS', 't.NAZWA', 't.LOKALIZACJA', 't.STAN_MIN', 't.CENA1')
            ->from('updated', 't');
    }


    /**
     * Get records paginated.
     *
     * @param int $page Current page number
     *
     * @return array Result
     */
    public function findAllPaginated($page = 1)
    {
        $countQueryBuilder = $this->queryAll()
            ->select('COUNT(DISTINCT t.INDEKS) AS total_results')
            ->setMaxResults(1);

        $paginator = new Paginator($this->queryAll(), $countQueryBuilder);
        $paginator->setCurrentPage($page);
        $paginator->setMaxPerPage(static::NUM_ITEMS);

        return $paginator->getCurrentPageResults();
    }


    public function searchPaginated($searchIndex, $page = 1)
    {

        $countQueryBuilder = $this->searchAll($searchIndex)
            ->select('COUNT(DISTINCT t.INDEKS) AS total_results')
            ->setMaxResults(1);

        $paginator = new Paginator($this->searchAll($searchIndex), $countQueryBuilder);
        $paginator->setCurrentPage($page);
        $paginator->setMaxPerPage(static::NUM_ITEMS);

        return $paginator->getCurrentPageResults();
    }

    private function searchAll($searchIndex)
    {
        if(!$searchIndex){
            return $this->queryAll();
        }
        $queryBuilder = $this->db->createQueryBuilder();

        return $queryBuilder->select('t.INDEKS', 't.NAZWA', 't.LOKALIZACJA', 't.STAN_MIN', 't.CENA1')
            ->from('updated', 't')
            ->where('t.INDEKS LIKE :index')
            ->setParameter(':index', '%'.$searchIndex.'%', \PDO::PARAM_STR);
    }
}