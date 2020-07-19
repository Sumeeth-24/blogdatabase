<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
adminOnly();
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Section-Add Users</title>
   <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"/>

    <!--Custom styling-->
    <link rel="stylesheet" href="../../style.css"/>

   <!--Admin styling-->
   <link rel="stylesheet" href="../../admin.css"/>

   <link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Josefin+Slab:ital,wght@0,400;0,600;1,300;1,400;1,600&family=Muli:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap"/>
    
</head>
<body>
   <!--admin header here-->
   <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?> 

    <!--Admin Page Wrapper-->
    <div class="admin-wrapper">

        <!--Left Sidebar-->
          
        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?> 

        <!--// Left Sidebar-->


         <!--Admin Content-->
         <div class="admin-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Add User</a>
                    <a href="index.php" class="btn btn-big">Manage Users</a>
                </div>

                <div class="content">
                    <h2 class="page-title">Add User</h2>

                    <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?> 

                   <form action="create.php" method="post">
                    <div>
                        <label>Username</label>
                        <input type="text" name="username" value="<?php echo $username; ?>" class=" text-input">
                    </div>
             
                    <div>
                     <label>Email</label>
                     <input type="email" name="email" value="<?php echo $email; ?>" class=" text-input">
                 </div>
             
                 <div>
                     <label>Password</label>
                     <input type="password" name="password" value="<?php echo $password; ?>" class=" text-input">
                 </div>
             
                 <div>
                     <label>Password Confirmation</label>
                     <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class=" text-input">
                 </div>

                 <div>
                
                  <?php if(isset($admin) && $admin == 1): ?>
                    <label>
                         <input type="checkbox" name="admin" checked >
                         Admin
                    </label>
                  <?php else: ?>
                    <label>
                         <input type="checkbox" name="admin" >
                         Admin
                    </label>

                  <?php endif; ?>
                   
                   
                </div>



                    <div>
                        <button type="submit" name="create-admin" class="btn btn-big">Add User</button>
                    </div>
                   </form>
                </div>

            </div>

          <!--//Admin Content-->
       
    </div>

    <!--End of Admin Page Wrapper-->  


   

    <!--JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<!--Ckeditor-->
<script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>


  <!--Custom Script-->
<script src="../../assets/js/script.js"></script>

</body>
</html>