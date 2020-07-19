<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");
adminOnly();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Section-Dashboard</title>
   <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"/>

    <!--Custom styling-->
    <link rel="stylesheet" href="../style.css"/>

   <!--Admin styling-->
   <link rel="stylesheet" href="../admin.css"/>

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
               
                <div class="content">
                    <h2 class="page-title">Dashboard</h2>

                    <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>

                  </div>

                  </div>

    <!--End of Admin Page Wrapper-->  

    </div>
   

    <!--JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<!--Ckeditor-->
<script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>


  <!--Custom Script-->
<script src="../assets/js/script.js"></script>

</body>
</html>