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



<div class="header bg-cyan">
                            <h2>
                          <center>Başlıq və mətn</center>
                            </h2>
                        </div>
<br>
<form action="../setting/engine.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="uppercon1_id" value="<?php echo $upperconcek1['uppercon1_id']; ?>">
<input type="text" name="uppercon1_name" class="form-control" value="<?php echo $upperconcek1['uppercon1_name'] ?>" placeholder="Başlıq daxil edin">


    <textarea name="uppercon1_txt"><?php echo $upperconcek1['uppercon1_txt'] ?> </textarea>
        <script>
            CKEDITOR.replace( 'uppercon1_txt' );
        </script>


        <button type="submit" name="upperconheaderchange" class="btn btn-primary">Dəyişdir</button>
         </form>
     </div>
     
  
  
 



 
                           
                        </div>
                    </div>
                </div>
            </div>







    </section>

<?php   include 'footer.php'; ?>