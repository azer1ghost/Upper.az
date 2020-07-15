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
<input type="hidden" name="blog_id" >
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

            <td>
                <div class="demo-radio-button">
                    <input name="blog_durum" value="1" checked="" type="radio" id="radio_13" class="radio-col-light-blue">
                    <label for="radio_13">Aktiv</label>
                    <br>
                    <input name="blog_durum" type="radio" value="0" id="radio_7" class="radio-col-red" >
                    <label for="radio_7">Passiv</label>             
                </div>
            </td>

<td>
    <div>
        <select name="blog_option" class="form-control show-tick">
                <option value="">-- Xəbər növü seçin --</option>
                <option value="hr">HR</option>
                <option value="keyfiyyet">Keyfiyyət</option>
                <option value="iqdisadi">İqdisadi</option>
                <option value="diger">Digər Xəbərlər</option>
        </select>
    </div>
</td>
  


        </tr>
    </tbody>
</table>



<input type="text" name="blog_name" class="form-control"  placeholder="Başlıq daxil edin">


<textarea name="blog_text"><?php echo $blogcek['blog_text'] ?> </textarea>
<script>
  CKEDITOR.replace( 'blog_text' );
</script>

<input type="text" name="blog_keywords" class="form-control"  placeholder="keywords daxil edin"><br><hr>

<div class="body">
<input type="checkbox" id="md_checkbox_222" class="chk-col-green" value="1" name="blog_gundem" >
<label for="md_checkbox_222">Gündəm</label>
 </div>  

<button type="submit" name="blogadd" class="btn btn-primary">Əlavə et</button>

</form>
     </div>
     
  
  
 



 
                           
                        </div>
                    </div>
                </div>
            </div>








    </section>

<?php   include 'footer.php'; ?>