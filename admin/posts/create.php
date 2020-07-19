<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");
adminOnly();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Section-Add Post</title>
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
                    <a href="create.php" class="btn btn-big">Add Post</a>
                    <a href="index.php" class="btn btn-big">Manage Post</a>
                </div>

                <div class="content">
                    <h2 class="page-title">Add Posts</h2>

                    <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>

                   <form action="create.php" method="post" enctype="multipart/form-data">
                       <div>
                           <label>Title</label>
                           <input type="text" name="title" value ="<?php echo $title ?>" class="text-input">
                       </div>

                       <div>
                        <label>Body</label>
                        <textarea name="body" id="body"><?php echo $body ?></textarea>
                    </div>

                    <div>
                        <label>Image</label>
                        <input type="file" name="image"  class="text-input">
                    </div>

                    <div>
                        <label>Topic</label>
                        <select name="topic_id" class="text-input" >
                            <option value=""></option>
                           


                            <?php foreach ($topics as $key => $topic): ?>
                            <?php if (!empty($topic_id) && $topic_id == $topic['id']): ?>
                                <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                            <?php else: ?>
                                <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
 
                         <?php if (empty($published)): ?>
                                    <label>
                                <input type="checkbox" name="published">
                                Publish
                            </label>
                         <?php else: ?>
                                        <label>
                                    <input type="checkbox" name="published" checked>
                                    Publish
                                </label>
                         <?php endif; ?>
                      

                    </div>
                    <div>
                        <button type="submit" name="add-post" class="btn btn-big">Add Post</button>
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