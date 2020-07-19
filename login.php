<?php include("path.php") ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
guestOnly();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
   <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"/>
   <link rel="stylesheet" href="style.css"/>
   <link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Josefin+Slab:ital,wght@0,400;0,600;1,300;1,400;1,600&family=Muli:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap"/>
    
</head>
<body>


<?php include(ROOT_PATH . "/app/includes/header.php"); ?>

    <div class="auth-content">

       <form action="login.php" method="post">
       <h2 class="form-title">Login</h2>

       <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>


       <div>
           <label>Username</label>
           <input type="text" name="username" value="<?php echo $username; ?>" class=" text-input">
       </div>

    <div>
        <label>Password</label>
        <input type="password" name="password" value="<?php echo $password; ?>" class=" text-input">
    </div>

    <div>
        <button type="submit" name="login-btn" class="btn btn-big">Login</button>
    </div>
    <p>Or <a href=" <?php echo BASE_URL .'/register.php' ?>">Sign Up</a></p>

</form>

    </div>

   

    <!--JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
    
  <!--Custom Script-->
<script src="assets/js/script.js"></script>
</body>
</html>