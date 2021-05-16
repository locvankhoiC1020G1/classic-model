<?php

namespace App\Model\Database;
class ConnectDB
{
    protected $dsn;
    protected $user;
    protected $password;
    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=classicmodels";
        $this->user = "root";
        $this->password = "12345678";
    }

    public function connect()
    {
        try {
            return  new \PDO($this->dsn,$this->user,$this->password);
        }
        catch (\PDOException $exception){
            echo "lỗi kết nối";
            exit();
        }
    }
}