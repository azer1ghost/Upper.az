<?php include 'header.php'; ?>

<section class="engine"></section><section class="mbr-section mbr-section__container article mbr-after-navbar"  style="padding-top: 0px; padding-bottom: 85px ">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title display-2"></h3>
                <small class="mbr-section-subtitle"></small>
            </div>
        </div>
    </div>
</section>



<head>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:600' rel='stylesheet' type='text/css'>


<!-- animate.css -->
<link rel="stylesheet" href="forupper/assets/animate/animate.css" />
<link rel="stylesheet" href="forupper/assets/animate/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="forupper/assets/gallery/blueimp-gallery.min.css">

<link rel="stylesheet" href="forupper/assets/style.css">

</head>

<section >
<!-- works -->
<div id="works"  class=" clearfix grid"> 

<?php  $upperconsor=$db->prepare("select * from upperedu order by col_id ASC");
         $upperconsor->execute();
       $number=0; // id sayici
 while($upperconcek=$upperconsor->fetch(PDO::FETCH_ASSOC)){
       $number++; //id sayici ++  ?>

    <figure class="effect-oscar  wowload fadeInUp">
        <img style="opacity: 0.5; height: 227px; width: 350px" src="<?php echo $upperconcek['col_picurl'] ?>" alt="<?php echo $upperconcek['col_name'] ?>"/>
        <figcaption>
            <h2><?php echo $upperconcek['col_name'] ?></h2>
            <p style="font-size: 12px;"><?php echo $upperconcek['col_text'] ?><br>
            <a target="_blank" href="<?php echo $upperconcek['col_btnlink'] ?>"><?php echo $upperconcek['col_btntext'] ?></a></p>            
        </figcaption>
    </figure>

 <?php } ?>   
</div>
</section>


<?
$social=$db->prepare("select * from `social` where col_id=1");
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




<!-- jquery -->
<script src="forupper/assets/jquery.js"></script>



<!-- wow script -->
<script src="forupper/assets/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="forupper/assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="forupper/assets/mobile/touchSwipe.min.js"></script>
<script src="forupper/assets/respond/respond.js"></script>
<!-- custom script -->
<script src="forupper/assets/script.js"></script>





<?php include 'footer.php';?>