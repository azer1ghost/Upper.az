﻿<?php   include 'header.php';
        include 'sidebar.php';
    $modsor=$db->prepare("SELECT * from xaric where mod_id=:mod_id");

    $modsor->execute(array('mod_id' => $_GET['mod_id'])); 

    $modcek=$modsor->fetch(PDO::FETCH_ASSOC);
        
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
                          <center><h6 style="color:red;" >Eyni anda maksimum 2 mod görüntülənə bilər.</h6></center>
                            </h2>
                        </div>
<br>
<form action="../setting/engine.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="mod_id" value="<?php echo $modcek['mod_id']; ?>">
<input type="hidden" name="mod_picurl" value="<?php echo $modcek['mod_picurl']; ?>" >

<input type="text" name="mod_name" class="form-control" value="<?php echo $modcek['mod_name'] ?>" placeholder="Başlıq daxil edin">

<textarea name="mod_text"><?php echo $modcek['mod_text'] ?> </textarea>
    <script>
        CKEDITOR.replace( 'mod_text');
    </script>
    <div class="header bg-red"><center><h5>Düymə adı</h5></center></div>
<input type="text" name="mod_btntext" class="form-control" value="<?php echo $modcek['mod_btntext'] ?>" placeholder="Başlıq daxil edin">
<div class="header bg-cyan"><center><h5>Düymə linki</h5></center></div>
<input type="text" name="mod_btnurl" class="form-control" value="<?php echo $modcek['mod_btnurl'] ?>" placeholder="Başlıq daxil edin"><hr><br>

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
           <th>mod sira</th> -->
        </tr>
    </thead>


    <tbody>
         <tr>
            <td>
                <div class="row">
                <div>
                 
                        <img align="center" height="250" width="150" src="../../<?php echo $modcek['mod_picurl'] ?>" class="img-responsive">
                    </a>
                </div>   
            </div>
            </td>  
            <td>                        


                             <label for="file-upload" class="custom-file-upload">
                              <center><i class="material-icons">cloud_upload</i><br> Şəkil seç </center></label>
                             <input id="file-upload"  name="mod_picurl"  type="file"/></td>
            <td><div class="demo-radio-button">

         </tr>
    </tbody>
    
</table>                      


        <button type="submit" name="modchange" class="btn btn-primary">Dəyişdir</button>
</form>
     </div>
     
  
  
 



 
                           
                        </div>
                    </div>
                </div>
            </div>









    </section>

<?php   include 'footer.php'; ?>
    <script src="assets/plugins/ckeditor/ckeditor.js"></script>