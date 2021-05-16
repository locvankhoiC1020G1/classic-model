<?php

namespace App\Model\Customer;

use App\Model\Database;

class CustomerManager
{
    protected $connect;

    public function __construct()
    {
        $dbConnect = new Database\ConnectDB();
        $this->connect = $dbConnect->connect();
    }

    public function getAllCustomers()
    {
        $sql = "SELECT * FROM customers";
        $query = $this->connect->query($sql);
        /*        $query->execute();*/
        return $query->fetchAll();
    }

    public function convertObj($arr)
    {
        $array = [];
        foreach ($arr as $item) {
            $customer = new Customer($item['customerNumber'], $item['customerName'], $item['city'], $item['phone'], $item['country']);
            array_push($array, $customer);
        }
        return $array;
    }
}