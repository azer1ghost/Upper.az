<?php   include 'header.php';
        include 'sidebar.php'; ?>



    <section class="content">
        <div class="container-fluid">
            <!-- Changelogs -->
 
 <!-- Hover Zoom Effect -->
            <div class="block-header">
                <h2>Səhifələri düzənlə</h2>
            </div>
            <div class="row clearfix">

<!--######################################################################-->
            <a href="newpageadd.php">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-brown">
                            <i class="material-icons">library_add</i>
                        </div>
                        <div class="content">
                            <div class="text">Səhifə əlavə et</div>
                        </div>
                    </div>
                </div>
            </a>
<!--######################################################################-->
            <a href="turkey.php">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-red">
                            <i class="material-icons">chrome_reader_mode</i>
                        </div>
                        <div class="content">
                            <div class="text">*Türkiyədə təhsil</div>
                            </a>
                            <input type="text" name="" disabled="" value="turkey.php"> 
                        </div>
                    </div>
                </div>
            


<?php $extsor=$db->prepare("SELECT * from external order by external_id desc ");
      $extsor->execute();
while($extcek=$extsor->fetch(PDO::FETCH_ASSOC)){  ?>   

<!--######################################################################-->
            <a href="pagechange.php?external_id=<?php echo $extcek['external_id'];  ?>">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-red">
                            <i class="material-icons">chrome_reader_mode</i>
                        </div>
                        <div class="content">
                            <div class="text"><?php echo $extcek['external_name']; ?> təhsil</div>
                            </a>
                            <input type="text" name="" disabled="" value="external.php?external_id=<?php echo $extcek['external_id']; ?>?countryname=<?php echo $extcek['external_name']; ?>">
                        </div>
                    </div>
                </div>
            

<!--######################################################################-->
<?php } ?>


            </div>
            <!-- #END# Hover Zoom Effect -->

    </section>

<?php   include 'footer.php'; ?>