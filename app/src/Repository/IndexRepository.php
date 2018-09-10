<?php
namespace Repository;

use Doctrine\DBAL\Connection;

/**
 * Index Repository
 */

class IndexRepository
{
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
     * query to list all parts brands
     *
     * @return array Result
     */
    public function findAll()
    {
        $ask = $this->db->createQueryBuilder();

        $ask->select('DISTINCT b.brand as FIRMA', 'b.id')
            ->from('parts', 'p')
            ->innerJoin('p','brands','b','p.FIRMA = b.id');
        return $ask->execute()->fetchAll();
    }



}