<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- custom css file -->
    <link rel="stylesheet" href="css/styleuser.css">

</head>

<body>
    <!-- admin login form section start -->
    <section class="form-container">
        <form action="./handlers/login_handle.php" method="POST">
            <h3>Login Now</h3>
            <input type="email" name="email" placeholder="Enter Your Email" class="box" oninput="this.value = this.value.replace(/\s/g,'')">
            <?php if (!empty($_SESSION['error_for_email'])) :
            ?>
                <div class="delete-btn-error"><?php echo $_SESSION['error_for_email'] ?></div>
            <?php endif;
            unset($_SESSION['error_for_email']) ?>
            <input type="password" name="password" placeholder="Enter Your Password" class="box" oninput="this.value = this.value.replace(/\s/g,'')">
            <?php if (!empty($_SESSION['error_for_password'])) :
            ?>
                <div class="delete-btn-error"><?php echo $_SESSION['error_for_password'] ?></div>
            <?php endif;
            unset($_SESSION['error_for_password']) ?>
            <input type="submit" value="Login Now" name="submit" class="btn">
            <h2>Don't Have Account</h2>
            <a href="./register.php" style="font-size:20px ; background-color:#2980b9; width: 100%; display:block ;color:white ; border-radius: 10px; height:25px">Register Now</a>
        </form>

    </section>
    <!-- admin login form section end -->

</body>

</html>