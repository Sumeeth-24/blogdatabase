<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
adminOnly();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Section-Manage Users</title>
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
                    <a href="create.php" class="btn btn-big">Add Users</a>
                    <a href="index.php" class="btn btn-big">Manage Users</a>
                </div>

                <div class="content">
                    <h2 class="page-title">Manage Users</h2>

                    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th colspan="2">Action</>
                        </thead>

                        <tbody>
                         <?php foreach ($admin_users as $key => $user ): ?>
                         <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $user['username']; ?></td>
                                <td><?php echo $user['email']; ?></td>
                                <td><a href="edit.php?id=<?php echo $user['id']; ?>" class="edit">edit</a></t>
                                <td><a href="index.php?delete_id=<?php echo $user['id']; ?>" class="delete">delete</a></td>
                                
                            </tr>
                        <?php endforeach; ?>
                            

                        </tbody>
                    </table>
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