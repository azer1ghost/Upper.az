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
                            <h3> Dövlət hazırlıq mərkəzi </h3>
                            
                        </div>
                        
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Şəkil</th>
                                        <th>Ad</th>
                                        <th>Düzənlə</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>

<!--###################################################-->





<?php  $dovletsor=$db->prepare("select * from dovlethaz order by col_id ASC");
	     $dovletsor->execute();
       $number=0; // id sayici
 while($dovletcek=$dovletsor->fetch(PDO::FETCH_ASSOC)){
       $number++; //id sayici ++  ?>


<!--###################################################-->
<tr>
        <th scope="row"><?php echo $number ?></th>

        <td>
            <div class="row">
                <div>
                     <img style="height: 50px" src="assets/mobirise/svg/<?php echo $dovletcek['col_picurl'] ?>.svg">
                </div>   
            </div>
        </td>
           
       

        <td><h5 class="mbr-section-title display-2"><?php echo $dovletcek['col_name'] ?></h5></td>


        
        
        <td><a href="dovlethazchange.php?col_id=<?php echo $dovletcek['col_id'];  ?>"><button type="button" class="btn btn-info btn-circle-lg waves-effect waves-circle waves-float">
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







