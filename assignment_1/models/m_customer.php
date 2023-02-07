<?php
namespace App\Models;
use App\Models\databae;
// require_once "models/database.php";
class m_customer extends database
{
    public function getCustomer()
    {
        $sql = "select * from customers";
        return $this->getData($sql);
    }
    public function getOne(){
        $id = $_GET['id'];
        $sql = "select * from customers where id='$id'";
        return $this->getData($sql);
    }
    public function deletCustomer()
    {
        $id = $_GET['id'];
        $sql = "delete from customers where id = $id";
        $this->getData($sql, false);
    }
    public function create_customer()
    {
        $sql = "insert into customer(ten_kh,sdt) values('$ten_kh', '$sdt')";
        return $this->getData($sql,false);
    }
}