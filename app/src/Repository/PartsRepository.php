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
    const NUM_ITEMS = 15;
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
    public function findAll($table)
    {
        $queryBuilder = $this->queryAll($table);

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
    protected function queryAll($company)
    {
        $queryBuilder = $this->db->createQueryBuilder();

        return $queryBuilder->select('t.ID', 't.INDEKS', 't.NAZWA', 't.STAN_MIN', 't.CENA')
            ->from('parts', 't')
            ->where('t.FIRMA = :comp')
            ->setParameter(':comp', $company, \PDO::PARAM_STR);
    }


    /**
     * Get records paginated.
     *
     * @param int $page Current page number
     *
     * @return array Result
     */
    public function findAllPaginated($page = 1, $company)
    {

        $countQueryBuilder = $this->queryAll($company)
            ->select('COUNT(DISTINCT INDEKS) AS total_results')
            ->setMaxResults(1);

        $paginator = new Paginator($this->queryAll($company), $countQueryBuilder);
        $paginator->setCurrentPage($page);
        $paginator->setMaxPerPage(static::NUM_ITEMS);

        return $paginator->getCurrentPageResults();
    }

    /*
        public function tableExists($table)
        {
            $checkQueryBuilder = $this->db->createQueryBuilder();

            $checkQueryBuilder->select('c.ID','c.tablename')
                ->from('czesci', 'c')
                ->where('c.tablename = :tablename')
                ->setParameter(':tablename', $table, \PDO::PARAM_STR);
            if($checkQueryBuilder->execute()->fetchAll()){
                return 1;
            }

            return 0;
        }*/


    /*
        public function searchPaginated($searchIndex, $page = 1)
        {

            $countQueryBuilder = $this->searchAll($searchIndex)
                ->select('COUNT(DISTINCT t.INDEKS) AS total_results')
                ->setMaxResults(1);

            $paginator = new Paginator($this->searchAll($searchIndex), $countQueryBuilder);
            $paginator->setCurrentPage($page);
            $paginator->setMaxPerPage(static::NUM_ITEMS);

            return $paginator->getCurrentPageResults();
        }*/
    /*
        public function searchAll($searchIndex)
        {
            if(!$searchIndex){
                return $this->queryAll();
            }
            $queryBuilder = $this->db->createQueryBuilder();

             $queryBuilder->select('t.INDEKS', 't.NAZWA', 't.LOKALIZACJA', 't.STAN_MIN', 't.CENA')
                ->from('parts', 't')
                ->where('t.INDEKS LIKE :index')
                ->setParameter(':index', '%'.$searchIndex['INDEKS'].'%', \PDO::PARAM_STR);

             return $queryBuilder->execute()->fetchAll();
        }*/


    /**
     * Simple pagination
     *
     * @param $searchIndex
     * @param int $page
     * @return array
     */
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

    /**
     * Searches in all companies parts for part of stated INDEKS
     *
     * @param $searchIndex
     * @return \Doctrine\DBAL\Query\QueryBuilder
     */
    private function searchAll($searchIndex)
    {
        if (!$searchIndex) {
            return $this->queryAll('parts');
        }
        $queryBuilder = $this->db->createQueryBuilder();
        return $queryBuilder->select('t.INDEKS', 't.NAZWA', 't.STAN_MIN', 't.CENA')
            ->from('parts', 't')
            ->where('t.INDEKS LIKE :index')
            ->setParameter(':index', '%' . $searchIndex['INDEKS'] . '%', \PDO::PARAM_STR);
    }

    /**
     * Gets rest of part data based on its ID
     *
     * @param $dataID - ID of part to be searched for
     * @return array
     *
     */
    public function partData($dataID)
    {
        $queryBuilder = $this->db->createQueryBuilder();

        $queryBuilder->select('p.INDEKS', 'p.NAZWA', 'p.STAN_MIN', 'p.CENA')
            ->from('parts', 'p')
            ->where('p.ID = :id')
            ->setParameter('id', $dataID, \PDO::PARAM_STR);
        return $queryBuilder->execute()->fetchAll();
    }

    public function updatePart($part)
    {
        try {
            $this->db->beginTransaction();

            $insert['STAN_MIN'] = $part['ilosc'];
            $insert['CENA'] = strval($part['cena']);

            $this->db->update('parts', $insert, ['ID' =>$part['ID']]);


            $this->db->commit();
        } catch (DBALException $exception) {
            $this->db->rollBack();
            throw $exception;
        }
    }
}



