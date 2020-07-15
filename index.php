<?php 
        include 'header.php';
?>

<section class="engine"></section><section class="mbr-section mbr-section__container article mbr-after-navbar" id="header3-g" style="background-color: rgb(255, 255, 255); padding-top: 40px; padding-bottom: 40px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title display-2"></h3>
                <small class="mbr-section-subtitle"></small>
            </div>
        </div>
    </div>
</section>


<!-- slider begin-->
    <section class="mbr-slider mbr-section mbr-section__container carousel slide mbr-section-nopadding" data-ride="carousel" data-keyboard="false" data-wrap="true" data-pause="false" data-interval="3000" id="slider-q">
      <?php include 'slider.php' ?>
    </section>
<!-- slider end-->


<!-- modul begin-->
    <section class="mbr-cards mbr-section mbr-section-nopadding" id="features3-1" style="background-color: rgb(255, 255, 255);">
        <div class="mbr-cards-row row">
<?php $modulsor=$db->prepare("select * from modul order by modul_durum DESC, modul_sira ASC limit 3");
	  $modulsor->execute();
while($modulcek=$modulsor->fetch(PDO::FETCH_ASSOC)){  ?>								
										<!-- .product -->


            <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 80px; padding-bottom: 80px;">
                <div class="container">
                    <div class="card cart-block">
                        <div class="card-img"> <a href="<?php echo $modulcek['modul_url'] ?>"> <img src="<?php echo $modulcek['modul_picurl'] ?>" class="card-img-top"></a> </div>
                        <div class="card-block">
                          <a href="<?php echo $modulcek['modul_url'] ?>">  <h4 class="card-title"><?php echo $modulcek['modul_name'] ?></h4></a>

                            <p class="card-text"><?php echo $modulcek['modul_text'] ?></p>
                            <div class="card-btn"><a href="<?php echo $modulcek['modul_url'] ?>" class="btn btn-primary"><?php echo $modulcek['modul_btntext'] ?></a></div>
                        </div>
                    </div>
                </div>
            </div><!-- .product --> <?php } ?>
        

        </div>
    </section>
<!-- modul end-->


<!-- xaricde tehsil header begin-->
    <section class="mbr-section mbr-section__container article" id="header3-1c" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h3 class="mbr-section-title display-2"><?php echo $xariccek['xaric_name'] ?></h3>
                    <small class="mbr-section-subtitle"><?php echo $xariccek['xaric_text'] ?></small>
                </div>
            </div>
        </div>
    </section>
<!-- xaricde tehsil header end-->



<!-- xaricde tehsil  begin-->
    <section class="mbr-cards mbr-section mbr-section-nopadding mbr-parallax-background" id="features3-2" style="background-image: url(<?php echo $xariccek['xaric_bg'] ?>);">

        <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);">
        </div>

        <div class="mbr-cards-row row">
<?php $modulsorx=$db->prepare("select * from xaric order by mod_id DESC limit 3");
      $modulsorx->execute();
while($modulcekx=$modulsorx->fetch(PDO::FETCH_ASSOC)){  ?>    

            <div class="mbr-cards-col col-xs-12 col-lg-6" style="padding-top: 80px; padding-bottom: 80px;">
                <div class="container">
                    <div class="card cart-block">
                        <a href="<?php echo $modulcekx['mod_btnurl'] ?>"><div class="card-img"><img src="<?php echo $modulcekx['mod_picurl'] ?>" class="card-img-top"></div></a>
                        <div class="card-block">
                            <a href="<?php echo $modulcekx['mod_btnurl'] ?>"><h4 class="card-title"><?php echo $modulcekx['mod_name'] ?></h4></a>

                            <p class="card-text"><?php echo $modulcekx['mod_text'] ?></p>
                            <div class="card-btn"><a href="<?php echo $modulcekx['mod_btnurl'] ?>" class="btn btn-primary"><?php echo $modulcekx['mod_btntext'] ?></a></div>
                        </div>
                    </div>
                </div>
            </div>
<?php } ?>




        </div>
    </section>
<!-- xaricde tehsil end-->

   <?php include 'footer.php'  ?>