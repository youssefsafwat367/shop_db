<?php
session_start();
require('../components/validation.php');
require('../components/connect.php');
$name = $_POST['name'];
$price = $_POST['price'];
$category_na = $_POST['category'] ;

$id = $_POST['id'];
// var_dump($_POST);
$category_id = $_POST['category_id'];
if (!$validate->sanitize($_SERVER['REQUEST_METHOD'])) {
    $errors = "The method is not defined";
    echo $errors;
    $_SESSION['error'] = $errors;
    $validate->redirect("../operations/update_product.php?id= $id");
    die;
} elseif ($validate->required_VALIDATION($_POST['name'])) {
    $errors = "The product name is required";
    echo $errors;
    $_SESSION['error'] = $errors;
    $validate->redirect("../operations/update_product.php?id=$id");
    die;
} elseif ($validate->required_VALIDATION($_POST['price'])) {
    $errors = "The product price is required";
    echo $errors;
    $_SESSION['error'] = $errors;
    $validate->redirect("../operations/update_product.php?id=$id");
    die;
}elseif ($validate->required_VALIDATION($_FILES['image']['name'])) {
    $errors = "The product image is required";
    echo $errors;
    $_SESSION['error'] = $errors;
    $validate->redirect("../operations/update_product.php?id=$id");
    die; }
else {
    $category = $user->get_specific_category(["categories" => "name"], "categories", "products", "categories.id = products.category_id ", "products.id = $id");
    // var_dump($category) ;
    // $category_name = $category[0]['name'];
    // echo "<br>" ;
    // echo $category_name ;
    $image = $_FILES['image']['name'];
    $ext = pathinfo($image, PATHINFO_EXTENSION);
    $rename = time() . '.' . $ext;
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'D:\My Courses\Back End\Eraa Soft Course\Sessions codes\New folder (7)\project\uploaded_files\\' . $rename;
    $user->update_user(['name' => $name , "price" => $price , "image" => $rename] , "products" , "id=$id") ;
    $user->update_user(['name' => $category_na], "categories", "id=$category_id");
    move_uploaded_file($image_tmp_name, $image_folder);
    $validate->redirect("../view_products.php");

}
