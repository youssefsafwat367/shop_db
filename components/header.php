<?php
session_start();
if (empty($_SESSION)) {
   header("Location:login.php");
}
require "components/val.php";
$id = $val->get_id("localhost", "root", "", "shop_db", "users", $_SESSION['email']);
$users = $val->get_user_details("localhost", "root", "", "shop_db", "users", "id=$id");
?>
<header class="header">
   <section class="flex">
      <a href="#" class="logo">Logo</a>

      <nav class="navbar">
         <?php if ($users[0][4] == "admin") : ?>
            <a href="add_product.php">add product</a>
         <?php endif; ?>

         <a href="view_products.php">view products</a>
         <?php if ($users[0][4] == "admin") : ?>
            <a href="orders.php">The orders</a>
         <?php endif; ?>
         <a href="./read_account.php">my Account</a>
         <?php if ($users[0][4] == "user") : ?>
            <a href="shopping_cart.php" class="cart-btn">cart</a>
         <?php endif; ?>
         <a href="logout.php" class="cart-btn">Logout</a>
      </nav>
      <div id="menu-btn" class="fas fa-bars"></div>
   </section>

</header>