<?php
require_once "models/database.php";
class m_customer extends database
{
    public function getCustomer()
    {
        $sql = "select * from customers";
        return $this->getData($sql);
    }
    public function getOne(){
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        $sql = "select * from customers where id='$id'";
        return $this->getData($sql,false);
    }
    public function deletCustomer()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        $sql = "delete from customers where id = '$id'";
        $this->getData($sql, false);
    }
    public function create_customer()
    {
        $ten_kh= $_POST['username'];
        $sdt=$_POST['sdt'];
        $sql = "insert into customers (ten_kh,sdt) values('$ten_kh', '$sdt')";
        $this->getData($sql,false);
    }
    public function edit_customer()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
        }
        $ten_kh= $_POST['username'];
        $sdt=$_POST['sdt'];
        $sql = "update customers set ten_kh='$ten_kh',sdt='$sdt' where id='$id'";
        $this->getData($sql,false);
    }
}