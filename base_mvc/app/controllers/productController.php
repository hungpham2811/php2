<?php
namespace App\Controllers;
class productController{
    public function __construct(){
        echo "hello controller";
    }
    public function index(){
        echo 123;
        die();
    }
}