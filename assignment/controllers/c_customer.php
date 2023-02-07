<?php 
require_once "models/m_customer.php";
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
        

        $customer = new m_customer();
        $customers = $customer->create_customer();
        header("location: ?url=/");
    }
    public function removeCustomer()
    {

        $customer = new m_customer();
        $customer->deletCustomer();
        header("location: ?url=/");
        die();
    }
    public function loadOne_customer()
    {
        $customer = new m_customer();
        $customers = $customer->getOne();
        include_once "views/customers/update_customer.php";
    }
    public function update_customer(){
        $customer = new m_customer();
        $customers = $customer->edit_customer();
        // var_dump ($customers);
        header("location: ?url=/");
    }
}

?>