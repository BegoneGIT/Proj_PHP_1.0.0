<?php
namespace Repository;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DBALException;
use Doctrine\DBAL\Schema;
use Utils\Paginator;

/**
 * File Repository
 */

class FileRepository
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






    public function createTable($name)
    {
        $schema = $this->db->getSchemaManager();
        if (!$schema->tablesExist($name)){
            try {
                $this->db->beginTransaction();

                $newtable = new Schema\Table($name);



                $newtable->addColumn(
                    'id',
                    'integer',
                    [
                        'autoincrement' => true,
                        'notnull' => true,
                    ]
                );
                $newtable->setPrimaryKey(['id']);
                $newtable->addUniqueIndex(['id']);

                $newtable->addColumn(
                    'INDEKS',
                    'string',
                    [
                        'length' => 20,
                        'notnull' => true
                    ]
                );
                $newtable->addColumn(
                    'NAZWA',
                    'string',
                    [
                        'length' => 255,
                        'notnull' => true
                    ]
                );
                $newtable->addColumn(
                    'STAN_MIN',
                    'integer',
                    [
                        'length' => 32
                    ]
                );
                $newtable->addColumn(
                    'CENA',
                    'float'
                );
                $schema->createTable($newtable);

                $this->db->commit();
            }catch (DBALException $exception){
                $this->db->rollBack();
                throw $exception;
            }
        }else{
            return 0;
        }
        return 1;
    }


    public function insertData($table,$data)
    {
        $this->db->insert($table,
            [
                'INDEKS' => $data[1],
                'NAZWA' => $data[2],
                'STAN_MIN' => $data[5],
                'CENA' => $data[11]
        ]
        );
    }
}