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


                    <div class="card">
                        <div class="header">
                            <h2> Logo </h2>
                        </div>
                        
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>File</th>
                                        <th>Şəkil</th>
                                        <th>Düymə</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
<!--###################################################-->
<tr>
        <td>
            <div class="row">
                <div>
                <div class="content">
                <form action="../setting/engine.php" method="POST" enctype="multipart/form-data">
                 <input type="hidden" name="ayar_id" value="<?php echo $ayarcek['ayar_id']; ?> " >
	             <input type="hidden" name="ayar_logourl" value="<?php echo $ayarcek['ayar_logourl']; ?> " >   
                 
    						 <label for="file-upload" class="custom-file-upload">
                              <center><i class="material-icons">cloud_upload</i><br> Şəkil seç </center></label>
                             <input id="file-upload"  name="ayar_logourl" required="" type="file"/>
 </td>
<td>
                        <img align="center" height="250" width="150" src="../../<?php echo $ayarcek['ayar_logourl'] ?>" class="img-responsive"> </td>
<td>
    <button type="submit" name="logoupdate" type="button" class="btn bg-pink btn-block btn-lg waves-effect">Yenilə</button>
</td>


 </form>

             
        </td>
 </tr>
<!--###################################################-->                          

              </tbody>
         </table>              
     </div>
  </div>
<!-- #######################################################################-->
                    <div class="card">
                        <div class="header">
                            <h3> Slider </h3>
                            <h2>Max 5 slide  </h2>
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
<?php $slidersor=$db->prepare("select * from slider order by slider_sira ASC limit 5");
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
        <td><a href="sliderchange.php?slider_id=<?php echo $slidercek['slider_id'];  ?>"><button type="button" class="btn btn-info btn-circle-lg waves-effect waves-circle waves-float">
                                    <i class="material-icons">border_color</i>
                                </button></a></td>
        <td><a href="../setting/engine.php?slidersil=ok&sliderresimsil=<?php echo $slidercek['slider_picurl'] ?>&slider_id=<?php echo $slidercek['slider_id'] ?>" onclick="return confirm('Element silinsin?')"><button type="button" class="btn bg-red btn-circle-lg waves-effect waves-circle waves-float">
                                    <i class="material-icons">delete_sweep</i>
                                </button></a></td>
 </tr>
<!--###################################################-->                          
<?php } ?>

              </tbody>
         </table>              
     </div><a href="slideradd.php"><button type="button" class="btn btn-block btn-lg btn-info waves-effect"><i class="material-icons">add_circle</i><h5> Yeni slide əlavə et</h5></button></a></td>
  </div>










<!-- ####################### MODUl bolmesi ###################-->
<!-- #######################################################################-->
                    <div class="card">
                        <div class="header">
                            <h2> Modul </h2>
                            
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Şəkil</th>
                                        <th>Modul adı</th>
                                        <th>Sıra</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>




<!-- .modul -->
<?php $modulsor=$db->prepare("select * from modul order by modul_id DESC, modul_sira ASC");
	  $modulsor->execute();
while($modulcek=$modulsor->fetch(PDO::FETCH_ASSOC)){  ?>	

<!--###################################################-->
<tr>
        <th scope="row"></th>

        <td>
            <div class="row">
                <div>
                 
                        <img align="left" height="250" width="150" src="../../<?php echo $modulcek['modul_picurl'] ?>" class="img-responsive">
                    </a>
                </div>   
            </div>
        </td>
           
        <td><?php echo $modulcek['modul_name']?></td>
        <td><?php echo $modulcek['modul_sira']?></td>
        <td><a href="modulchange.php?modul_id=<?php echo $modulcek['modul_id'];?>"><button type="button" class="btn btn-info btn-circle-lg waves-effect waves-circle waves-float">
                                    <i class="material-icons">border_color</i>
                                </button></td>
 </tr>
<!--###################################################-->                          
<?php } ?>
              </tbody>
         </table>              
     </div>
  </div>


<!--###################################################-->   







<!-- ####################### xaricde tehsil basliq bolmesi ###################-->
<!-- #######################################################################-->
                    <div class="card">
                        <div class="header">
                            <h2> Xaricdə təhsil başlıq  </h2>
                            
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                 
                                </thead>
                                <tbody>

<!--###################################################-->
<tr>
      
<div class="form-line">
     <a href="xtbas.php"><button name="xtheaderchange" type="sumbit" class="btn btn-block btn-lg btn-info waves-effect">Düzənlə</button></a>
 </div>
             
 </tr>
<!--###################################################-->                          
              </tbody>
         </table>              
     </div>
  </div>


<!--###################################################--> 







<!-- ####################### xaricde tehsil bolmesi ###################-->
<!-- #######################################################################-->
                    <div class="card">
                        <div class="header">
                            <h2> Xaricdə təhsil </h2>
                            
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Şəkil</th>
                                        <th>Modul adı</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>




<!-- xaric -->
<?php $modulsorx=$db->prepare("select * from xaric order by mod_id DESC ");
      $modulsorx->execute();
while($modulcekx=$modulsorx->fetch(PDO::FETCH_ASSOC)){  ?>  
<!--###################################################-->
<tr>
        <th scope="row"></th>

        <td>
            <div class="row">
                <div>
                 
                        <img align="left" height="250" width="150" src="../../<?php echo $modulcekx['mod_picurl'] ?>" class="img-responsive">
                   
                </div>   
            </div>
        </td>
           
        <td><?php echo $modulcekx['mod_name']?></td>
       
        <td><a href="modchange.php?mod_id=<?php echo $modulcekx['mod_id'];?>"><button type="button" class="btn btn-info btn-circle-lg waves-effect waves-circle waves-float">
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







