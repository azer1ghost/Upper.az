<?php   include 'header.php';
        include 'sidebar.php'; ?>



    <section class="content">
        <div class="container-fluid">
            <!-- Changelogs -->
 




<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                SLİDER ŞƏKİL YÜKLƏ
                            </h2>
                        </div>

<div class="body table-responsive">
  <table class="table table-hover">
      <thead>
        <tr>
           <th>File</th>
           <th>Durum</th>
           <th>Slider №</th>
        </tr>
    </thead>


    <tbody>
         <tr>
            <td>                        

<form action="../setting/engine.php" method="POST" enctype="multipart/form-data">

	                         <input type="hidden" name="slider_id" >
	                         <input type="hidden" name="slider_picurl" >

                             <label for="file-upload" class="custom-file-upload">
                              <center><i class="material-icons">cloud_upload</i><br> Şəkil seç </center></label>
                             <input id="file-upload"  name="slider_picurl" required="" type="file"/></td>
            <td><div class="demo-radio-button">

                                <input name="slider_durum" value="1" checked="" type="radio" id="radio_13" class="radio-col-light-blue">
                                <label for="radio_13">Aktiv</label>

                             <br>
                                
                                <input name="slider_durum" type="radio" value="0" id="radio_7" class="radio-col-red" >
                                <label for="radio_7">Passiv</label>
                                
                            </div></td>
            <td>                            
                                <div class="col-md-6">
                           <input align="right" type="text" id="first-name" placeholder="Slider sırası daxil edin" name="slider_sira" class="form-control col-md-7 col-xs-12">
                              
                            </div></td>
         </tr>
    </tbody>
    
</table>                      
        <button type="submit" name="slideradd" class="btn btn-primary">Əlavə et</button>
         </form>
     </div>
     
  </div>
  
  </div>



 
                           
                        </div>
                    </div>
                </div>
            </div>









    </section>

<?php   include 'footer.php'; ?>