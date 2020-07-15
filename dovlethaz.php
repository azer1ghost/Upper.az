
<?php include 'header.php'; ?>

<section class="engine"></section><section class="mbr-cards mbr-section mbr-section-nopadding mbr-after-navbar" id="features6-26" style="background-color: rgb(239, 239, 239);">



    <div class="mbr-cards-row row">

<?php $dovletsor=$db->prepare("select * from dovlethaz order by  col_id limit 3");
      $dovletsor->execute();
while($dovletcek=$dovletsor->fetch(PDO::FETCH_ASSOC)){  ?>  

        <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
              <div class="card cart-block">
                  <div class="card-img"><a href="<?php echo $dovletcek['col_btnlink'] ?>" class="<?php echo $dovletcek['col_picurl'] ?> mbr-iconfont mbr-iconfont-features3"></a></div>
                  <div class="card-block">
                    <h4 class="card-title"><?php echo $dovletcek['col_name'] ?></h4>
                    
                    <p class="card-text"><?php echo $dovletcek['col_text'] ?></p>
                    <div class="card-btn"><a target="_blank" href="<?php echo $dovletcek['col_btnlink'] ?>" class="btn btn-primary"><?php echo $dovletcek['col_btntext'] ?></a></div>
                    </div>
                </div>
            </div>
        </div>
<?php } ?>


    </div>


</section>

<?php include 'footer.php'; ?>