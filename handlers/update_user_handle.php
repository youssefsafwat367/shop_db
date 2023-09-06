<?php

session_start();
require('../components/validation.php');
require('../components/connect.php');
$id = $validate->get_id("localhost", "root", "", "shop_db", "users", $_SESSION['email']);

$users = $validate->get_user_details("localhost", "root", "", "shop_db", "users", "id=$id");
if (!$validate->sanitize($_SERVER['REQUEST_METHOD'])) {
    $errors = "The method is not defined";
    $_SESSION['the_error'] = $errors;
    $validate->redirect('../update_user.php');
    
    die;
} elseif ($validate->required_VALIDATION($_POST['name'])) {
    $errors['the_error'] = "The User Name is required";
    $_SESSION['the_error'] = $errors['the_error'];
    $validate->redirect('../update_user.php');
    

    die;
} elseif ($validate->required_VALIDATION($_POST['email'])) {
    $errors['the_error'] = "The User Email is required";
    $_SESSION['the_error'] = $errors['the_error'];
    

    $validate->redirect('../update_user.php');
    die;
} elseif ($validate->required_VALIDATION($_POST['password'])) {
    $errors['the_error'] = "The User Password is required";
    $_SESSION['the_error'] = $errors['the_error'];
    

    $validate->redirect('../update_user.php');
    die;
}else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password= sha1($_POST['password']);
    $user->update_user(['name' => $name , 'password' => $password , 'email' => $email] , "users" , "id=$id");
    $validate->redirect('../login.php');
}
