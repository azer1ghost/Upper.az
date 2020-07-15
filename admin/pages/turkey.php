<?php   include 'header.php';
        include 'sidebar.php';
$turkey=$db->prepare("select * from `turkeyphp` where col_id=1");
$turkey->execute(array(1));
$roWturkey=$turkey->fetch(PDO::FETCH_ASSOC); ?>



    <section class="content">
        <div class="container-fluid">
            <!-- Changelogs -->
 
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">



<div class="header bg-cyan">
                            <h2>
                          <center>Başlıq və mətn</center>
                            </h2>
                        </div>
<br>
<form action="../setting/engine.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="col_id" value="<?php echo $roWturkey['col_id']; ?>">
<input type="hidden" name="col_picurl" value="<?php echo $roWturkey['col_picurl']; ?>">
<table>
    <thead>
        <tr>
            <th>    Banner üçün  </th>  
        </tr>
    </thead>
    <tbody>
        <tr>

            <td>
                <label for="file-upload" class="custom-file-upload">
                <center><i class="material-icons">cloud_upload</i><br> Şəkil seç </center></label>
                <input id="file-upload"  name="col_picurl"  type="file"/>
            </td>

        </tr>
    </tbody>
</table>



<input type="text" name="col_name" class="form-control" value="<?php echo $roWturkey['col_name'] ?>" placeholder="Banner başlıq daxil edin">


<textarea name="col_text"><?php echo $roWturkey['col_text'] ?> </textarea>
<script>
  CKEDITOR.replace( 'col_text' );
</script>

<input type="text" name="col_btnlink" class="form-control" value="<?php echo $roWturkey['col_btnlink'] ?>"  placeholder="Düymə linki daxil edin"><br><hr>
<input type="text" name="col_picurl" class="form-control" value="<?php echo $roWturkey['col_picurl'] ?>"  placeholder="Şəkil url-si daxil edin"><br><hr>

<textarea name="col_uni"><?php echo $roWturkey['col_uni'] ?> </textarea>
<script>
  CKEDITOR.replace( 'col_uni' );
</script>




<button type="submit" name="turkeychangephp" class="btn btn-primary">Yadda saxla</button>


</form>
     </div>
     
  

                           
                        </div>
                    </div>
                </div>




<!-- ####################### MODUl bolmesi ###################-->
<!-- #######################################################################-->
                    <div class="card">
                        <div class="header">
                            <h2> Universitetlər </h2>
                            
                        </div>
                        <div class="body table-responsive">
                         <div align="right"><a href="turkeyadd.php"><button type="button" class="btn bg-light-green btn-circle-lg waves-effect waves-circle waves-float">
                                    <i class="material-icons">camera_enhance</i>
                                </button></a></div>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Şəkil</th>
                                        <th>Modul adı</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>




<!-- .modul -->
<?php $turkeysor=$db->prepare("select * from turkey order by turkey_id ASC");
	  $turkeysor->execute();
while($turkeycek=$turkeysor->fetch(PDO::FETCH_ASSOC)){  ?>	

<!--###################################################-->
<tr>
        <th scope="row"></th>

        <td>
            <div class="row">
                <div>
                 
                        <img align="left" height="250" width="150" src="../../<?php echo $turkeycek['turkey_picurl'] ?>" class="img-responsive">
                   
                </div>   
            </div>
        </td>
           
        <td><?php echo $turkeycek['turkey_name']?></td>
      
        <td><a href="turkeychange.php?turkey_id=<?php echo $turkeycek['turkey_id'];?>"><button type="button" class="btn btn-primary waves-effect">Düzənlə</button></td>
         <td><a href="../setting/engine.php?turkeysil=ok&turkeyresimsil=<?php echo $turkeycek['turkey_picurl'] ?>&turkey_id=<?php echo $turkeycek['turkey_id'] ?>" onclick="return confirm('Element silinsin?')"><button type="button" class="btn bg-red btn-circle-lg waves-effect waves-circle waves-float">
                                    <i class="material-icons">delete_sweep</i>
                                </button></a></td>
 </tr>
<!--###################################################-->                          
<?php } ?>
              </tbody>
         </table>              
     </div>
  </div>


<!--###################################################-->   



    </section>

<?php   include 'footer.php'; ?>