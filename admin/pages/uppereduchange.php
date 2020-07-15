<?php   include 'header.php';
        include 'sidebar.php';
    $upperconsor=$db->prepare("SELECT * from upperedu where col_id=:col_id");

    $upperconsor->execute(array('col_id' => $_GET['col_id'])); 

    $upperconcek=$upperconsor->fetch(PDO::FETCH_ASSOC);
        
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
<input type="hidden" name="col_id" value="<?php echo $upperconcek['col_id']; ?>">
<input type="hidden" name="col_picurl" value="<?php echo $upperconcek['col_picurl']; ?>">

  <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Şəkil</th>
                                        <th>File</th>
                                    </tr>
                                </thead>
                                <tbody>
<!--###################################################-->
<tr>

<td> <img align="center" height="250" width="150" src="../../<?php echo $upperconcek['col_picurl'] ?>" class="img-responsive"> </td>
        
        <td>
           <label for="file-upload" class="custom-file-upload">
           <center><i class="material-icons">cloud_upload</i><br> Şəkil seç </center></label>
           <input id="file-upload"  name="col_picurl"  type="file"/>
        </td>
 </tr>
<!--###################################################-->                          

     </tbody>
</table>
<div class="header bg-cyan"><center>Ad</center></div>             
<input type="text" name="col_name" class="form-control" value="<?php echo $upperconcek['col_name'] ?>" placeholder="Başlıq daxil edin">
<div class="header bg-cyan"><center>Alt yazı</center></div>  
<input type="text" name="col_text" class="form-control" value="<?php echo $upperconcek['col_text'] ?>" placeholder="Alt yazı daxil edin">
<div class="header bg-cyan"><center>Düymə mətni</center></div>  
<input type="text" name="col_btntext" class="form-control" value="<?php echo $upperconcek['col_btntext'] ?>" placeholder="Düymə adı daxil edin">
<div class="header bg-cyan"><center>Düymə linki</center></div>  
<input type="text" name="col_btnlink" class="form-control" value="<?php echo $upperconcek['col_btnlink'] ?>" placeholder="Düymə linki yazı daxil edin">


        <button type="submit" name="uppereduchange" class="btn btn-primary">Dəyişdir</button>
         </form>
     </div>
     
  
  
 



 
                           
                        </div>
                    </div>
                </div>
            </div>









    </section>

<?php   include 'footer.php'; ?>



