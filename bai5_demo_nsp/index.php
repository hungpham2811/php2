<?php
// require_once 'controllers/c_category.php';
// require_once 'controllers/c_customer.php';
// require_once 'controllers/c_products.php';
// require_once 'models/category.php';
// require_once 'models/products.php';
// require_once 'models/customers.php';
require_once 'vendor/autoload.php';
use App\Controllers\c_product;
use App\Controllers\c_category;
use App\Models\category;
use App\Controllers\c_customer;
$prd = new c_product();
$category = new category();
$c_category = new c_category();
$ctm=new c_customer();

