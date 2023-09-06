<?php
session_start();
include '../components/connect.php' ;
include '../components/validation.php';
$warning_msg = [];
$success_msg = [];
$id = $id = $validate->get_id("localhost", "root", "", "shop_db", "users", $_SESSION['email']);
$name = $_POST['name'];
$price = $_POST['price'];
$category_id = $_POST['category_id'];
$image = $_FILES['image']['name'];
$ext = pathinfo($image, PATHINFO_EXTENSION);
$rename = time().'.'.$ext;
$image_tmp_name = $_FILES['image']['tmp_name'];
$image_size = $_FILES['image']['size'];
$image_folder = 'D:\My Courses\Back End\Eraa Soft Course\Sessions codes\New folder (7)\project\uploaded_files\\'.$rename;
// if($image_size > 2000000){
// $warning_msg[] = 'Image size is too large!';
// $_SESSION['warning'] = $warning_msg;
// $validate->redirect('../add_product.php') ;
// }else{
$conn = $user->connection;
$add_product = $conn->prepare("INSERT INTO `products`(id, name, price, image,category_id) VALUES(?,?,?,?,?)");
$add_product->execute([$id, $name, $price, $rename,$category_id]);
move_uploaded_file($image_tmp_name, $image_folder);
$success_msg[] = 'Product added!';
$_SESSION['success'] = $success_msg;

$validate->redirect('../add_product.php');
// }

?>