<?php   include 'header.php';
        include 'sidebar.php';
    $upperconsor1=$db->prepare("SELECT * from upperconheader where uppercon1_id=:uppercon1_id");

    $upperconsor1->execute(array('uppercon1_id' => $_GET['uppercon1_id'])); 

    $upperconcek1=$upperconsor1->fetch(PDO::FETCH_ASSOC);
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
                   <img align="center" height="250" width="150" src="../../<?php echo $upperconcek1['uppercon1_bg'] ?>" class="img-responsive">
                </div>   
                </div>

            </td> 


            <form action="../setting/engine.php" method="POST" enctype="multipart/form-data">
                    <td> 
	                    <input type="hidden" name="uppercon1_id" value="<?php echo $upperconcek1['uppercon1_id']; ?>">
	                    <input type="hidden" name="uppercon1_bg" value="<?php echo $upperconcek1['uppercon1_bg']; ?>" >
                            
                        <label for="file-upload" class="custom-file-upload">
                             <center><i class="material-icons">cloud_upload</i><br> Şəkil seç </center></label>
                             <input id="file-upload"  name="uppercon1_bg" required  type="file"/>
                    </td>
                             
                    <td>   
                         <button type="submit" name="upperconheaderbgchange" class="btn bg-deep-purple btn-circle-lg waves-effect waves-circle waves-float"><i class="material-icons">refresh</i></button>
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