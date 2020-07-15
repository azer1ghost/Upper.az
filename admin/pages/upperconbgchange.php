<?php   include 'header.php';
        include 'sidebar.php';
    $upperconsor=$db->prepare("SELECT * from uppercon where uppercon_id=:uppercon_id");

    $upperconsor->execute(array('uppercon_id' => $_GET['uppercon_id'])); 

    $upperconcek=$upperconsor->fetch(PDO::FETCH_ASSOC);
        
  ?>



    <section class="content">
        <div class="container-fluid">
            <!-- Changelogs -->
 




<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-blue-grey">
                            <h2>
                           <center>Section düzənlə </center>
                            </h2>
                        </div>

<div class="body table-responsive">
  <table class="table table-hover">
      <thead>
        <tr>
           <th>Fon şəkili</th>
           <th>File</th>
           <th>Təsdiq</th>

        </tr>
    </thead>


    <tbody>


          <tr>
            <td>

             <div class="row">
                <div>
                   <img align="center" height="250" width="150" src="../../<?php echo $upperconcek['uppercon_bg'] ?>" class="img-responsive">
                </div>   
                </div>

            </td> 


            <form action="../setting/engine.php" method="POST" enctype="multipart/form-data">
                    <td> 
	                    <input type="hidden" name="uppercon_id" value="<?php echo $upperconcek['uppercon_id']; ?>">
	                    <input type="hidden" name="uppercon_bg" value="<?php echo $upperconcek['uppercon_bg']; ?>" >
                            
                        <label for="file-upload" class="custom-file-upload">
                             <center><i class="material-icons">cloud_upload</i><br> Şəkil seç </center></label>
                             <input id="file-upload"  name="uppercon_bg" required  type="file"/>
                    </td>
                             
                    <td>   
                         <button type="submit" name="upperconbgchange" class="btn bg-deep-purple btn-circle-lg waves-effect waves-circle waves-float"><i class="material-icons">refresh</i></button>
                    </td>           
            </form>

         </tr>
    </tbody>
      
</table>   

     
  </div>
  




 
                           
                        </div>
                    </div>
                </div>
            </div>









    </section>

<?php   include 'footer.php'; ?>