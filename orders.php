<?php

include 'components/connect.php';
$users_details = $user->getusers(["id", "name", "email"], "users");

$query = "SELECT users.name as Customer_name , products.name as Product_name , products.image as Product_image , cart.qty as Quantity , cart.price 
from cart 
join users 
on cart.user_id = users.id 
join products
on cart.product_id = products.id  ";
$conn = $user->connection;
$sql = $conn->query($query);
$sql = $sql->fetchAll(PDO::FETCH_ASSOC);



?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>My Orders</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/table_style.css">

</head>

<body>

   <?php include 'components/header.php'; ?>

   <section class="orders">

      <h1 class="heading" style="color:red;">The Orders Confirmed Form Customers</h1>
      <table class="fl-table">
         <thead>
            <tr>
               <th> Customer Name </th>
               <th>Product Name</th>
               <th>Image</th>
               <th>quantity</th>
               <th>Price</th>
            </tr>
         </thead>
         <tbody>

            <?php

            foreach ($sql as $key => $value) :?>
               <tr>
                  <?php
                  foreach ($value as $val) :
                     $type = explode(".", (string)$val);
                     $type = end($type);
                     if ($type == "jpg") { ?>
                        <td>
                           <img src="uploaded_files/<?= $val ?>" 
                        </td>
                     <?php }else{ ?>
                     <td>
                        <?php echo $val; ?>
                     </td>
                  <?php }endforeach; ?>
               </tr>
            <?php endforeach; ?>

         <tbody>
      </table>



      </div>

   </section>














   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

   <script src="js/script.js"></script>

   <?php include 'components/alert.php'; ?>

</body>

</html>