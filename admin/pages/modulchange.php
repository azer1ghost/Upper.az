<?php   include 'header.php';
        include 'sidebar.php';
    $modulsor=$db->prepare("SELECT * from modul where modul_id=:modul_id");

    $modulsor->execute(array('modul_id' => $_GET['modul_id'])); 

    $modulcek=$modulsor->fetch(PDO::FETCH_ASSOC);
        
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

<input type="hidden" name="modul_id" value="<?php echo $modulcek['modul_id']; ?>">
<input type="hidden" name="modul_picurl" value="<?php echo $modulcek['modul_picurl']; ?>" >

<input type="text" name="modul_name" class="form-control" value="<?php echo $modulcek['modul_name'] ?>" placeholder="Başlıq daxil edin">

<textarea name="modul_text"><?php echo $modulcek['modul_text'] ?> </textarea>
    <script>
        CKEDITOR.replace( 'modul_text');
    </script>
    <div class="header bg-red"><center><h5>Düymə adı</h5></center></div>
<input type="text" name="modul_btntext" class="form-control" value="<?php echo $modulcek['modul_btntext'] ?>" placeholder="Başlıq daxil edin">
<div class="header bg-cyan"><center><h5>Düymə linki</h5></center></div>
<input type="text" name="modul_url" class="form-control" value="<?php echo $modulcek['modul_url'] ?>" placeholder="Başlıq daxil edin"><hr><br>

 <div class="header">
          <h2>
     MODUL ŞƏKİL YÜKLƏ və Sıranı təyin et.
          </h2>
</div>

<div class="body table-responsive">
  <table class="table table-hover">
      <thead>
        <tr>
           <th>Şəkil</th>
           <th>File</th>
           <th>Durum</th>
           <th>Modul sira</th>
        </tr>
    </thead>


    <tbody>
         <tr>
            <td>
                <div class="row">
                <div>
                 
                        <img align="center" height="250" width="150" src="../../<?php echo $modulcek['modul_picurl'] ?>" class="img-responsive">
                    </a>
                </div>   
            </div>
            </td>  
            <td>                        


                             <label for="file-upload" class="custom-file-upload">
                              <center><i class="material-icons">cloud_upload</i><br> Şəkil seç </center></label>
                             <input id="file-upload"  name="modul_picurl"  type="file"/></td>
            <td><div class="demo-radio-button">

<?php if ($modulcek['modul_durum']==1) {?>
                                <input name="modul_durum" value="1" checked="" type="radio" id="radio_13" class="radio-col-light-blue">
                                <label for="radio_13">Aktiv</label>
                             <br>
                                <input name="modul_durum" type="radio" value="0" id="radio_7" class="radio-col-red" >
                                <label for="radio_7">Passiv</label>
<?php }  elseif ($modulcek['modul_durum']==0) {?>
                                <input name="modul_durum" value="1"  type="radio" id="radio_13" class="radio-col-light-blue">
                                <label for="radio_13">Aktiv</label>
                             <br>
                                <input name="modul_durum" type="radio" checked="" value="0" id="radio_7" class="radio-col-red" >
                                <label for="radio_7">Passiv</label>
<?php }?>

                            </div>

                            </td>
            <td>                            
                                <div class="col-md-6">
                           <input align="right" type="text" id="first-name" placeholder="Slider sırası daxil edin" value="<?php echo $modulcek['modul_sira'] ?>" name="modul_sira" class="form-control col-md-7 col-xs-12">
                              
                            </div></td>
         </tr>
    </tbody>
    
</table>                      


        <button type="submit" name="modulchange" class="btn btn-primary">Dəyişdir</button>
</form>
     </div>
     
  
  
 



 
                           
                        </div>
                    </div>
                </div>
            </div>









    </section>

<?php   include 'footer.php'; ?>
    <script src="assets/plugins/ckeditor/ckeditor.js"></script>