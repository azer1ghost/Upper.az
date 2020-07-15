
<?php include 'admin/setting/connect.php';

$ayarsor=$db->prepare("select * from `ayarlar 1` where ayar_id=?");
$ayarsor->execute(array(1));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

$slidersor=$db->prepare("select * from slider where slider_id=?");
$slidersor->execute(array(1));
$slidercek=$slidersor->fetch(PDO::FETCH_ASSOC);

$xaricsor=$db->prepare("select * from xaricbas where xaric_id=?");
$xaricsor->execute(array(1));
$xariccek=$xaricsor->fetch(PDO::FETCH_ASSOC);

$uppersor=$db->prepare("select * from xaric where upper_id=?");
$uppersor->execute(array(2));
$uppercek=$uppersor->fetch(PDO::FETCH_ASSOC);

$dovletsor=$db->prepare("select * from dovlethaz where dovlet_id=?");
$dovletsor->execute(array(1));
$dovletcek=$dovletsor->fetch(PDO::FETCH_ASSOC);

$hrsor=$db->prepare("select * from hrclubaz where hr_id=?");
$hrsor->execute(array(1));
$hrcek=$hrsor->fetch(PDO::FETCH_ASSOC);

$ieltssor=$db->prepare("select * from ielts where ielts_id=?");
$ieltssor->execute(array(1));
$ieltscek=$ieltssor->fetch(PDO::FETCH_ASSOC);

$italysor=$db->prepare("SELECT * from italy where itlay_id=?");
$italysor->execute(array(1));
$italycek=$italysor->fetch(PDO::FETCH_ASSOC);

$upperconsor1=$db->prepare("SELECT * from upperconheader where uppercon1_id=?");
$upperconsor1->execute(array(1));
$upperconcek1=$upperconsor1->fetch(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html>

<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="shortcut icon" href="assets/images/logo.ico" type="image/x-icon">
    <title><?php echo $ayarcek['ayar_title'] ?></title>
    <meta name="description" content="<?php echo $ayarcek['ayar_description'] ?>">
    <meta name="keywords" content="<?php echo $ayarcek['ayar_keywords'] ?>">
    <meta name="author" content="<?php echo $ayarcek['ayar_author'] ?>">
    <link rel="icon" href="assets/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/et-line-font-plugin/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="navbar/menustyle.css">
    <script src="navbar/js/index.js"></script>  
    <script src="assets/web/assets/jquery/jquery.min.js"></script>
        <!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php include 'style.php';?>

</head>

<body>
    <section id="menu-0">

        <nav class="navbar navbar-dropdown navbar-fixed-top">
            <div class="container">

                <div class="mbr-table">
                    <div class="mbr-table-cell">

                        <div class="navbar-brand">
                            <a href="index.php" class="navbar-logo"><img src="<?php echo $ayarcek['ayar_logourl'] ?>" alt="Upper.az"></a>

                        </div>

                    </div>
                    <div class="mbr-table-cell">

                        <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                      
<?php include 'navbar/navbar.php';?>



                        <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                    </div>
                </div>

            </div>
        </nav>

    </section>

