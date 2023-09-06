<?php
require"../components/connect.php" ;    
$product_id = $_GET['product_id'] ;
$user_id = $_GET['user_id'] ;
$price = $_GET['price'] ;
$user->Insert(["product_id"=>$product_id, "user_id"=>$user_id, "price"=>$price] , "cart") ;
header("Location:../view_products.php") ;

