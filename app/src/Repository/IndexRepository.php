<?php
namespace Repository;

use Doctrine\DBAL\Connection;
use Utils\Paginator;

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
     * query and fetch all tables
     *
     * @return array Result
     */
    public function findAll()
    {
        $ask = $this->db->createQueryBuilder();

        $ask->select('DISTINCT p.FIRMA')
            ->from('parts', 'p');
        return $ask->execute()->fetchAll();
    }



}