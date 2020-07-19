<?php include("path.php");

 include(ROOT_PATH . "/app/controllers/topics.php"); 

 $posts = array();
 $postsTitle = 'Recent Posts';

 if (isset($_GET['t_id'])) {
     $posts = getPostsByTopicId($_GET['t_id']);
    // $postsTitle = "'You searched for posts under '" . $_GET['name'] . "'";
 }

 elseif (isset($_POST['search-term'])) {
    $postsTitle = "'You searched for  '" . $_POST['search-term'] . "'";
    $post = searchPosts($_POST['search-term']);
} else {
    $posts = getPublishedPosts();
}



 
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
   <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"/>
   <link rel="stylesheet" href="style.css"/>
   <link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Josefin+Slab:ital,wght@0,400;0,600;1,300;1,400;1,600&family=Muli:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap"/>
    
</head>
<body>

  <?php include("app/includes/header.php"); ?>
  
  <?php include("app/includes/messages.php"); ?>

  

    <!--Page Wrapper-->
    <div class="page-wrapper">
        <!--Post Slider-->
        <div class="post-slider">
            <h1 class="slider-title">Trending Posts</h1>
           <i class="fas fa-chevron-left prev"></i>
           <i class="fas fa-chevron-right next"></i>


            <div class="post-wrapper">
              
              <?php foreach ($posts as $post): ?>

                <div class="post">
                    <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="slider-image">
                   <div class="post-info">
                       <h4><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h4>

                       <i class="fas fa-user"><?php echo $post['username']; ?></i>
                       &nbsp;
                       <i class="fas fa-calendar"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                   </div>
                </div>

              <?php endforeach; ?>

               
                
            </div>
        </div>


        <!--// Post Slider-->

        
        <!--Content-->
        <div class="content clearfix">

            <div class="main-content">
                <h1 class="recent-post-title"><?php echo $postsTitle ?></h1>

                <?php foreach ($posts as $post): ?>

                <div class="post clearfix">
                    <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="post-image">
                    <div class="post-preview">
                        <h2><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
                        <i class="fas fa-user"><?php echo $post['username']; ?></i>
                        &nbsp;<i class="fas fa-calendar"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                        <div class="preview-text">
                            <p><?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?></p>
                                 <a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more">Read More</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>


            </div>

            <div class="side-bar">

                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="index.php" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Search...">
                    </form>
                </div>

                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                    <?php foreach ($topics as $key => $topic): ?>
                        <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
                       
                     <?php endforeach; ?>
                    </ul>
                </div>
            </div>

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