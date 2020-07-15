<?php 
include 'header.php';
?>
<head>
<style>

.img-circle {
    border-radius: 50%;
    height: 165px;
    width: 50%;
}

</style>
</head>




        <section class="engine">
            
        </section>




  <section class="mbr-section mbr-section-hero mbr-section-full header2 mbr-parallax-background mbr-after-navbar" id="header2-j" style="background-image: url(<?php echo $upperconcek1['uppercon1_bg'] ?>);">
            <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(0, 0, 0);">
</div>
            <div class="mbr-table mbr-table-full">
                <div class="mbr-table-cell">
                    <div class="container">
                        <div class="mbr-section row">
                            <div class="mbr-table-md-up">
                                <div class="mbr-table-cell col-md-5 content-size text-xs-center text-md-right">
                                    <h3 class="mbr-section-title display-2"><?php echo $upperconcek1['uppercon1_name'] ?></h3>
                                    <div class="mbr-section-text">
                                    
                                        <p><?php echo $upperconcek1['uppercon1_txt'] ?></p>
                                        
                                    </div>
                                 </div> 
                                
                                <div class="mbr-table-cell mbr-valign-top mbr-left-padding-md-up col-md-7 image-size" style="width: 50%;">
                                    <div class="mbr-figure">
                                        <img src="<?php echo $upperconcek1['uppercon1_picurl'] ?>">
                                    </div>
                                </div>
                            </div> <div class="mbr-section-text">
                                 <a href="UPPER CONSULTING.html#header2-k" class=""><p style="color:white;"><b>                                                    MENECMENT SİSTEMLƏRİ TƏLİMLƏRİ</b></p></a>
                                         <a href="UPPER CONSULTING.html#header2-l" class=""><p style="color:white;"><b>SATIŞ VƏ MARKETING TƏLİMLƏRİ</b></p></a>
                                          <a href="UPPER CONSULTING.html#header2-m" class=""><p style="color:white;"><b>                                MALİYYƏ VƏ AUDİT TƏLİMLƏRİ</b></p></a>
                                           <a href="UPPER CONSULTING.html#header2-n" class=""><p><b style="color:white">             HR  TƏLİMLƏRİ</b></p></a>
                                            <a href="UPPER CONSULTING.html#header2-o" class=""><p style="color:white;"><b>                                                     KONSALTİNQ və AUTSORSİNQXİDMƏTLƏRİ</b></p></a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mbr-arrow mbr-arrow-floating hidden-sm-down" aria-hidden="true">
                <a href="#header2-k"><i class="mbr-arrow-icon"></i></a>
            </div>
        </section>



<?php $upperconsor=$db->prepare("select * from uppercon order by uppercon_id ASC limit 5");
	  $upperconsor->execute();
while($upperconcek=$upperconsor->fetch(PDO::FETCH_ASSOC)){ ?>


        <section class="mbr-section mbr-section-hero mbr-section-full header2 mbr-parallax-background mbr-after-navbar" id="<?php echo $upperconcek['section_id'] ?>" style="background-image: url(<?php echo $upperconcek['uppercon_bg'] ?>);">
            <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(0, 0, 0);">
</div>
            <div class="mbr-table mbr-table-full">
                <div class="mbr-table-cell">
                    <div class="container">
                        <div class="mbr-section row">
                            <div class="mbr-table-md-up">
                                <div class="mbr-table-cell col-md-5 content-size text-xs-center text-md-right">
                                    <h3 class="mbr-section-title display-2"><?php echo $upperconcek['uppercon_name'] ?></h3>
                                    <div class="mbr-section-text">
                                    
                                       <?php echo $upperconcek['uppercon_text'] ?>
                                        
                                    </div>
                                 </div> 
                                
                                <div class="mbr-table-cell mbr-valign-top mbr-left-padding-md-up col-md-7 image-size" style="width: 50%;">
                                    <div class="mbr-figure">
                                        <img src="<?php echo $upperconcek['upperpicurl'] ?>">
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="mbr-arrow mbr-arrow-floating hidden-sm-down" aria-hidden="true">
                <a href="#<?php echo $upperconcek['uppercon_nextid'] ?>"><i class="mbr-arrow-icon"></i></a>
            </div>
        </section>


<?php } ?>

<section class="mbr-section mbr-section__container article mbr-after-navbar" style="background: linear-gradient(to right, #80deea, #ba68c8) !important;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
       <center><h3 style="color: #ffffff;
  text-align: center; font-size: 3rem;
  font-weight: 600;
  letter-spacing: -1px;
  ">TƏLİMÇİLƏR</h3></center>      
                
            </div>
        </div>
    </div>
