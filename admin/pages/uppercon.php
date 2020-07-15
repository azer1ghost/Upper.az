<?php   include 'header.php';
        include 'sidebar.php';
        //umumi modul sayi
$sorgu=$db->prepare("select * from slider");
$sorgu->execute();
$toplam_slide= $sorgu ->rowCount();
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
                            <h3> Upper Consulting </h3>
                            <h2>Max 6 Section  </h2>
                        </div>
                        
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Şəkil</th>
                                        <th>Ad</th>
                                        <th>Fon</th>
                                        <th>Şəkil</th>
                                        <th>Düzənlə</th>
                                    </tr>
                                </thead>
                                <tbody>

<!--###################################################-->
<tr>
        <th scope="row">1</th>

        <td>
            <div class="row">
                <div>
                        <img align="center" height="250" width="150" src="../../<?php echo $upperconcek1['uppercon1_picurl'] ?>" class="img-responsive">
                </div>   
            </div>
        </td>
          

        <td><h5 class="mbr-section-title display-2"><?php echo $upperconcek1['uppercon1_name'] ?></h5></td>

         <td>   
             <a href="upperconheaderbgchange.php?uppercon1_id=<?php echo $upperconcek1['uppercon1_id'];  ?>"><button type="button" class="btn bg-deep-purple btn-circle-lg waves-effect waves-circle waves-float"><i class="material-icons">refresh</i></button></a>
        </td>

        <td>   
             <a href="upperconheaderpicchange.php?uppercon1_id=<?php echo $upperconcek1['uppercon1_id'];  ?>"><button type="button" class="btn bg-deep-purple btn-circle-lg waves-effect waves-circle waves-float"><i class="material-icons">refresh</i></button></a>
         </td>
        
        <td><a href="upperconheaderchange.php?uppercon1_id=<?php echo $upperconcek1['uppercon1_id'];  ?>"><button type="button" class="btn btn-info btn-circle-lg waves-effect waves-circle waves-float">
                                    <i class="material-icons">border_color</i>
                                </button></a></td>
        
 </tr>
<!--###################################################-->




<?php $upperconsor=$db->prepare("select * from uppercon order by uppercon_id ASC limit 6");
	  $upperconsor->execute();
      $number=1; // id sayici
while($upperconcek=$upperconsor->fetch(PDO::FETCH_ASSOC)){
    $number++; //id sayici ++  ?>


<!--###################################################-->
<tr>
        <th scope="row"><?php echo $number ?></th>

        <td>
            <div class="row">
                <div>
                        <img align="center" height="250" width="150" src="../../<?php echo $upperconcek['upperpicurl'] ?>" class="img-responsive">
                </div>   
            </div>
        </td>
           
       

        <td><h5 class="mbr-section-title display-2"><?php echo $upperconcek['uppercon_name'] ?></h5></td>

        <td>   
             <a href="upperconbgchange.php?uppercon_id=<?php echo $upperconcek['uppercon_id'];  ?>"><button type="button" class="btn bg-deep-purple btn-circle-lg waves-effect waves-circle waves-float"><i class="material-icons">refresh</i></button></a>
        </td>

        <td>   
             <a href="upperconpicchange.php?uppercon_id=<?php echo $upperconcek['uppercon_id'];  ?>"><button type="button" class="btn bg-deep-purple btn-circle-lg waves-effect waves-circle waves-float"><i class="material-icons">refresh</i></button></a>
         </td>
        
        
        <td><a href="upperconchange.php?uppercon_id=<?php echo $upperconcek['uppercon_id'];  ?>"><button type="button" class="btn btn-info btn-circle-lg waves-effect waves-circle waves-float">
                                    <i class="material-icons">border_color</i>
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







