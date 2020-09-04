<?php

class Database
{
    private $dbConnection;
    private $dbHost;
    private $dbName;
    private $dbUser;
    private $dbPassword;
    private $dbCharset;

    private $pdo;
    private $pdoOptions = array();

    public function __construct()
    {
        $this->dbHost = constant('HOST');
        $this->dbName = constant('DB');
        $this->dbUser = constant('USER');
        $this->dbPassword = constant('PASSWORD');
        $this->dbCharset = constant('CHARSET');
    }

    public function OpenConnection()
    {
        try {
            $this->dbConnection = "mysql:host=" . $this->dbHost . ";dbname=" . $this->dbName . ";charset=" . $this->dbCharset;
            $this->pdoOptions = [
                PDO::ATTR_ERRMODE           => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES  => false,
            ];
            $this->pdo = new PDO($this->dbConnection, $this->dbUser, $this->dbPassword, $this->pdoOptions);
            return $this->pdo;
        } catch (PDOException $ex) {
            print_r('Error connection: ' . $ex->getMessage());
        }
    }


    /*public function CloseConnection()
    {
        mysqli_close($this->dbConnection);
    }*/
}
