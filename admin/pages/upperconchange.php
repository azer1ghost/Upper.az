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



<div class="header bg-cyan">
                            <h2>
                          <center>Başlıq və mətn</center>
                            </h2>
                        </div>
<br>
<form action="../setting/engine.php" method="POST" enctype="multipart/form-data">

	                         <input type="hidden" name="uppercon_id" value="<?php echo $upperconcek['uppercon_id']; ?>">
<input type="text" name="uppercon_name" class="form-control" value="<?php echo $upperconcek['uppercon_name'] ?>" placeholder="Başlıq daxil edin">


    <textarea name="uppercon_text"><?php echo $upperconcek['uppercon_text'] ?> </textarea>
        <script>
            CKEDITOR.replace( 'uppercon_text' );
        </script>


        <button type="submit" name="upperconchange" class="btn btn-primary">Dəyişdir</button>
         </form>
     </div>
     
  
  
 



 
                           
                        </div>
                    </div>
                </div>
            </div>









    </section>

<?php   include 'footer.php'; ?>