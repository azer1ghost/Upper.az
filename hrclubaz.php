<?php include 'header.php'; 
?>
<head>
    <link href="assets/css/fonts.css" rel="stylesheet" />
    <link href="assets/css/material-kit.min3f71.css?v=1.1.1" rel="stylesheet"/>

</head>
 

    </section>
    <section class="mbr-section mbr-after-navbar" id="msg-box6-v" style="padding-top: 120px; padding-bottom: 80px; background-image: url(<?php  echo $hrcek['hr_bg'] ?>) ">
        <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);">
        </div>
        <div class="container">
            <div class="row">
                <div class="mbr-table-md-up">
                    <div class="mbr-table-cell col-md-4 text-xs-center text-md-right content-size">

                        <h3 class="mbr-section-title display-2"><?php echo $hrcek['hr_title'] ?></h3>
                        <div class="lead">
                            <p><?php echo $hrcek['hr_subtitle'] ?><br></p>
                        </div>
                    </div>

                    <div class="mbr-table-cell mbr-left-padding-md-up mbr-valign-top col-md-7 image-size" style="width: 32%;">
                        <div class="mbr-figure">


                            <section style="padding-top: 80px" class="mbr-slider mbr-section mbr-section__container carousel slide mbr-section-nopadding" data-ride="carousel" data-keyboard="false" data-wrap="true" data-pause="false" data-interval="3000" id="slider3-w" style="background-color: rgb(255, 255, 255);">
                                <div class=" container boxed-slider" style="padding-top: 0px; padding-bottom: 0px;">

<?php include 'hrslider.php' ?>

                                </div>
                            </section>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    
          
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2" style="color: white">HR Xəbərləri</h3>
                    </div>
             
     

<?php $blogsor=$db->prepare("SELECT * from blog where blog_option='hr' order by blog_id desc limit 4");
      $blogsor->execute();
while($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC)){
?>  

<div class="col-md-3" style="padding-top: 50px">
    <div class="card card-raised card-background" style="background-image: url('<?php echo $blogcek['blog_picurl']?>')">
        <div class="card-content">
            <h4 class="card-title"><?php echo substr($blogcek['blog_name'],0,20); ?></h4>
            <h6 class="category text-info"><?php echo $blogcek['blog_date'] ?></h6>
            <p class="card-description">
                <?php echo substr($blogcek['blog_text'], 3, 160)."<b>. . .</b>"; ?>
            </p>
            <a target="_blank" href="blog/single.php?post=<?php echo $blogcek['blog_id'] ?>" class="btn btn-primary btn-round">
                <i class="material-icons">format_align_left</i> Ətraflı
            </a>
        </div>
    </div>
</div>

<?php } ?>  








    <section class="mbr-section mbr-parallax-background" id="testimonials4-z" style="background-image: url(<?php  echo $hrcek['hr_bg'] ?>); padding-top: 120px; padding-bottom: 120px;">
        <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(34, 34, 34);"></div>

        <div class="mbr-section mbr-section__container mbr-section__container--middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2">Mətbuat bizim haqda yazır</h3>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mbr-section mbr-section-nopadding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">

<!-- .slide -->
<?php $metsor=$db->prepare("select * from metbuat order by met_id DESC");
	  $metsor->execute();
while($metcek=$metsor->fetch(PDO::FETCH_ASSOC)){  ?>	

                        <div class="mbr-testimonial card">
                            <div class="card-block">
                                <p><strong><?php echo $metcek['met_title'] ?></strong></p>
                                <p>"<?php echo $metcek['met_subtitle'] ?>”</p>
                            </div>
                            <div class="mbr-author card-footer">
                                <div class="mbr-author-name">
                                    <a href="<?php echo $metcek['met_btnlink'] ?>" target="_blank" class="text-primary"><?php echo $metcek['met_btntext'] ?></a>
                                </div>
                            </div>
                        </div>
                        
<!-- .slide --> <?php } ?>

                     </div>
                </div>
            </div>
        </div>
    </section>



    <section class="mbr-section mbr-background" id="testimonials3-10" style="background-image: url(assets/images/mbr-2000x1325.jpg); padding-top: 120px; padding-bottom: 120px;">
        <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
        </div>
        <div class="mbr-section mbr-section__container mbr-section__container--middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2">HR TƏLİMLƏRİ</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-testimonials mbr-section mbr-section-nopadding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="mbr-testimonial card">
                            <div class="card-block">

<?php $hrsor=$db->prepare("SELECT * FROM `hrtelimler` order by hrtelim_id DESC, hrtelim_sira ASC");
	  $hrsor->execute();
while($hrcek=$hrsor->fetch(PDO::FETCH_ASSOC)){  ?>
                                                <!-- .text -->
                                <p>​✔ <?php echo $hrcek['hrtelim_text'] ?> </p>
                                                <!-- .text -->
 <?php } ?>
                            </div>
                            <div class="mbr-author card-footer">
                                <div class="mbr-author-name"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?
$social=$db->prepare("select * from `social` where col_id=7");
$social->execute(array(1));
$socialcek=$social->fetch(PDO::FETCH_ASSOC); ?>
<div id="works"  class=" clearfix grid"> 
    <div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_default_style a2a_follow" style="bottom:0px; right:0px;">
        <a target="_blank" class="a2a_button_facebook" data-a2a-follow="<? echo $socialcek['col_facebook'] ?>"></a>
        <a target="_blank" class="a2a_button_instagram" data-a2a-follow="<? echo $socialcek['col_instagram'] ?>"></a>
        <a target="_blank" class="a2a_button_google_plus" data-a2a-follow="<? echo $socialcek['col_google'] ?>"></a>
        <a target="_blank" class="a2a_button_youtube" data-a2a-follow="<? echo $socialcek['col_youtube'] ?>"></a>
    </div>
</div>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/smooth-scroll/smooth-scroll.js"></script>
    <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
    <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
    <script src="assets/dropdown/js/script.min.js"></script>
    <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/jarallax/jarallax.js"></script>
    <script src="assets/theme/js/script.js"></script>
    <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
    <script src="assets/masonry/masonry.pkgd.min.js"></script>
    <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/mobirise-gallery/player.min.js"></script>
    <script src="assets/mobirise-gallery/script.js"></script>
<script src="assets/js/socialpages.js" type="text/javascript" ></script>
    <input name="animation" type="hidden">