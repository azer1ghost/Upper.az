<?php include "header.php"?>


        <section id="sliderSection">
            <div class="row">

                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="slick_slider">

<?php $blogsor=$db->prepare("SELECT * from blog Where blog_gundem=1 order by blog_id desc limit 5");
	  $blogsor->execute();
while($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC)){
?>	
                        <div class="single_iteam">
                            <a href="single.php?post=<?php echo $blogcek['blog_id']?>&<?php echo seo($blogcek['blog_name'])?>"> <img src="../<?php echo $blogcek['blog_picurl']?>" alt="<?php echo seo($blogcek['blog_name'])?>"></a>
                            <div class="slider_article">
                                <h2><a class="slider_tittle" href="single.php?post=<?php echo $blogcek['blog_id']?>&<?php echo seo($blogcek['blog_name'])?>"><?php echo $blogcek['blog_name']?></a></h2>
                                 <?php echo substr($blogcek['blog_text'],0,160)."<b>. . .</b>"; ?>
                            </div>
                        </div>
<?php } ?>                       
                    </div>
                </div>

<?php include "rightbar.php"?>

            </div>
        </section>


        <section id="contentSection">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="left_content">





<div class="single_post_content">
            <h2><span>İQDİSADİYYAt</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav  wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
<?php $blogsor=$db->prepare("SELECT * from blog Where blog_option='iqdisadi' order by blog_id desc limit 1");
	  $blogsor->execute();
while($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC)){
?>	              
                <li>
                  <figure class="bsbig_fig"> <a href="single.php?post=<?php echo $blogcek['blog_id']?>&<?php echo seo($blogcek['blog_name'])?>" class="featured_img"> <img alt="<?php echo seo($blogcek['blog_name'])?>" src="../<?php echo $blogcek['blog_picurl']?>"> <span class="overlay"></span> </a>
                    <figcaption> <a href="single.php?post=<?php echo $blogcek['blog_id']?>&<?php echo seo($blogcek['blog_name'])?>"><?php echo substr($blogcek['blog_name'],0,70) ?></a> </figcaption>
                    <?php echo substr($blogcek['blog_text'],0,100)."<b>. . .</b>"; ?>
                  </figure>
                </li>
<?php } ?>    
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
<?php $blogsor=$db->prepare("SELECT * from blog Where blog_option='iqdisadi' order by blog_id desc limit 5 ");
	  $blogsor->execute();
      $number=0; // id sayici
while($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC)){
    $number++; //id sayici ++
    if($number==1){ continue; }
?>	                
                <li>
                  <div class="media wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"> <a href="single.php?post=<?php echo $blogcek['blog_id']?>&<?php echo seo($blogcek['blog_name'])?>" class="media-left"> <img alt="" src="../<?php echo $blogcek['blog_picurl']?>"> </a>
                    <div class="media-body"> <a href="single.php?post=<?php echo $blogcek['blog_id']?>&<?php echo seo($blogcek['blog_name'])?>" class="catg_title"><?php echo substr($blogcek['blog_name'],0,70) ?></a> </div>
                  </div>
                </li>
<?php } ?>  
              </ul>
            </div>
          </div>






          
                        <div class="fashion_technology_area">
                            <div class="fashion">
                                <div class="single_post_content">
                                    <h2><span>Keyfiyyət</span></h2>
                                    <ul class="business_catgnav wow fadeInDown">

<?php $blogsor=$db->prepare("SELECT * from blog Where blog_option='keyfiyyet' order by blog_id desc limit 1");
	  $blogsor->execute();
while($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC)){
?>	
                                        <li>
                                            <figure class="bsbig_fig">
                                                <a href="single.php?post=<?php echo $blogcek['blog_id']?>&<?php echo seo($blogcek['blog_name'])?>" class="featured_img"> <img alt="<?php echo $blogcek['blog_name']?>" src="../<?php echo $blogcek['blog_picurl']?>"> <span class="overlay"></span> </a>
                                                <figcaption> <a href="single.php?post=<?php echo $blogcek['blog_id']?>&<?php echo seo($blogcek['blog_name'])?>"><?php echo $blogcek['blog_name']?></a> </figcaption>
                                                <?php echo substr($blogcek['blog_text'],0,160)."<b>. . .</b>"; ?>
                                            </figure>
                                        </li>
<?php } ?>                                          
                                    </ul>
                                    <ul class="spost_nav">
