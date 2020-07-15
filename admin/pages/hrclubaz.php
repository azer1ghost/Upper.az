<?php   include 'header.php';
        include 'sidebar.php';
        //umumi modul sayi
$sorgu=$db->prepare("select * from slider");
$sorgu->execute();
$toplam_slide= $sorgu ->rowCount();

$hrsor=$db->prepare("select * from hrclubaz where hr_id=?");
$hrsor->execute(array(1));
$hrcek=$hrsor->fetch(PDO::FETCH_ASSOC);

?>


 <section class="content">
   <div class="container-fluid">
   


<!-- ####################### MODUl bolmesi ###################-->
<!-- #######################################################################-->
                    <div class="card">
                        <div class="header">
                            <h2> HR Club Azerbaijan </h2>
                            
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Şəkil</th>
                                        <th>Ad</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

  
<!--###################################################-->
<tr>

        <td>
            <div class="row">
                <div>
                        <img align="left" height="250" width="150" src="../../<?php  echo $hrcek['hr_bg'] ?>" class="img-responsive">
                </div>   
            </div>
        </td>
           
        <td><?php echo $hrcek['hr_title'] ?></td>
        <td><a href="hrclubchange.php"><button type="button" class="btn btn-info btn-circle-lg waves-effect waves-circle waves-float">
                                    <i class="material-icons">border_color</i>
                                </button></td>
 </tr>
<!--###################################################-->                          
              </tbody>
         </table>              
     </div>
  </div>


<!--###################################################-->   

 <!-- Vertical Layout -->

                    <div class="card">
                        <div class="header">
                            <h3> Slider </h3>
                            <h2>Max 10 slide  </h2>
                        </div>
                        
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Şəkil</th>
                                        <th>Durum</th>
                                        <th>Sıra</th>
                                        <th>Düzənlə</th>
                                        <th >Sil</th>
                                    </tr>
                                </thead>
                                <tbody>
<!-- .slide -->
<?php $slidersor=$db->prepare("select * from hrslider order by slider_sira ASC ");
	  $slidersor->execute();
$number=0; // id sayici
while($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)){
$number++; //id sayici ++  ?>	

<!--###################################################-->
<tr>
        <th scope="row"><?php echo $number ?></th>

        <td>
            <div class="row">
                <div>
                 
                        <img align="center" height="250" width="150" src="../../<?php echo $slidercek['slider_picurl'] ?>" class="img-responsive">
                    </a>
                </div>   
            </div>
        </td>
           
        <td>        <?php
                              if  ($slidercek['slider_durum']=="1"){

                                echo "AKTİV";}

                              else{
                                echo "GİZLİ";
                              }
                             ?></td>

        <td><?php echo $slidercek['slider_sira']?></td>
        <td><a href="hrsliderchange.php?slider_id=<?php echo $slidercek['slider_id'];  ?>"><button type="button" class="btn btn-info btn-circle-lg waves-effect waves-circle waves-float">
                                    <i class="material-icons">border_color</i>
                                </button></a></td>
        <td><a href="../setting/engine.php?hrslidersil=ok&sliderresimsil=<?php echo $slidercek['slider_picurl'] ?>&slider_id=<?php echo $slidercek['slider_id'] ?>" onclick="return confirm('Element silinsin?')"><button type="button" class="btn bg-red btn-circle-lg waves-effect waves-circle waves-float">
                                    <i class="material-icons">delete_sweep</i>
                                </button></a></td>
 </tr>
<!--###################################################-->                          
<?php } ?>

              </tbody>
         </table>              
     </div><a href="hrslideradd.php"><button type="button" class="btn btn-block btn-lg btn-info waves-effect"><i class="material-icons">add_circle</i><h5> Yeni slide əlavə et</h5></button></a></td>
  </div>













<!-- ####################### reyler bolmesi ###################-->
<!-- #######################################################################-->
                    <div class="card">
                        <div class="header">
                            <h2> Mətbuat bizim haqda yazır </h2>
                            
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Modul adı</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>




<!-- xaric -->
<?php $metsor=$db->prepare("select * from metbuat order by met_id DESC");
      $metsor->execute();
while($metcek=$metsor->fetch(PDO::FETCH_ASSOC)){  ?>    

  
        <td><?php echo $metcek['met_title']?></td>
       
        <td><a href="#"><button type="button" class="btn btn-info btn-circle-lg waves-effect waves-circle waves-float">
                                    <i class="material-icons">border_color</i>
                                </button></td></a>
 </tr>
<!--###################################################-->    
<?php } ?>             

              </tbody>
         </table>              
     </div>
  </div>


<!--###################################################-->   


                      
            </div>
        </div>
    </div>
</section>

<?php   include 'footer.php'; ?>







