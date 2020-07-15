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
                                Blog
                            </h2> 
<div style=" padding-top: 20px;"><a href="blogadd.php"><button type="button" class="btn btn-block btn-lg btn-info waves-effect"><i class="material-icons">add_circle</i><h5> Yeni post əlavə et</h5></button></a></div>



                        </div>

<div class="body table-responsive">
  <table class="table table-hover">
      <thead>
        <tr>
           <th>№</th>
           <th>Şəkil</th>
           <th>Ad</th>
           <th>Tarix</th>
           <th>Düzənlə</th>
           <th>Sil</th>
        </tr>
    </thead>


    <tbody>

<?php $blogsor=$db->prepare("SELECT * from blog order by blog_id desc ");
	  $blogsor->execute();
$number=0; // id sayici
while($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC)){
$number++; //id sayici ++  ?>	


   <tr>
            <td>
                <?php echo $number ?>
            </td>
            

            <td>
                <div class="row">
                    <img align="center" height="250" width="150" src="../../<?php echo $blogcek['blog_picurl'] ?>" class="img-responsive">
                 </div>   
            </td>  

            <td>                        
               <?php echo $blogcek['blog_name'] ?>
            </td> 

            <td>                        
               <?php echo$blogcek['blog_date']; ?>
            </td>
	        <td>

                <a href="blogchange.php?blog_id=<?php echo $blogcek['blog_id'];  ?>">
                <button type="button" class="btn btn-info btn-circle-lg waves-effect waves-circle waves-float">
                <i class="material-icons">border_color</i></button></a>
            </td>

            <td>
                <a href="../setting/engine.php?blogsil=ok&blogresimsil=<?php echo $blogcek['blog_picurl'] ?>&blog_id=<?php echo $blogcek['blog_id'] ?>" onclick="return confirm('<?php echo $blogcek['blog_name'] ?> adlı post silinsin?')">
                <button type="button" class="btn bg-red btn-circle-lg waves-effect waves-circle waves-float">
                <i class="material-icons">delete_sweep</i></button></a>
            </td>            
            
    </tr>
<?php } ?>

    </tbody>
    
</table>                      


</div>    
</div>
</div>
</div>
</div>
</div>
</div>









    </section>

































<?php   include 'footer.php'; ?>