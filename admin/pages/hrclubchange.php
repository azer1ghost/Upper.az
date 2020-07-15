<?php   include 'header.php';
        include 'sidebar.php';
$hrsor=$db->prepare("select * from hrclubaz where hr_id=?");
$hrsor->execute(array(1));
$hrcek=$hrsor->fetch(PDO::FETCH_ASSOC);
  ?>



    <section class="content">
        <div class="container-fluid">
            <!-- Changelogs -->
 




<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">



<div class="header bg-cyan">
                            <h2>
                          <center>Başlıq və mətn</center>
                          <center><h6 style="color:red;" >Eyni anda maksimum 3 modul görüntülənə bilər.</h6></center>
                            </h2>
                        </div>
<br>
<form action="../setting/engine.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="hr_id" value="<?php echo $hrcek['hr_id']; ?>">
<input type="hidden" name="hr_bg" value="<?php echo $hrcek['hr_bg']; ?> " >

<div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>File</th>
                                        <th>Şəkil</th>
                                    </tr>
                                </thead>
                                <tbody>
<!--###################################################-->
<tr>

  <td>
    <label for="file-upload" class="custom-file-upload">
          <center><i class="material-icons">cloud_upload</i><br> Şəkil seç </center></label>
     <input id="file-upload"  name="hr_bg" type="file"/>
  </td>
<td>
<img align="center" height="250" width="150" src="../../<?php echo $hrcek['hr_bg'] ?>" class="img-responsive">
</td>
</tr>
<input type="text" name="hr_title" class="form-control" value="<?php echo $hrcek['hr_title'] ?>" placeholder="Başlıq daxil edin">
</tbody>
</table>
</div>
<textarea name="hr_subtitle"><?php echo $hrcek['hr_subtitle'] ?></textarea>
    <script>
        CKEDITOR.replace( 'hr_subtitle');
    </script>
   
         


        <button type="submit" name="hrazchange" class="btn btn-primary">Dəyişdir</button>
</form>
     </div>
     
  
  
 



 
                           
                        </div>
                    </div>
                </div>
            </div>









    </section>

<?php   include 'footer.php'; ?>
    <script src="assets/plugins/ckeditor/ckeditor.js"></script>