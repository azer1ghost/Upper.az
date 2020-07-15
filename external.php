<?php include 'header.php';
    $extsor=$db->prepare("SELECT * from external where external_id=:external_id");

    $extsor->execute(array('external_id' => $_GET['external_id'])); 

    $extcek=$extsor->fetch(PDO::FETCH_ASSOC); ?>

<section class="engine"></section><section class="mbr-section mbr-section__container article mbr-after-navbar" id="header3-1h" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title display-2"></h3>
                <small class="mbr-section-subtitle"></small>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article mbr-parallax-background" id="msg-box8-1i" style="background-image: url(<?php echo $extcek['external_bannerpicurl']; ?>); padding-top: 80px; padding-bottom: 80px;">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center"><br><br>
                <h3 class="mbr-section-title display-2" style="color: white"><?php echo $extcek['external_name']; ?><div>TƏHSİLİNƏ DAVAM ET</div></h3>
                <div class="lead"></div>
                
            </div>
        </div>
    </div>

</section>


<section class="mbr-section article mbr-section__container" id="content2-1k" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 lead"><?php echo $extcek['external_text']; ?></div>
        </div>
    </div>

</section>

<section class="mbr-info mbr-section mbr-section-md-padding" id="msg-box2-1m" style="background-color: rgb(209, 72, 65); padding-top: 60px; padding-bottom: 60px;">

    
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
                  <div class="text-xs-center"><a class="btn btn-black" href="<?php echo $extcek['external_btnlink']; ?>" target="_blank">Qeydiyyat</a></div>
              </div>
            </div>

        </div>
    </div>
</section>

<section class="mbr-section mbr-section-nopadding mbr-figure--caption-outside-bottom" id="image1-1r">
    <div class="mbr-figure">
        <div><img src="<?php echo $extcek['external_picurl1']; ?>"></div>
        
    </div>
</section>

<section class="mbr-section mbr-section-nopadding mbr-figure--caption-outside-bottom" id="image1-1s">
    <div class="mbr-figure">
        <div><img src="<?php echo $extcek['external_picurl2']; ?>"></div>
        
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