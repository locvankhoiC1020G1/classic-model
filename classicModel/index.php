<?php
include __DIR__. "/vendor/autoload.php";
use App\Model;
$customers = new Model\Customer\CustomerManager();
$customer = $customers->getAllCustomers();
$arr = $customers->convertObj($customer);
echo "<pre>";
var_dump($arr);
?>

