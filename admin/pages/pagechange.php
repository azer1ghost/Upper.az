<?php   include 'header.php';
        include 'sidebar.php';
    $extsor=$db->prepare("SELECT * from external where external_id=:external_id");

    $extsor->execute(array('external_id' => $_GET['external_id'])); 

    $extcek=$extsor->fetch(PDO::FETCH_ASSOC);
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
<input type="hidden" name="external_id" value="<?php echo $extcek['external_id']; ?>">
<input type="hidden" name="external_bannerpicurl" value="<?php echo $extcek['external_bannerpicurl']; ?>">
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



<input type="text" name="external_name" class="form-control" value="<?php echo $extcek['external_name'] ?>" placeholder="Banner başlıq daxil edin">


<textarea name="external_text"><?php echo $extcek['external_text'] ?> </textarea>
<script>
  CKEDITOR.replace( 'external_text' );
</script>

<input type="text" name="external_btnlink" class="form-control" value="<?php echo $extcek['external_btnlink'] ?>"  placeholder="Düymə linki daxil edin"><br><hr>
<input type="text" name="external_picurl1" class="form-control" value="<?php echo $extcek['external_picurl1'] ?>"  placeholder="Şəkil url-si daxil edin"><br><hr>
<input type="text" name="external_picurl2" class="form-control" value="<?php echo $extcek['external_picurl2'] ?>" placeholder="Şəkil url-si daxil edin"><br><hr>

<button type="submit" name="externalchange" class="btn btn-primary">Yadda saxla</button>
<a href="../setting/engine.php?extsil=ok&resimsil=<?php echo $extcek['external_bannerpicurl'] ?>&external_id=<?php echo $extcek['external_id'] ?>" onclick="return confirm('Mövcud səhifə silinsin?')"><button  type="button" class="btn btn-danger ">
                                   Sil
                                </button></a>

</form>
     </div>
     
  

                           
                        </div>
                    </div>
                </div>
            </div>








    </section>

<?php   include 'footer.php'; ?>