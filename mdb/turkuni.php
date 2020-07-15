<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

    <link href="css/hover.css" rel="stylesheet">
</head>

<body>

    <!-- Start your project here-->
<?php $turkeysor=$db->prepare("select * from turkey order by turkey_id ASC");
	  $turkeysor->execute();
while($turkeycek=$turkeysor->fetch(PDO::FETCH_ASSOC)){  ?>	

    <div class="col-md-3">
        <!--Card-->
        <div class="card">
            <!--Card image-->
            <div class="view overlay hm-purple-strong">
                <img src="<?php echo $turkeycek['turkey_picurl'] ?>" class="img-fluid" alt="<?php echo $turkeycek['turkey_name'] ?>">
                <a target="_blank" href="<?php echo $turkeycek['turkey_link'] ?>">
                    <div class="mask waves-effect waves-light"></div>
                </a>
            </div>
            <!--/.Card image-->
            <!--Card content-->
            <div class="card-block">
                <!--Title-->
                <center>
                    <h4 class="card-title">
                        <?php echo $turkeycek['turkey_name'] ?>
                    </h4>
                </center>
                <!--Text-->
            </div>
            <!--/.Card content-->
        </div>
        <!--/.Card-->
    </div>
<?php } ?>
    <!-- /Start your project here-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>