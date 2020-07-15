<?php include 'header.php';

      $ieltsmodsor=$db->prepare("select * from ieltsmod order by col_id ASC limit 1");
      $ieltsmodsor->execute();
while($ieltscek=$ieltsmodsor->fetch(PDO::FETCH_ASSOC)){ ?> 


<section class="engine"></section><section class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background mbr-after-navbar" id="header1-18" style="background-image: url(<?php echo $ieltscek['col_picurl']?>);">

    

    <div class="mbr-table-cell">

        <div class="container">
            <div class="row">
                <div class="mbr-section col-md-10 col-md-offset-1 text-xs-center">

                    <h1 class="mbr-section-title display-1" "><?php echo $ieltscek['col_name']?><div><?php echo $ieltscek['col_btntext']?></div></h1>
                    <p class="mbr-section-lead lead"><br><?php echo substr($ieltscek['col_text'], 3, -3) ?><br></p>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<!-- .div -->
<?php } $ieltsmodsor=$db->prepare("select * from ieltsmod order by col_id ASC");
	  $ieltsmodsor->execute();
     $number=0; // id sayici
while($ieltsmodcek=$ieltsmodsor->fetch(PDO::FETCH_ASSOC)){ 
$number++; //id sayici ++
    if($number==1){ continue; }
?>         	
<section class="mbr-section" id="msg-box5-19" style="background-color: rgb(255, 255, 255); padding-top: 40px; padding-bottom: 80px;">

    
    <div class="container">
        <div class="row">
            <div class="mbr-table-md-up">

              <div class="mbr-table-cell mbr-right-padding-md-up mbr-valign-top col-md-7 image-size" style="width: 44%;">
                  <div class="mbr-figure"><img src="<?php echo $ieltsmodcek['col_picurl'] ?>"></div>
              </div>

              <div class="mbr-table-cell col-md-5 text-xs-center text-md-left content-size">
                  <h3 class="mbr-section-title display-2" ><?php echo $ieltsmodcek['col_name'] ?></h3>
                  <div class="lead">

                    <p><?php echo $ieltsmodcek['col_text'] ?></p>

                  </div>

                  <div><a class="btn btn-primary" href="<?php echo $ieltsmodcek['col_btnlink'] ?>" target="_blank"><?php echo $ieltsmodcek['col_btntext'] ?></a></div>
              </div>

            </div>
        </div>
    </div>

</section>
<!-- .div --> <?php } ?>





<?php include 'footer.php'; ?>