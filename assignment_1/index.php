<?php
require_once 'vendor/autoload.php';
use App\Controllers\c_customer;
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        //dieu huong ve trang danh sach san pham
        // require_once 'controllers/ProductController.php';
        $customerController = new c_customer();
        echo $customerController->listCustomer();
        break;
   case 'add-customer':
        $customerController = new c_customer();
        echo $customerController->form_create();
       break;
    case 'create-customer':
        $customerController = new c_customer();
        echo $customerController->createCustomer();
        break;
   case 'remove-customer':
        $customerController = new c_customer();
        echo $customerController->removeCustomer();
       break;
    case 'edit-customer':
        $customerController = new c_customer();
        echo $customerController->edit_customer();
       break;
}
?>