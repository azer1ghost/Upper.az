<?php 
include 'header.php';
 include 'sidebar.php';
    $social=$db->prepare("SELECT * from social where col_id=:col_id");

    $social->execute(array('col_id' => $_GET['col_id'])); 

    $socialcek=$social->fetch(PDO::FETCH_ASSOC); ?>

<section class="content">
    <div class="container-fluid">
        <!-- Changelogs -->





        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">



                    <div class="header bg-cyan">
                        <h2>
                          <center><?php echo $socialcek['col_name'] ?> düzənlə</center>
                            </h2>
                    </div>
                    <br>
                  
                        

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Ad</th>
                                    <th>Link</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--###################################################-->

<form action="../setting/engine.php" method="POST" enctype="multipart/form-data">


<input type="hidden" name="col_id" value="<?php echo $socialcek['col_id'] ?>">
         <tr>
            <td class="col-md-1">
                <h2 style="margin: auto;" ><i class="fa fa-facebook" aria-hidden="true"></i></h2>
            </td>

            <td>
                 <input type="text" name="col_facebook" class="form-control" value="<?php echo $socialcek['col_facebook'] ?>" placeholder="Link daxil edin">
            </td>
         </tr>

        <tr>
            <td class="col-md-1">
                <h2 style="margin: auto;" ><i class="fa fa-instagram" aria-hidden="true"></i></h2>
            </td>

            <td>
                 <input type="text" name="col_instagram" class="form-control" value="<?php echo $socialcek['col_instagram'] ?>" placeholder="Link daxil edin">
            </td>
         </tr>

        <tr>
            <td class="col-md-1">
                <h2 style="margin: auto;" ><i class="fa fa-youtube" aria-hidden="true"></i></h2>
            </td>

            <td>
                 <input type="text" name="col_youtube" class="form-control" value="<?php echo $socialcek['col_youtube'] ?>" placeholder="Link daxil edin">
            </td>
         </tr>

        <tr>
            <td class="col-md-1">
                <h2 style="margin: auto;" ><i class="fa fa-google" aria-hidden="true"></i></h2>
            </td>

            <td>
                 <input type="text" name="col_google" class="form-control" value="<?php echo $socialcek['col_google'] ?>" placeholder="Link daxil edin">
            </td>
         </tr>

                               
                                <!--###################################################-->

                            </tbody>
                        </table>
 <hr>
<button style="margin: 10px" type="submit" name="socialupdate" class="btn btn-primary">Yadda saxla</button>
</form>


                       
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</section>

<?php include 'footer.php'; ?>