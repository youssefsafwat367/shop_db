<?php
session_start();
require "../components/connect.php" ;
require "../components/validation.php" ;
    $id = $_GET['id'] ;
    echo $id ;
    $user->delete_user("products" , "id=$id") ;
    $validate->redirect("../view_products.php");

