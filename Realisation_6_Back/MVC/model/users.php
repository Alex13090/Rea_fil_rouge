<?php
class Users
{
    public $connect;
    private $table = 'users';

    private $id;
    private $name;
    private $firstName;
    private $email;
    private $password;

    public function __construct()
    {
        $this->connect = new MyDBConfig();
        $this->connect = $this->connect->getConnection();
    }

    public function getTable()
    {
        return $this->table;
    }

    public function getIdUser()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getMail()
    {
        return $this->email;
    }

    public function setMail($email)
    {
        $this->email = $email;
    }

    public function readUsers()
    {
        $myQuery = 'SELECT 
                            * 
                        FROM 
                            ' . $this->table . '';
        $stmt = $this->connect->prepare($myQuery);

        $stmt->execute();

        return $stmt;
    }

    public function readUser()
    {
        $myQuery = 'SELECT 
                            * 
                        FROM 
                            ' . $this->table . '
                        WHERE
                            email = :mail';

        $stmt = $this->connect->prepare($myQuery);
        $stmt->bindParam(":mail", $this->email);
        $stmt->execute();
        return $stmt;
    }
    public function createUser()
    {
        $myQuery = 'INSERT INTO
                            ' . $this->table . '
                        SET
                            name = :name,
                            firstName = :fName,
                            password = :password,
                            email = :mail';
        $stmt = $this->connect->prepare($myQuery);

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':fName', $this->firstName);
        $stmt->bindParam(':password', $this->password);
        $stmt->bindParam(':mail', $this->email);

        return $stmt->execute();
    }

    public function updateUser()
    {
        $myQuery = 'UPDATE
                            ' . $this->table . '
                        SET
                            name = :name,
                            firstName = :fName,
                            password = :password,
                            email = :mail
                        WHERE
                        email = :email';

        $stmt = $this->connect->prepare($myQuery);

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':firstName', $this->fName);
        $stmt->bindParam(':password', $this->password);
        $stmt->bindParam(':mail', $this->email);
        $stmt->bindParam(':email', $this->email);

        if ($stmt->execute) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteUser()
    {
        $myQuery = 'DELETE FROM ' . $this->table . ' WHERE email = ' . $this->email . '';

        $stmt = $this->connect->prepare($myQuery);

        $stmt->bindParam(':mail', $this->email);

        if ($stmt->execute) {
            return true;
        } else {
            return false;
        }
    }

    public function verifyMail()
    {
        $myQuery = 'SELECT
                            *
                        FROM
                            ' . $this->table . '
                        WHERE 
                            email = :mail';

        $stmt = $this->connect->prepare($myQuery);
        $stmt->bindParam(':mail', $this->email);

        $stmt->execute();
        return $stmt;
    }
}
