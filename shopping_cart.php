<?php

include 'components/connect.php';
include 'components/validation.php';
$product_id = $_GET['id'];
if (!empty($_GET)) {
   $products = $user->getusers(["name"], "products", "id=$product_id");
   $product = $products[0]['name'];


   $price = $user->getusers(["price"], "products", "id=$product_id");
   $price = $price[0]['price'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Shopping Cart</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="./css/table_style.css">


</head>

<body>
   <?php include 'components/header.php';
   $id = $validate->get_id("localhost", "root", "", "shop_db", "users", $_SESSION['email']);

   ?>

   <section class="products">
      <h1 class="heading" style="color:white;">shopping cart</h1>
      <div class="table-wrapper">
         <?php if (!empty($_GET)) {

         ?>
            <table class="fl-table">
               <thead>
                  <tr>
                     <th> Product Name </th>
                     <th>Price</th>
                     <th>Confirm</th>
                     <th>Delete</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>

                     <td>
                        <?php
                        echo $product;
                        ?>
                     </td>
                     <td>
                        <?php
                        echo $price;
                        ?>
                     </td>

                     <td>
                        <a href="./handlers/add_product_to_cart_handle.php?product_id=<?= $product_id ?>&price=<?= $price ?>&user_id=<?= $id ?>" class="update">Confirm</a>
                     </td>
                     <td>
                        <a href="./shopping_cart.php" class=" delete">Delete</a>
                     </td>
                  </tr>
               <tbody>
            </table>
   </section>
<?php
         } ?>






<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<script src="js/script.js"></script>

<?php include 'components/alert.php'; ?>

</body>

</html>