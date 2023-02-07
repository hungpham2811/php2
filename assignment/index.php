<?php
        require_once 'controllers/c_customer.php';
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
switch ($url) {
    case '/':
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
        echo $customerController->loadOne_customer();
       break;
       case 'update-customer':
        $customerController = new c_customer();
        echo $customerController->update_customer();
       break;
}
?>