<?php
namespace Project\model;


use PDO;
use PDOException;

class DB
{
    protected $dns;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dns = 'mysql:host=localhost;dbname=product_management';
        $this->username ='root';
        $this->password = "12345678";
    }

    public function connect()
    {
        $conn = null;

        try {
            $conn = new PDO($this->dns, $this->username, $this->password);
        } catch (PDOException $exception) {
            $exception->getMessage();
            exit();
        }

        return $conn;
    }
}