<?php include '../setting/connect.php';
ob_start();
session_start();

define('TIMEZONE', 'Asia/Baku'); // Baku, Azerbaijan, Asia
date_default_timezone_set(TIMEZONE);

function tarihDuzenle($tarih){
$tarih=array_reverse(explode('-',$tarih));
$tarih=implode('-',$tarih);
return $tarih;
}


$adminsor=$db->prepare("select * from admin where admin_login=:login");
$adminsor->execute(array(
'login' => $_SESSION['admin_login'] )); 

	$say=$adminsor->rowCount();

    if($say==0){

header("Location:login.php?durum=nolog");
exit;
    }

$admincek=$adminsor->fetch(PDO::FETCH_ASSOC);

$ayarsor=$db->prepare("select * from `ayarlar 1` where ayar_id=?");
$ayarsor->execute(array(1));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

$uppersor=$db->prepare("select * from xaric where upper_id=?");
$uppersor->execute(array(2));
$uppercek=$uppersor->fetch(PDO::FETCH_ASSOC);

$xaricsor=$db->prepare("select * from xaricbas where xaric_id=?");
$xaricsor->execute(array(1));
$xariccek=$xaricsor->fetch(PDO::FETCH_ASSOC);

$upperconsor1=$db->prepare("SELECT * from upperconheader where uppercon1_id=?");
$upperconsor1->execute(array(1));
$upperconcek1=$upperconsor1->fetch(PDO::FETCH_ASSOC);

$xtsor=$db->prepare("SELECT * from xaricbas where xaric_id=?");
$xtsor->execute(array(1));
$xtcek=$xtsor->fetch(PDO::FETCH_ASSOC);
?>




<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Upper.az Admin Panel</title>

    <!-- Favicon-->
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

      <!-- Sweetalert Css -->
    <link href="assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Bootstrap Core Css -->
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="assets/plugins/animate-css/animate.css" rel="stylesheet" />

<script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
<link href="assets/plugins/nestable/jquery-nestable.css" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/mobirise/style.css">

    <!-- Custom Css -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="assets/css/themes/all-themes.css" rel="stylesheet" />
    <link href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="assets/plugins/dropzone/dropzone.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet">
</head>

<body class="theme-deep-purple">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Gözləyin...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">Axtar</i>
        </div>
        <input type="text" placeholder="Axtarılan əməliyyatı yazın...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
    
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.php">Upper.az Admin idarəetmə paneli</a>
            </div>
            
            <div class="collapse navbar-collapse" id="navbar-collapse">
            
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->

                    
                </ul>
            </div>
        </div>
        <?php if ($_GET['durum']=='ok') { ?>
        <div class="alert bg-green alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                Bilgiləriniz uğurla WebSaytıza göndərildi.
                            </div>
        <?php }  elseif($_GET['durum']=='no') {?>
        <div class="alert bg-red alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                Bilgiləriniz yenilənə bilmədi. Təkrar cəhd edin. Problem davam edərsə developer ilə əlaqə saxlayın!
                                <a href="http://www.azarmamadov.ml"><span style="color:yellow" >Azar Mamadov</span></a>
                            </div>
<?php } ?>
    </nav>
    