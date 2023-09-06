<?php
session_start();
require "../components/validation.php";
require "../components/connect.php";
$id = $_GET['id'];
$product_details = $validate->get_user_details("localhost", "root", "", "shop_db", "products", "id=$id");
$username = $product_details[0][1];
$price = $product_details[0][2];
$image = $product_details[0][3];
$category = $user->get_specific_category(["categories" => "name"], "categories", "products", "categories.id = products.category_id ", "products.id = $id");
$category_id = $user->get_specific_category(["categories" => "id"], "categories", "products", "categories.id = products.category_id ", "products.id = $id");
$category_name = $category[0]['name'];
$category_id = $category_id[0]['id'];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Update Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f1f1f1;
        }

        .update-form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .update-form h1 {
            font-size: 24px;
            margin: 0 0 20px;
        }

        .update-form input[type="text"],
        .update-form input[type="email"],
        .update-form input[type="password"],
        .update-form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .update-form input[type="file"] {
            margin-top: 10px;
        }

        .update-form button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .update-form button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="update-form">
        <h1>Update Product</h1>

        <form action="../handlers/edit_product_handle.php" method="POST" enctype="multipart/form-data">
            <?php

            if (isset($_SESSION['error'])) {
                echo $_SESSION['error'];
                echo "<br>";
            }
            unset($_SESSION['error']);
            ?>
            <input type="hidden" value="<?php echo $id ?>" name="id">
            <input type="hidden" value="<?php echo $category_id ?>" name="category_id">

            <label for="name">Name:</label>
            <input type=" text" id="name" name="name" value="<?php echo $username ?>">
            <br>
            <br>
            <label for="name">Category Name:</label>
            <input type=" text" id="category" name="category" value="<?php echo $category_name ?>">
            <br>
            <br>
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" value="<?php echo $price ?>">
            <br>
            <label for="image">Image:</label>
            <input type="file" name="image">
            <br>
            <button type="submit" style="margin-left : 150px ;">Update</button>
        </form>
    </div>
</body>

</html>