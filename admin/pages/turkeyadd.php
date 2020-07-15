<?php   include 'header.php';
        include 'sidebar.php';
 
  ?>



    <section class="content">
        <div class="container-fluid">
            <!-- Changelogs -->
 




<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">




<form action="../setting/engine.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="turkey_id" >
<input type="hidden" name="turkey_picurl" >

 <div class="header">
          <h2>
     UNİVERSİTET ŞƏKİL YÜKLƏ 
          </h2>
</div>

<div class="body table-responsive">
  <table class="table table-hover">
      <thead>
        <tr>
           
           <th>File</th>
           <th>Universitet adı</th>
        </tr>
    </thead>


    <tbody>
         <tr>
            
            <td>                        


                             <label for="file-upload" class="custom-file-upload">
                              <center><i class="material-icons">cloud_upload</i><br> Şəkil seç </center></label>
                             <input id="file-upload"  name="turkey_picurl"  type="file"/></td>
           
             <td>                            
                 <div class="col-md-12">
                      <input align="right" type="text" id="first-name" placeholder="Universitet adı daxil edin"  name="turkey_name" class="form-control col-md-7 col-xs-12">       
                </div>
            </td>
            
         </tr>
    </tbody>
                           
              
            
</table>                      
   <div class="col-md-12">
     <input align="right" type="text" id="first-name" placeholder="Link daxil edin" name="turkey_link" class="form-control col-md-7 col-xs-12">       
</div>

        <button type="submit" name="turkeyadd" class="btn btn-primary">Əlavə et</button>
</form>
     </div>
     
                           
                        </div>
                    </div>
                </div>
            </div>



    </section>

<?php   include 'footer.php'; ?>
    <script src="assets/plugins/ckeditor/ckeditor.js"></script>