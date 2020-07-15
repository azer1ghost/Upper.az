<?php 
include 'header.php';
$turkey=$db->prepare("select * from `turkeyphp` where col_id=1");
$turkey->execute(array(1));
$roWturkey=$turkey->fetch(PDO::FETCH_ASSOC);
?>
<head><link href="assets/css/mdb.min.css" rel="stylesheet"><head>

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title display-2"></h3>
                <small class="mbr-section-subtitle"></small>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article mbr-parallax-background" id="msg-box8-1u" style="background-image: url(assets/images/istanbul-sunset-top-view-building-59563-2560x1440-2000x1125.jpg); padding-top: 80px; padding-bottom: 80px;">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
    </div>
    <div class="container">
        <div class="row"><br><br><br><br>
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2" style="color: white"><? echo $roWturkey['col_name'] ?><br><div>TƏHSİLİNƏ DAVAM&nbsp;<span style="font-size: 3rem; line-height: 1.1;">ET</span></div></h3>
                <div class="lead"></div>
                
            </div>
        </div>
    </div>

</section>

<section class="mbr-section article mbr-section__container" id="content2-1x" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 lead">

            <? echo $roWturkey['col_text']   ?>

            </div>
        </div>
    </div>

</section>




<section class="mbr-info mbr-section mbr-section-md-padding" id="msg-box2-1z" style="background-color: rgb(209, 72, 65); padding-top: 60px; padding-bottom: 60px;">

<div class="container">
    <div class="row">

            

<div class="mbr-table-md-up">
    <div class="mbr-table-cell mbr-right-padding-md-up col-md-8 text-xs-center text-md-left">
                   
        <a target="_blank" href="https://goo.gl/K7Wdia"><i style="color:white" class="fa fa-facebook">  Facebook</i><a>
     <br>
        <a href="tel:+994124925542"><i style="color:white" class="fa fa-phone"> +994 (012) 492 55 42 </i><a>
     <br>
        <a href="tel:+994502907196"><i style="color:white" class="fa fa-mobile">   +994 (050) 290 71 96 </i><a>
     <br>
        <a href="mailto:office@upper.az"><i style="color:white" class="fa fa-envelope"> office@upper.az</i></a>
     <br>
        <a href="https://goo.gl/YtG5cu" target="_blank"><i style="color:white" class="fa fa-map-marker"> Istiglaliyyat 39, İçəri şəhər mst.-yaxınlığında</i></a>
                






              </div>

        <div class="mbr-table-cell col-md-4">
              <div class="text-xs-center"><a class="btn btn-black" href="<? echo $roWturkey['col_btnlink'] ?>" target="_blank">
              <?php echo $roWturkey['col_btntext'] ?></a></div>
              </div>

        </div>

        </div>
    </div>
</section>

<section class="mbr-section mbr-section-nopadding mbr-figure--caption-outside-bottom" style="padding: 50px 50px 50px 50px;"  id="image1">
    <div class="mbr-figure">
<hr>

<?php 
include 'mdb/turkuni.php';
 ?>



 </div>
 <hr>
</section>
<section class="mbr-section mbr-section-nopadding mbr-figure--caption-outside-bottom" id="image1-21">
    <div class="mbr-figure">
        <div><img src="<? echo $roWturkey['col_picurl'] ?>"></div>
        
    </div>
</section>
<section class="mbr-section article mbr-section__container" id="content7-22" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 lead"><?php echo $roWturkey['col_uni'] ?></div>
        </div>
    </div>


</section>





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