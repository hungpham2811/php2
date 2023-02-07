<?php 
namespace App\Controllers;
require_once 'vendor/autoload.php';
use App\Models\m_customer;
class c_customer
{
    public function listCustomer()
    {
        $customer = new m_customer();
        $customers = $customer->getCustomer();
        include_once "views/customers/listcustomer.php";
    }
    public function form_create(){
        include_once"views/customers/create_customer.php";
    }
    public function createCustomer(){
        
        $ten_kh= $_POST['username'];
        $sdt=$_POST['sdt'];
        $customer = new m_customer();
        $customers = $customer->create_customer();
    }
    public function removeCustomer()
    {
        $customer = new customer();
        $customer->deleteCustomer();
        header("location: ?url=/");
        die();
    }
    public function edit_customer()
    {
        // $customer = new m_customer();
        // $each = $customer->read_one_customer();
        include_once"views/customers/update_customer.php";
    }
}

?>