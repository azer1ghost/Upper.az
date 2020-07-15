<?php   include 'header.php';
        include 'sidebar.php';
    $blogsor=$db->prepare("SELECT * from blog where blog_id=:blog_id");

    $blogsor->execute(array('blog_id' => $_GET['blog_id'])); 

    $blogcek=$blogsor->fetch(PDO::FETCH_ASSOC);
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

<input type="hidden" name="blog_id" value="<?php echo $blogcek['blog_id'] ?>">
<input type="hidden" name="blog_picurl" value="<?php echo $blogcek['blog_picurl'] ?>">
<input type="hidden" name="blog_date" value="<?php echo date("d.m.Y") ?>">
<input type="hidden" name="blog_author" value="<?php echo $admincek['admin_name']." ".$admincek['admin_surname']?>">

<table>
    <thead>
        <tr>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <label for="file-upload" class="custom-file-upload">
                <center><i class="material-icons">cloud_upload</i><br> Şəkil seç </center></label>
                <input id="file-upload"  name="blog_picurl"  type="file"/>
            </td>

            <td><div class="demo-radio-button">

<?php if ($blogcek['blog_durum']==1) {?>
                                <input name="blog_durum" value="1" checked="" type="radio" id="radio_13" class="radio-col-light-blue">
                                <label for="radio_13">Aktiv</label>
                             <br>
                                <input name="blog_durum" type="radio" value="0" id="radio_7" class="radio-col-red" >
                                <label for="radio_7">Passiv</label>
<?php }  elseif ($blogcek['blog_durum']==0) {?>
                                <input name="blog_durum" value="1"  type="radio" id="radio_13" class="radio-col-light-blue">
                                <label for="radio_13">Aktiv</label>
                             <br>
                                <input name="blog_durum" type="radio" checked="" value="0" id="radio_7" class="radio-col-red" >
                                <label for="radio_7">Passiv</label>
<?php }?>

                 </div>

             </td>
<td>
    <div>
        <select name="blog_option" class="form-control show-tick">
                <option value="">-- Xəbər növü seçin --</option>
                <option value="hr" <?php if ($blogcek['blog_option']=='hr') {?>selected<?php }?> >HR</option>
                <option value="keyfiyyet" <?php if ($blogcek['blog_option']=='keyfiyyet') {?>selected<?php }?> >Keyfiyyət</option>
                <option value="iqdisadi" <?php if ($blogcek['blog_option']=='iqdisadi') {?>selected<?php }?> >İqdisadi</option>
                <option value="diger" <?php if ($blogcek['blog_option']=='diger') {?>selected<?php }?> >Digər</option>
        </select>
        </select>
    </div>
</td>

        </tr>
    </tbody>
</table>



<input type="text" name="blog_name" class="form-control" value="<?php echo $blogcek['blog_name'] ?>" placeholder="Başlıq daxil edin">


<textarea name="blog_text"><?php echo $blogcek['blog_text'] ?> </textarea>
<script>
  CKEDITOR.replace( 'blog_text' );
</script>
<input type="text" name="blog_keywords" class="form-control" value="<?php echo $blogcek['blog_keywords'] ?>"  placeholder="keywords daxil edin"><br><hr>





<div class="body">

<?php if ($blogcek['blog_gundem']==1) {?>
            <input type="checkbox" id="md_checkbox_222" class="chk-col-green" value="1" name="blog_gundem" checked>
            <?php }  elseif ($blogcek['blog_gundem']==0) {?>
            <input type="checkbox" id="md_checkbox_222" class="chk-col-green" value="1" name="blog_gundem" >
<?php }?>
            <label for="md_checkbox_222">Gündəm</label>
 </div>  
















<button type="submit" name="blogchange" class="btn btn-primary">Yadda Saxla</button>

</form>
     </div>
     
  
  
 



 
                           
                        </div>
                    </div>
                </div>
            </div>









    </section>

<?php   include 'footer.php'; ?>