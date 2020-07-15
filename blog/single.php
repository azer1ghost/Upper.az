<?php include "header.php";

    $blogsor=$db->prepare("SELECT * from blog where blog_id=:post");

    $blogsor->execute(array('post' => $_GET['post'])); 

    $blogcek=$blogsor->fetch(PDO::FETCH_ASSOC);
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>

  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
            
            <h1><?php echo $blogcek['blog_name']?></h1>
            <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i><?php echo $blogcek['blog_author']?></a> <span><i class="fa fa-calendar"> <?php echo $blogcek['blog_date'] ?></i></span>



            <i class="fa fa-tags"></i> 

            <?php 

            $etiketler=explode(',', $blogcek['blog_keywords']);


            foreach ($etiketler as $keywords) {?>
             
            <a href="search?result=<?php echo $keywords;?>"><?php echo $keywords?></a>


            <?php } ?>

            </div>



            <div class="single_page_content"> <img class="img-center" src="../<?php echo $blogcek['blog_picurl']?>" alt="<?php echo $blogcek['blog_name']?>">
              <?php echo $blogcek['blog_text']?>
            </div>
            <div class="social_link">
              <ul class="sociallink_nav">
                <li><a href="https://www.facebook.com/sharer.php?u=<?php echo $actual_link; ?>?post=<?php echo $blogcek['blog_id']?>&<?php echo seo($blogcek['blog_name'])?>" target="_blank"><i class="fa fa-facebook"></i></a></li>

                <li><a href="https://twitter.com/home?status=<?php echo $actual_link; ?>?post=<?php echo $blogcek['blog_id']?>&<?php echo seo($blogcek['blog_name'])?>" target="_blank"><i class="fa fa-twitter"></i></a></li>

                <li><a href="https://plus.google.com/share?url=<?php echo $actual_link; ?>?post=<?php echo $blogcek['blog_id']?>&<?php echo seo($blogcek['blog_name'])?>"><i class="fa fa-google-plus" target="_blank"></i></a></li>

                <li><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $actual_link; ?>?post=<?php echo $blogcek['blog_id']?>&<?php echo seo($blogcek['blog_name'])?>"><i class="fa fa-linkedin" target="_blank"></i></a></li>

                <li><a href="https://pinterest.com/pin/create/button/?url=<?php echo $actual_link; ?>?post=<?php echo $blogcek['blog_id']?>&<?php echo seo($blogcek['blog_name'])?>"><i class="fa fa-pinterest" target="_blank"></i></a></li>
                
              </ul>
            </div>
            <div class="related_post">
              <h2>Oxşar xəbərlər <i class="fa fa-thumbs-o-up"></i></h2>
              <ul class="spost_nav wow fadeInDown animated">

<?php 
      $keywords=$blogcek['blog_keywords'];
      $blogsor=$db->prepare("SELECT * from blog where blog_keywords=$keywords order by blog_id desc limit 3");
	    $blogsor->execute();
while($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC)){
?>
                <li>
                  <div class="media"> <a class="media-left" href="single.php?post=<?php echo $blogcek['blog_id']?>&<?php echo seo($blogcek['blog_name'])?>"> <img src="../<?php echo $blogcek['blog_picurl']?>" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="single.php?post=<?php echo $blogcek['blog_id']?>&<?php echo seo($blogcek['blog_name'])?>"> <?php echo $blogcek['blog_name']?></a> </div>
                  </div>
                </li>
<?php } ?> 


              </ul>
            </div>
          </div>
        </div>
      </div>
    
  <!--  <nav class="nav-slit"> 
        
        <a class="prev" href="#"> <span class="icon-wrap"><i class="fa fa-angle-left"></i></span>
        <div>
          <h3>City Lights</h3>
          <img src="images/post_img1.jpg" alt=""/>
          </div>
        </a> 
        
        
        <a class="next" href="#"> <span class="icon-wrap"><i class="fa fa-angle-right"></i></span>
        <div>
          <h3>Street Hills</h3>
          <img src="images/post_img1.jpg" alt=""/> 
          </div>
        </a> -->
        
        </nav>
           <?php include "rightbar.php"?>

<?php include "footer.php"?>