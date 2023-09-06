<?php
session_start();
require_once('../components/validation.php'); 
include "../components/connect.php" ;

// check method and written inputs
if (($validate->sanitize($_SERVER["REQUEST_METHOD"]) && $validate->check_written($_SERVER["REQUEST_METHOD"]))) {
    foreach ($_POST as $key => $input) :
        $$key = trim(htmlspecialchars(htmlentities($input)));
    endforeach;
} else {
    $_SESSION['error'] = "invalid method";
    unset($_SESSION['error']);
}

####################################------------- username Validation -------------##################################
$errors_for_username = [];
// check username is set or not 
if ($validate->required_VALIDATION($name)) {
    $errors_for_username[] = "Username Is Required";
}
// check username characters is grater than 3 or not 
elseif ($validate->min_VALIDATION($name)) {
    $errors_for_username[] = "Username Characters Must Be Greater Than 3";
}
// check username characters is grater than 3 or not
elseif ($validate->max_VALIDATION($name)) {
    $errors_for_username[] = "Username Characters Must Be Lower Than 25 ";
}
// to return to register page with array 
$_SESSION['errors_for_username'] =  $errors_for_username;
$validate->redirect('../register.php');
####################################------------- Email Validation -------------##################################
$errors_for_email = [];
$check = $validate->check_existing("Localhost", "root", "","shop_db" , "users" , $email);
// check email is set or not 
if ($validate->required_VALIDATION($email)) {
    $errors_for_email[] = "Email Is Required";
}
// check if it is a correct email or not 
elseif (!$validate->valid_email_VALIDATION($email)) {
    $errors_for_email[] = "Please Enter A Valid Email";
}
// check if the email is already exists or not
elseif ($check != NULL) {
    $errors_for_email[] = "This Email Already Exists , Please Enter Another Email";
}
$validate->redirect('../register.php');
$_SESSION['$errors_for_email'] =  $errors_for_email;
####################################------------- Password Validation -------------##################################
$errors_for_password = [];
// check password is set or not 
if ($validate->required_VALIDATION($password)) {
    $errors_for_password[] = "Password Is Required";
}
// check Password characters is grater than 8 or not 
elseif ($validate->min_password_VALIDATION($password)) {
    $errors_for_password[] = "Password Characters Must Be Greater Than 8";
} elseif ($validate->max_passwprd_VALIDATION($password)) {
    $errors_for_password[] = "Password Characters Must Be Lower Than 25 ";
}
$validate->redirect('../register.php');
$_SESSION['errors_for_password'] =  $errors_for_password;


####################################------------- store informations in database file  -------------##################################
if (empty($errors_for_username) && empty($errors_for_email) && empty($errors_for_password)) {
    $password = sha1($password);
    echo $user->Insert(['name' => "$name" , 'password' => "$password" , 'email' => "$email"] , "users");
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['success'] = "The Email Is Created Successfully" ;
    $validate->redirect('../register.php');
} else {
    $validate->redirect('../register.php');
    die;
}
