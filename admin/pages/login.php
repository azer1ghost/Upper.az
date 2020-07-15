<!DOCTYPE html>
<html>

<head>
<?php include '../setting/connect.php';

$ayarsor=$db->prepare("select * from `ayarlar 1` where ayar_id=?");
$ayarsor->execute(array(1));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Login Upper.az</title>
    <!-- Favicon-->
    <link rel="icon" href="assets/logo.ico" type="image/x-icon">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body class="login-page" style="background-color: white">
    <div class="login-box">
        <div class="logo">
           <center><img style="width: 300px" src="../../<?php echo $ayarcek['ayar_logourl'] ?>" alt="Upper.az"></center> 
           
        </div>
        <div class="card">
            <div class="body">
                <form action="../setting/engine.php" method="POST">

                    <div class="msg">Admin panelə daxil olmaq üçün login və şifrəni müvafiq xanalara yazın</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="admin_name" placeholder="İstifadəçi adı" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="admin_password" placeholder="Şifrə" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Giris məlumatlarını xatırla</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" name="loggin" type="submit">Daxil ol</button>
                        </div>
                    </div>
                    
                </form>
                
            

            
 <?php if ($_GET['durum']=='no') { ?>
        <div class="alert bg-red alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                Giriş bilgiləri yanlışdır...
                                 Adminlə əlaqə saxlayın!
                                <a href="http://www.azarmamadov.ml"><span style="color:yellow" >Azar Mamadov</span></a>
                            </div>

 <?php }  elseif($_GET['durum']=='exit') {?>
        <div class="alert bg-green alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                               Admin sesianız uğurla sonlandırıldı.
                                                     
                            </div>


 <?php } elseif($_GET['durum']=='nolog') {?>
        <div class="alert bg-orange alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                              Hesaba daxil olmamısınız.
                                
                            </div>

<?php } elseif($_GET['durum']=='ok') {?>

        <div class="alert bg-green alert-dismissible" role="alert">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>

                 <div style=" font-size:2em; vertical-align:middle; float:left;" >
                    <i class="fa fa-spinner fa-spin"></i> 
                </div>

                <div style="float:left; padding-top:12px; padding-left: 10px" >Yönləndrilirsiniz...</div>
                <div style="clear:both;"></div> 
        </div>
<meta http-equiv="Refresh" content="3;URL=http://localhost/upper.az/admin/pages" />



<?php  } ?>



                
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="assets/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="assets/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/pages/examples/sign-in.js"></script>
</body>

</html>