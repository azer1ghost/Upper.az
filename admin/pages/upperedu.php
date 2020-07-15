<?php   include 'header.php';
        include 'sidebar.php';
        //umumi modul sayi
?>


 <section class="content">
   <div class="container-fluid">
           
 <!-- Vertical Layout -->
<div class="row clearfix">
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">


<!-- #######################################################################-->
                    <div class="card">
                        <div class="header">
                            <h3> Upper Education </h3>
                            <div style=" padding-top: 20px;"><a href="uppereduadd.php"><button type="button" class="btn btn-block btn-lg btn-info waves-effect"><i class="material-icons">add_circle</i><h5> Yeni xana əlavə et</h5></button></a></div>
                        </div>
                        
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Şəkil</th>
                                        <th>Ad</th>
                                        <th>Düzənlə</th>
                                        <th>Sil</th>
                                    </tr>
                                </thead>
                                <tbody>

<!--###################################################-->





<?php  $upperconsor=$db->prepare("select * from upperedu order by col_id ASC");
	     $upperconsor->execute();
       $number=0; // id sayici
 while($upperconcek=$upperconsor->fetch(PDO::FETCH_ASSOC)){
       $number++; //id sayici ++  ?>


<!--###################################################-->
<tr>
        <th scope="row"><?php echo $number ?></th>

        <td>
            <div class="row">
                <div>
                        <img align="center" height="250" width="150" src="../../<?php echo $upperconcek['col_picurl'] ?>" class="img-responsive">
                </div>   
            </div>
        </td>
           
       

        <td><h5 class="mbr-section-title display-2"><?php echo $upperconcek['col_name'] ?></h5></td>


        
        
        <td><a href="uppereduchange.php?col_id=<?php echo $upperconcek['col_id'];  ?>"><button type="button" class="btn btn-info btn-circle-lg waves-effect waves-circle waves-float">
                                    <i class="material-icons">border_color</i>
                                </button></a></td>
        <td><a href="../setting/engine.php?upperedusil=ok&resimsil=<?php echo $upperconcek['col_picurl'] ?>&col_id=<?php echo $upperconcek['col_id'] ?>" onclick="return confirm('<?php echo $upperconcek['col_name'] ?> silinsin?')"><button type="button" class="btn bg-red btn-circle-lg waves-effect waves-circle waves-float">
                                    <i class="material-icons">delete_sweep</i>
                                </button></a></td>
         
 </tr>
<!--###################################################-->                          
<?php } ?>

              </tbody>
         </table>              
     </div>
  </div>











                      
            </div>
        </div>
    </div>
</section>

<?php   include 'footer.php'; ?>







