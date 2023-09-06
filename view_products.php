<?php
include 'components/connect.php';
include 'components/validation.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>View Products</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
   <link rel="stylesheet" href="./css/table_style.css">
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'components/header.php';
   $id = $validate->get_id("localhost", "root", "", "shop_db", "users", $_SESSION['email']);
   $products = $validate->get_users("localhost", "root", "", "shop_db", "products");
   $users = $validate->get_user_details("localhost", "root", "", "shop_db", "users", "id=$id");
   $i = 0;
   ?>

   <section class="products">

      <h1 class="heading" style="color:white;">all products</h1>
      <div class="table-wrapper">
         <table class="fl-table">
            <thead>
               <tr>
                  <th> # </th>
                  <th>Product Name</th>
                  <th>Price</th>
                  <th>Image</th>
                  <th>Category_id</th>
                  <th>Category</th>
                  <?php if ($users[0][4] == "admin") : ?>
                     <th>Operations</th>
                  <?php endif; ?>
                  <?php if ($users[0][4] == "user") : ?>
                     <th>Cart</th>
                  <?php endif; ?>


               </tr>
            </thead>
            <tbody>
               <?php

               ?>
               <?php foreach ($products as $product) :
               ?>
                  <tr>
                     <?php
                     foreach ($product as $value) :
                        $type = explode(".", $value);
                        $type = end($type);
                        if ($type == "jpg") { ?>
                           <td>
                              <img src="uploaded_files/<?= $value ?>" </td>
                           <?php
                        } else {
                           echo "<td>" . $value . "</td>";
                        }
                           ?>
                        <?php
                     endforeach; ?>
                        <?php
                        $category = $user->join_table(["categories" => "name"], "categories", "products", "categories.id = products.category_id ");
                        ?>
                           <td><?= $category[$i]['name']; ?></td>
                           <?php
                           $i++;
                           ?>
                           <?php if ($users[0][4] == "admin") : ?>
                              <td>
                                 <a href="./operations/update_product.php?id=<?= $product[0] ?>" class="update">Update</a>
                                 <a href="./handlers/delete_product_handle.php?id=<?= $product[0] ?>" class="delete">Delete</a>
                              </td>
                           <?php endif; ?>
                           <?php if ($users[0][4] == "user") : ?>
                              <td>

                                 <a href="./shopping_cart.php?id= <?= $product[0] ?>" class="update">Add To Cart</a>


                              </td>
                           <?php endif; ?>
                           <?php endforeach;
                           ?>;

                  </tr>

            <tbody>
         </table>
      </div>


</body>

</html>