</section>

        <section class="mbr-cards mbr-section mbr-section-nopadding" id="features1-r" style="background-color: rgb(255, 255, 255);">
            <div class="mbr-cards-row row striped">
                <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 80px; padding-bottom: 80px;">
                    <div class="container">
                        <div class="card cart-block">
                            <div class="card-img">
                                <img  src="assets/images/table.jpg" class="img-circle">
                            </div>
                            <div class="card-block">
                                <h4 class="card-title">İlqar İbrahimov</h4>
                                <p class="card-text">Upper Group təsisçisi<br>ISO 9001 Keyfiyyət Menecmenti Sitemi və HRM ekspert<br></p>
                                <section class="mbr-section mbr-section-md-padding" id="social-buttons4-y" style="background-color: rgb(46, 46, 46); padding-top: 0px; padding-bottom: 0px;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 col-md-offset-0 text-xs-center">
                                                <div> 
                                                    <a class="btn btn-social" title="Facebook" target="_blank" href="https://www.facebook.com/pages/Mobirise/1616226671953247"><i class="socicon socicon-facebook"></i></a> 
                                                    <a class="btn btn-social" title="Google+" target="_blank" href="https://plus.google.com/u/0/+Mobirise/posts"><i class="socicon socicon-googleplus"></i></a> 
                                                    <a class="btn btn-social" title="YouTube" target="_blank" href="https://www.youtube.com/channel/UCt_tncVAetpK5JeM8L-8jyw"><i class="socicon socicon-youtube"></i></a> 
                                                    <a class="btn btn-social" title="Instagram" target="_blank" href="https://instagram.com/mobirise/"><i class="socicon socicon-instagram"></i></a> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 80px; padding-bottom: 80px;">
                    <div class="container">
                        <div class="card cart-block">
                            <div class="card-img">
                                <img src="assets/images/desktop.jpg" class="img-circle">
                            </div>
                            <div class="card-block">
                                <h4 class="card-title">Vasif Əliyev</h4>
                                <p class="card-text">İmproteks Şirkətlər Qrupu, Maliyyə direktoru.<br><br><br></p>
                                <div class="card-btn">
                                    <div> 
                                        <a class="btn btn-social" title="Facebook" target="_blank" href="https://www.facebook.com/pages/Mobirise/1616226671953247"><i class="socicon socicon-facebook"></i></a> 
                                        <a class="btn btn-social" title="Google+" target="_blank" href="https://plus.google.com/u/0/+Mobirise/posts"><i class="socicon socicon-googleplus"></i></a> 
                                        <a class="btn btn-social" title="YouTube" target="_blank" href="https://www.youtube.com/channel/UCt_tncVAetpK5JeM8L-8jyw"><i class="socicon socicon-youtube"></i></a> 
                                        <a class="btn btn-social" title="Instagram" target="_blank" href="https://instagram.com/mobirise/"><i class="socicon socicon-instagram"></i></a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 80px; padding-bottom: 80px;">
                    <div class="container">
                        <div class="card cart-block">
                            <div class="card-img">
                                <img src="assets/images/table.jpg" class="img-circle">
                            </div>
                            <div class="card-block">
                                <h4 class="card-title">Elnur Əliyev&nbsp;</h4>
                                <p class="card-text">GRBS, HR direktor<br>Keyfiyyət Menecmenti Sitemi (ISO 9001) və HRM ekspert<br><section class="mbr-section mbr-section-md-padding" id="social-buttons4-y" style="background-color: rgb(46, 46, 46); padding-top: 0px; padding-bottom: 0px;">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12 col-md-offset-0 text-xs-center">
                                                    <div> 
                                                        <a class="btn btn-social" title="Facebook" target="_blank" href="https://www.facebook.com/pages/Mobirise/1616226671953247"><i class="socicon socicon-facebook"></i></a> 
                                                        <a class="btn btn-social" title="Google+" target="_blank" href="https://plus.google.com/u/0/+Mobirise/posts"><i class="socicon socicon-googleplus"></i></a> 
                                                        <a class="btn btn-social" title="YouTube" target="_blank" href="https://www.youtube.com/channel/UCt_tncVAetpK5JeM8L-8jyw"><i class="socicon socicon-youtube"></i></a> 
                                                        <a class="btn btn-social" title="Instagram" target="_blank" href="https://instagram.com/mobirise/"><i class="socicon socicon-instagram"></i></a> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





<?
$social=$db->prepare("select * from `social` where col_id=5");
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


<?php 
include 'footer.php';
?>