<?php $blogsor=$db->prepare("SELECT * from blog Where blog_option='keyfiyyet' order by blog_id desc limit 5 ");
	  $blogsor->execute();
      $number=0; // id sayici
while($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC)){
    $number++; //id sayici ++
    if($number==1){ continue; }
?>	                                   
                                        <li>
                                            <div class="media wow fadeInDown">
                                                <a href="single.php?post=<?php echo $blogcek['blog_id']?>&<?php echo seo($blogcek['blog_name'])?>" class="media-left"> <img alt="<?php echo $blogcek['blog_name']?>" src="../<?php echo $blogcek['blog_picurl']?>"> </a>
                                                <div class="media-body"> <a href="single.php?post=<?php echo $blogcek['blog_id']?>&<?php echo seo($blogcek['blog_name'])?>" class="catg_title"> <?php echo $blogcek['blog_name']?></a> </div>
                                            </div>
                                        </li>
<?php } ?>                                          
                                    </ul>
                                </div>
                            </div>
                            <div class="technology">
                                <div class="single_post_content">
                                    <h2><span>DİGƏR XƏBƏRLƏR</span></h2>
                                    <ul class="business_catgnav">
<?php $blogsor=$db->prepare("SELECT * from blog Where blog_option='diger' order by blog_id desc limit 1");
	  $blogsor->execute();
while($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC)){
?>
                                        <li>
                                            <figure class="bsbig_fig wow fadeInDown">
                                                <a href="single.php?post=<?php echo $blogcek['blog_id']?>&<?php echo seo($blogcek['blog_name'])?>" class="featured_img"> <img alt="<?php echo $blogcek['blog_name']?>" src="../<?php echo $blogcek['blog_picurl']?>"> <span class="overlay"></span> </a>
                                                <figcaption> <a href="single.php?post=<?php echo $blogcek['blog_id']?>&<?php echo seo($blogcek['blog_name'])?>"><?php echo $blogcek['blog_name']?></a> </figcaption>
                                                 <?php echo substr($blogcek['blog_text'],0,160)."<b>. . .</b>"; ?>
                                            </figure>
                                        </li>
<?php } ?>   
                                    </ul>
                                    <ul class="spost_nav">
<?php $blogsor=$db->prepare("SELECT * from blog  Where blog_option='diger' order by blog_id desc limit 5 ");
	  $blogsor->execute();
      $number=0; // id sayici
while($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC)){
    $number++; //id sayici ++
    if($number==1){ continue; }
?>	 
                                        <li>
                                            <div class="media wow fadeInDown">
                                                <a href="single.php?post=<?php echo $blogcek['blog_id']?>&<?php echo seo($blogcek['blog_name'])?>" class="media-left"> <img alt="<?php echo $blogcek['blog_name']?>" src="../<?php echo $blogcek['blog_picurl']?>"> </a>
                                                <div class="media-body"> <a href="single.php?post=<?php echo $blogcek['blog_id']?>&<?php echo seo($blogcek['blog_name'])?>" class="catg_title"><?php echo $blogcek['blog_name']?></a> </div>
                                            </div>
                                        </li>
<?php } ?>   
                                       
                                    </ul>
                                </div>
                            </div>

<!--New secttion go here-->

                        </div>
                    </div>
                </div>




                <div class="col-lg-4 col-md-4 col-sm-4">
                    <aside class="right_content">
                        <div class="single_sidebar">
                            <h2><span>Gündəm</span></h2>
                            <ul class="spost_nav">
<?php $blogsor=$db->prepare("SELECT * from blog Where blog_gundem=1 order by blog_id desc limit 5");
	  $blogsor->execute();
while($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC)){
?>
                                <li>
                                    <div class="media wow fadeInDown">
                                        <a href="single.php?post=<?php echo $blogcek['blog_id']?>&<?php echo seo($blogcek['blog_name'])?>" class="media-left"> <img alt="<?php echo $blogcek['blog_name']?>" src="../<?php echo $blogcek['blog_picurl']?>"> </a>
                                        <div class="media-body"> <a href="single.php?post=<?php echo $blogcek['blog_id']?>&<?php echo seo($blogcek['blog_name'])?>" class="catg_title"><?php echo $blogcek['blog_name']?></a> </div>
                                    </div>
                                </li>
<?php } ?>  
                              
                            </ul>
                        </div>

                    </aside>
                </div>
            </div>
        </section>
<?php include "footer.php"?>