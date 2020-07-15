<?php   include 'header.php';
        include 'sidebar.php';
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

<table>
    <thead>
        <tr>
            <th>    Banner üçün  </th>  
        </tr>
    </thead>
    <tbody>
        <tr>

            <td>
                <label for="file-upload" class="custom-file-upload">
                <center><i class="material-icons">cloud_upload</i><br> Şəkil seç </center></label>
                <input id="file-upload"  name="external_bannerpicurl"  type="file"/>
            </td>

        </tr>
    </tbody>
</table>



<input type="text" name="external_name" class="form-control"  placeholder="Banner başlıq daxil edin">


<textarea name="external_text"><?php echo $blogcek['external_text'] ?> </textarea>
<script>
  CKEDITOR.replace( 'external_text' );
</script>

<input type="text" name="external_btnlink" class="form-control"  placeholder="Düymə linki daxil edin"><br><hr>
<input type="text" name="external_picurl1" class="form-control"  placeholder="Şəkil url-si daxil edin"><br><hr>
<input type="text" name="external_picurl2" class="form-control"  placeholder="Şəkil url-si daxil edin"><br><hr>
<button type="submit" name="externaladd" class="btn btn-primary">Əlavə et</button>

</form>
     </div>
     
  

                           
                        </div>
                    </div>
                </div>
            </div>








    </section>

<?php   include 'footer.php'; ?>