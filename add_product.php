<?php
session_start();
include "./components/connect.php";
include "./components/validation.php";
$id = $validate->get_id("localhost", "root", "", "shop_db", "users", $_SESSION['email']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add Product</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'components/header.php'; ?>

   <section class="product-form">

      <form action="./handlers/add_product_handle.php" method="POST" enctype="multipart/form-data">
         <h3>product info</h3>
         <p>product name <span>*</span></p>
         <input type="text" name="name" placeholder="enter product name" required maxlength="50" class="box">
         <p>Category Id <span>*</span></p>
         <input type="number" name="category_id" placeholder="enter Category Id" required min="0" max="9999999999" maxlength="10" class="box">
         <p>product Price <span>*</span></p>
         <input type="number" name="price" placeholder="enter product price" required min="0" max="9999999999" maxlength="10" class="box">
         <p>product image <span>*</span></p>
         <input type="file" name="image" required accept="image/*" class="box">
         <input type="submit" class="btn" name="add" value="add product">
      </form>

   </section>


   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

   <script src="js/script.js"></script>

   <?php include 'components/alert.php'; 
   ?>

</body>

</html>