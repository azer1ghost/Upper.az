<?php   include 'header.php';
        include 'sidebar.php';
    $colsor=$db->prepare("SELECT * from ieltsmod where col_id=:col_id");

    $colsor->execute(array('col_id' => $_GET['col_id'])); 

    $colcek=$colsor->fetch(PDO::FETCH_ASSOC);
        
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
                            </h2>
                        </div>
<br>
<form action="../setting/engine.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="col_id" value="<?php echo $colcek['col_id']; ?>">
<input type="hidden" name="col_picurl" value="<?php echo $colcek['col_picurl']; ?>" >

<input type="text" name="col_name" class="form-control" value="<?php echo $colcek['col_name'] ?>" placeholder="Başlıq daxil edin">

<textarea name="col_text"><?php echo $colcek['col_text'] ?> </textarea>
    <script>
        CKEDITOR.replace( 'col_text');
    </script>
    <div class="header bg-red"><center><h5>Düymə adı</h5></center></div>
<input type="text" name="col_btntext" class="form-control" value="<?php echo $colcek['col_btntext'] ?>" placeholder="Başlıq daxil edin">
<div class="header bg-cyan"><center><h5>Düymə linki</h5></center></div>
<input type="text" name="col_btnlink" class="form-control" value="<?php echo $colcek['col_btnlink'] ?>" placeholder="Başlıq daxil edin"><hr><br>

 <div class="header">
          <h2>
      ŞƏKİL YÜKLƏ 
          </h2>
</div>

<div class="body table-responsive">
  <table class="table table-hover">
      <thead>
        <tr>
           <th>Şəkil</th>
           <th>File</th>
           <!--<th>Durum</th>
           <th>col sira</th> -->
        </tr>
    </thead>


    <tbody>
         <tr>
            <td>
                <div class="row">
                <div>
                 
                        <img align="center" height="250" width="150" src="../../<?php echo $colcek['col_picurl'] ?>" class="img-responsive">
                    </a>
                </div>   
            </div>
            </td>  
            <td>                        


                             <label for="file-upload" class="custom-file-upload">
                              <center><i class="material-icons">cloud_upload</i><br> Şəkil seç </center></label>
                             <input id="file-upload"  name="col_picurl"  type="file"/></td>
            <td><div class="demo-radio-button">

         </tr>
    </tbody>
    
</table>                      


        <button type="submit" name="ieltsmodchange" class="btn btn-primary">Dəyişdir</button>
</form>
     </div>
     
  
  
 



 
                           
                        </div>
                    </div>
                </div>
            </div>









    </section>

<?php   include 'footer.php'; ?>
    <script src="assets/plugins/ckeditor/ckeditor.js"></script>