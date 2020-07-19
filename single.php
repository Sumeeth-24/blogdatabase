<?php include("path.php") ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php');

if (isset($_GET['id'])) {
$post = selectOne('posts', ['id' => $_GET['id']]);

}
$topics = selectAll('topics');

$posts = selectAll('posts', ['published' => 1]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $post['title']; ?> | HeartfulMinds</title>
   <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"/>
   <link rel="stylesheet" href="style.css"/>
   <link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Josefin+Slab:ital,wght@0,400;0,600;1,300;1,400;1,600&family=Muli:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap"/>
    
</head>
<body>


<?php include(ROOT_PATH . "/app/includes/header.php"); ?>

    <!--Page Wrapper-->
    <div class="page-wrapper">
        <!--Post Slider-->
        

        <!--// Post Slider-->

        
        <!--Content-->
        <div class="content clearfix">


            <!--Main Content Wrapper-->
            <div class="main-content-wrapper">
            <div class="main-content single">
                <h1 class="post-title"><?php echo $post['title']; ?></h1>
                <div class="post-content">
                  <?php echo html_entity_decode($post['body']); ?>
                </div>
               

            </div>
        </div>
            <!--// Main Content-->


             <!--Sidebars-->
            <div class="side-bar single">
               <div class="section popular">
                   <h2 class="section-title">Popular</h2>

                   <?php foreach ($posts as $p): ?>

                   <div class="post clearfix">
                       <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
                       <a href="" class="title"><h3><?php echo $p['title']; ?></h3></a>
                   </div>

                   <?php endforeach; ?>

                   
               </div>

                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                    <?php foreach ($topics as $topic): ?>
                        <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
                       
                   <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <!--//Sidebars-->

        </div>
        <!--End of Content-->
    </div>

    <!--End of Page Wrapper-->


  
    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>


    <!--JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
    <!--Slick carousel-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!--Custom Script-->
<script src="assets/js/script.js"></script>
</body>
</html>