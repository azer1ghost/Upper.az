<?php   include 'header.php';
        include 'sidebar.php';
    $dovletsor=$db->prepare("SELECT * from dovlethaz where col_id=:col_id");

    $dovletsor->execute(array('col_id' => $_GET['col_id'])); 

    $dovletcek=$dovletsor->fetch(PDO::FETCH_ASSOC);
        
  ?>



    <section class="content">
        <div class="container-fluid">
            <!-- Changelogs -->
 




<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">



<div class="header bg-cyan">
                            <h2>
                          <center>Düzənlə</center>
                            </h2>
                        </div>
<br>
<form action="../setting/engine.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="col_id" value="<?php echo $dovletcek['col_id']; ?>">

  <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Icon</th>
                                        <th>Icon code</th>
                                    </tr>
                                </thead>
                                <tbody>
<!--###################################################-->
<tr >
        <td >
          <div class="row">
                <div>
                     <img style="height: 50px; margin-left: 10px" src="assets/mobirise/svg/<?php echo $dovletcek['col_picurl'] ?>.svg">
                </div>   
          </div>
        </td>
        <td><input type="text" name="col_picurl" class="form-control" value="<?php echo $dovletcek['col_picurl'] ?>" placeholder="Icon kodu daxil edin"></td>
 </tr>
<!--###################################################-->                          

     </tbody>
</table>
<div class="header bg-cyan"><center>Ad</center></div>             
<input type="text" name="col_name" class="form-control" value="<?php echo $dovletcek['col_name'] ?>" placeholder="Başlıq daxil edin">

<div class="header bg-cyan"><center>Alt yazı</center></div>  
<textarea name="col_text"><?php echo $dovletcek['col_text'] ?></textarea>
<script>
  CKEDITOR.replace( 'col_text' );
</script>


<div class="header bg-cyan"><center>Düymə mətni</center></div>  
<input type="text" name="col_btntext" class="form-control" value="<?php echo $dovletcek['col_btntext'] ?>" placeholder="Düymə adı daxil edin">

<div class="header bg-cyan"><center>Düymə linki</center></div>  
<input type="text" name="col_btnlink" class="form-control" value="<?php echo $dovletcek['col_btnlink'] ?>" placeholder="Düymə linki yazı daxil edin">


        <button type="submit" name="dovlethazchange" class="btn btn-primary">Dəyişdir</button>
         </form>
     </div>
     
  
  
 



 
                           
                        </div>
                    </div>
                </div>
            </div>









    </section>

<?php   include 'footer.php'; ?>



