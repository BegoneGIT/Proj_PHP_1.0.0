<?php
namespace Repository;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DBALException;
use Doctrine\DBAL\Exception\LockWaitTimeoutException;

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


    /**
     * Ceates table with specified $name and appropriate column names
     *
     * @param $name
     * @return int
     * @throws DBALException
     */
 /*   public function createTable($name)
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
    }*/


    /**
     * Simple insert $data to $table
     *
     * @param $table string Table name
     * @param $data array Table data
     */
    public function insertData($table,$data)
    {
        $this->db->insert('parts',
            [
                'INDEKS' => $data[2],
                'NAZWA' => $data[1],
                'STAN_MIN' => $data[5],
                'CENA' => floatval(str_replace(",", ".", $data[11])),
                'FIRMA' => $table
        ]
        );
    }

    /**
     * Inserts all csv contents looping trough all lines of file
     * set_time_limit is necessary to maintain connection for a loop of inserts
     *
     * Although transaction should rollback everything (should it really?) it does not occur when timeout happens
     *
     * @param $table string Table name
     * @param $handle   handle to opened csv file
     * @return int
     * @throws DBALException
     */
    public function loopInsert($table,$handle)
    {
        try{
            $this->db->beginTransaction();

            set_time_limit(300);

//            $this->createTable($table);           // this was to be used when admin could create new tables

            while(! feof($handle) ){
                $row = fgetcsv($handle,null ,';' );
                if ($row[1] || $row[2] || $row[5] || $row[11]) {
                    $this->insertData($table,$row);
                }
            }
            $this->db->commit();
        }catch (DBALException $exception){
            $this->db->rollBack();
            throw $exception;
        }
        return 1;
    }

}