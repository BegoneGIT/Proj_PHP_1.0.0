<?php
/**
 * User repository
 */

namespace Repository;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DBALException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Utils\Paginator;

/**
 * Class UserRepository.
 */
class UserRepository
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
     * TrackRepository constructor.
     *
     * @param \Doctrine\DBAL\Connection $db
     */
    public function __construct(Connection $db)
    {
        $this->db = $db;
    }

    /**
     * Loads user by login.
     *
     * @param string $login User login
     * @throws UsernameNotFoundException
     * @throws \Doctrine\DBAL\DBALException
     *
     * @return array Result
     */
    public function loadUserByLogin($login)
    {
        try {
            $user = $this->getUserByLogin($login);

            if (!$user || !count($user)) {
                throw new UsernameNotFoundException(
                    sprintf('Username "%s" does not exist.', $login)
                );
            }

            $roles = $this->getUserRoles($user['id']);

            if (!$roles || !count($roles)) {
                throw new UsernameNotFoundException(
                    sprintf('Username "%s" does not exist.', $login)
                );
            }

            return [
                'login' => $user['login'],
                'password' => $user['password'],
                'roles' => $roles,
            ];
        } catch (DBALException $exception) {
            throw new UsernameNotFoundException(
                sprintf('Username "%s" does not exist.', $login)
            );
        } catch (UsernameNotFoundException $exception) {
            throw $exception;
        }
    }

    /**
     * Gets user data by login.
     *
     * @param string $login User login
     * @throws \Doctrine\DBAL\DBALException
     *
     * @return array Result
     */
    public function getUserByLogin($login)
    {
        try {
            $queryBuilder = $this->db->createQueryBuilder();
            $queryBuilder->select('u.id', 'u.login', 'u.password')
                ->from('login', 'u')
                ->where('u.login = :login')
                ->setParameter(':login', $login, \PDO::PARAM_STR);

            return $queryBuilder->execute()->fetch();
        } catch (DBALException $exception) {
            return [];
        }
    }

    /**
     * Gets user roles by User ID.
     *
     * @param integer $userId User ID
     * @throws \Doctrine\DBAL\DBALException
     *
     * @return array Result
     */
    public function getUserRoles($userId)
    {
        $roles = [];

        try {
            $queryBuilder = $this->db->createQueryBuilder();
            $queryBuilder->select('r.name')
                ->from('login', 'u')
                ->innerJoin('u', 'roles', 'r', 'u.role_id = r.id')
                ->where('u.id = :id')
                ->setParameter(':id', $userId, \PDO::PARAM_INT);
            $result = $queryBuilder->execute()->fetchAll();

            if ($result) {
                $roles = array_column($result, 'name');
            }

            return $roles;
        } catch (DBALException $exception) {
            return $roles;
        }
    }

    /**
     * Registers user
     *
     * @param array $data is $data from form
     */

    public function register($data)
    {
        try {
            $this->db->beginTransaction();

            $this->saveUserData($data);
            $id = $this->db->lastInsertId();
            $this->saveUserPhone($data, $id);
            $this->saveUserAdress($data,$id);
            $this->savePassData($data, $id);
            $this->db->commit();
        } catch (DBALException $exception){
            $this->db->rollBack();
            throw $exception;
        }
        return $data;
    }


    /**
     * Inserts data into login table
     *
     * @param array $logindata is a form data acquired registering user
     */

    private function savePassData($logindata, $id)
    {
        $submit['id_uzytkownik'] = $id;
        $submit['login'] =  $logindata['login'];
        $submit['password'] = $logindata['password'];
        $submit['role_id'] = 2;
        return $this->db->insert('login', $submit);

    }


    /**
     *      Inserts data into uzytkownicy table
     *
     * @param array $userdata Info got from form
     */

    private function saveUserData($userdata)
    {
        $submit['Imie'] = $userdata['Imie'];
        $submit['Nazwisko'] = $userdata['Nazwisko'];
        $submit['email'] = $userdata['email'];
        $submit['NIP'] = $userdata['NIP'];
        $submit['REGON'] = $userdata['REGON'];


        return $this->db->insert('uzytkownicy', $submit);
    }
    /**
     * Saves user phone to table telefon
     *
     * @param $userdata array
     * @param $id int
     * @return int
     */
    private function saveUserPhone($userdata, $id)
    {
        $telefon['id_uzytkownik'] = $id;
        $telefon['tel1'] = $userdata['tel1'];

        return $this->db->insert('telefon', $telefon);
    }

    /**
     * Saves user adress data into adres table
     *
     * @param $userdata
     * @param $id
     * @return int
     */
    private function saveUserAdress($userdata, $id)
    {
        $adress['id_uzytkownik'] = $id;
        $adress['miasto'] = $userdata['city'];
        $adress['ulica'] = $userdata['street'];
        $adress['numer'] = $userdata['number'];
        $adress['kod_pocztowy'] = $userdata['postal_code'];

        return $this->db->insert('adres', $adress);
    }



    /**
     * @param $data
     * @param $userName string with logged user name
     */
    public function updateData($data, $userName)
    {
        try {
            $this->db->beginTransaction();

            $id = $this->findLoggedUserId($userName);

            $this->updateUserData($data, $id);
            $this->updateUserPhone($data, $id);
            $this->updateUserAdress($data,$id);
            $this->db->commit();
        } catch (DBALException $exception){
            $this->db->rollBack();
            throw $exception;
        }
        return $data;
    }

    /**
     * Updates data into login table
     *
     * @param array $logindata is a form data acquired registering user
     */

    public function updatePassData($logindata, $userName)
    {
        try {
            $this->db->beginTransaction();

            $id = $this->findLoggedUserId($userName);

            $submit['id_uzytkownik'] = $id;
            $submit['login'] =  $logindata['login'];
            $submit['password'] = $logindata['password'];
            $this->db->update('login', $submit, ['id_uzytkownik' => $submit['id_uzytkownik']]);
                $this->db->commit();
        } catch (DBALException $exception){
            $this->db->rollBack();
            throw $exception;
        }
        return 1;
    }

    /**
     *      Updates data into uzytkownicy table
     *
     * @param array $userdata Info got from form
     */

    private function updateUserData($userdata, $id)
    {
        $submit['Imie'] = $userdata['Imie'];
        $submit['Nazwisko'] = $userdata['Nazwisko'];
        $submit['email'] = $userdata['email'];
        $submit['NIP'] = $userdata['NIP'];
        $submit['REGON'] = $userdata['REGON'];


        return $this->db->update('uzytkownicy', $submit, ['idUzytkownicy' => $id]);
    }

    /**
     * Updates user phone to table telefon
     *
     * @param $userdata array
     * @param $id int
     * @return int
     */
    private function updateUserPhone($userdata, $id)
    {
        $telefon['id_uzytkownik'] = $id;
        $telefon['tel1'] = $userdata['tel1'];
        $telefon['tel2'] = $userdata['tel2'];
        $telefon['tel3'] = $userdata['tel3'];

        return $this->db->update('telefon', $telefon, ['id_uzytkownik' => $telefon['id_uzytkownik']]);
    }

    /**
     * Updates user adress data into adres table
     *
     * @param $userdata
     * @param $id
     * @return int
     */
    private function updateUserAdress($userdata, $id)
    {
        $adress['id_uzytkownik'] = $id;
        $adress['miasto'] = $userdata['city'];
        $adress['ulica'] = $userdata['street'];
        $adress['numer'] = $userdata['number'];
        $adress['kod_pocztowy'] = $userdata['postal_code'];

        return $this->db->update('adres', $adress, ['id_uzytkownik' => $id]);
    }




    /**
     *  Displays User data
     *
     * @param string $userlogin is logged user login
     */

    public function displayUserData($userlogin)
    {
        $display['login'] = $userlogin;

        $userID = $this->findLoggedUserId($userlogin);

        $find = $this->findLoggedUserData($userID);
        $findPhone = $this->findLoggedUserPhone($userID);
        $findAddress = $this->findLoggedUserAddress($userID);


        $display['userData'] = $find ? $find['0'] : $find;
        $display['phone'] = $findPhone ? $findPhone['0'] : $findPhone;
        $display['adress'] = $findAddress ? $findAddress['0'] : $findAddress;


        return $display;
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
     * Find logged user data by id
     */
    private function findLoggedUserData($userId)
    {
        $resultUserData = [];


            $userDataQueryBuilder = $this->db->createQueryBuilder();

            $userData = $userDataQueryBuilder->select('u.Imie', 'u.Nazwisko', 'u.email', 'u.NIP', 'u.REGON')
                ->from('uzytkownicy', 'u')
                ->where('u.idUzytkownicy = :userId')
                ->setParameter('userId', $userId, \PDO::PARAM_STR);
            $resultUserData = $userData->execute()->fetchAll();
            return $resultUserData;

    }

    /**
     * Finds user phone in table telefon by his ID
     *
     * @param $userId
     */
    private function findLoggedUserPhone($userId)
    {
        $resultUserData = [];


        $userDataQueryBuilder = $this->db->createQueryBuilder();

        $userData = $userDataQueryBuilder->select('t.tel1', 't.tel2', 't.tel3')
            ->from('telefon', 't')
            ->where('t.id_uzytkownik = :userId')
            ->setParameter('userId', $userId, \PDO::PARAM_STR);
        $resultUserData = $userData->execute()->fetchAll();
        return $resultUserData;
    }


    /**
     * Finds user address in table telefon by his ID
     *
     * @param $userId
     */
    private function findLoggedUserAddress($userId)
    {
        $resultUserData = [];


        $userDataQueryBuilder = $this->db->createQueryBuilder();

        $userData = $userDataQueryBuilder->select('a.miasto as city', 'a.ulica as street','a.numer as number', 'a.kod_pocztowy as postal_code')
            ->from('adres', 'a')
            ->where('a.id_uzytkownik = :userId')
            ->setParameter('userId', $userId, \PDO::PARAM_STR);
        $resultUserData = $userData->execute()->fetchAll();
        return $resultUserData;
    }


    /**
     * Admin panel function
     *
     * Shows all users with their respective data.
     *
     * serving functions provide phone numbers and adresses
     *
     */

    public function showAllUsers()
    {
        $userDataQueryBuilder = $this->db->createQueryBuilder();

        return $userDataQueryBuilder
            ->select('u.idUzytkownicy','l.login', 'u.Imie', 'u.Nazwisko', 'u.email', 'u.NIP', 'u.REGON',
                't.tel1','t.tel2','t.tel3',
                'a.miasto', 'a.ulica', 'a.numer', 'a.kod_pocztowy'
            )
            ->from('uzytkownicy', 'u')
            ->leftJoin('u','login','l','u.idUzytkownicy = l.id_uzytkownik')
            ->leftJoin('u','telefon','t','u.idUzytkownicy = t.id_uzytkownik')
            ->leftJoin('u','adres','a','u.idUzytkownicy = a.id_uzytkownik')
            ->orderBy('u.idUzytkownicy', 'ASC');
        //$resultUserData = $userData->execute()->fetchAll();
        //return $resultUserData;

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
        $countQueryBuilder = $this->showAllUsers()
            ->select('COUNT(DISTINCT u.idUzytkownicy) AS total_results')
            ->setMaxResults(1);

        $paginator = new Paginator($this->showAllUsers(), $countQueryBuilder);
        $paginator->setCurrentPage($page);
        $paginator->setMaxPerPage(static::NUM_ITEMS);

        return $paginator->getCurrentPageResults();
    }


    /**
     * Delete user and all his info (in all atbles using his $id)
     */

    public function deleteUser($userName)
    {

        try {
            $this->db->beginTransaction();

            $id = $this->findLoggedUserId($userName);


            $this->db->delete('obserwowane', ['uzytkownik_ID' => $id]);
            $this->db->delete('login', ['id_uzytkownik' => $id]);
            $this->db->delete('telefon', ['id_uzytkownik' => $id]);
            $this->db->delete('adres', ['id_uzytkownik' => $id]);
            $this->db->delete('uzytkownicy', ['idUzytkownicy' => $id]);

            $this->db->commit();
        } catch (DBALException $exception){
            $this->db->rollBack();
            throw $exception;
        }

        return $this;
    }
}
