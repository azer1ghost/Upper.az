<?php   include 'header.php';
        include 'sidebar.php';
    $turkeysor=$db->prepare("SELECT * from turkey where turkey_id=:turkey_id");

    $turkeysor->execute(array('turkey_id' => $_GET['turkey_id'])); 

    $turkeycek=$turkeysor->fetch(PDO::FETCH_ASSOC);
        
  ?>



    <section class="content">
        <div class="container-fluid">
            <!-- Changelogs -->
 




<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">




<form action="../setting/engine.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="turkey_id" value="<?php echo $turkeycek['turkey_id']; ?>">
<input type="hidden" name="turkey_picurl" value="<?php echo $turkeycek['turkey_picurl']; ?>" >

 <div class="header">
          <h2>
     UNİVERSİTET ŞƏKİL YÜKLƏ 
          </h2>
</div>

<div class="body table-responsive">
  <table class="table table-hover">
      <thead>
        <tr>
           <th>Şəkil</th>
           <th>File</th>
           <th>Universitet adı</th>
        </tr>
    </thead>


    <tbody>
         <tr>
            <td>
                <div class="row">
                <div>
                 
                        <img align="center" height="250" width="150" src="../../<?php echo $turkeycek['turkey_picurl'] ?>" class="img-responsive">
                    </a>
                </div>   
            </div>
            </td>  
            <td>                        


                             <label for="file-upload" class="custom-file-upload">
                              <center><i class="material-icons">cloud_upload</i><br> Şəkil seç </center></label>
                             <input id="file-upload"  name="turkey_picurl"  type="file"/></td>
           
             <td>                            
                 <div class="col-md-12">
                      <input align="right" type="text" id="first-name" placeholder="Universitet adı daxil edin" value="<?php echo $turkeycek['turkey_name'] ?>" name="turkey_name" class="form-control col-md-7 col-xs-12">       
                </div>
            </td>
            
         </tr>
    </tbody>
                           
              
            
</table>                      
   <div class="col-md-12">
     <input align="right" type="text" id="first-name" placeholder="Link daxil edin" value="<?php echo $turkeycek['turkey_link'] ?>" name="turkey_link" class="form-control col-md-7 col-xs-12">       
</div>

        <button type="submit" name="turkeychange" class="btn btn-primary">Dəyişdir</button>
</form>
     </div>
     
                           
                        </div>
                    </div>
                </div>
            </div>



    </section>

<?php   include 'footer.php'; ?>
    <script src="assets/plugins/ckeditor/ckeditor.js"></script>