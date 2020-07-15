<?php   include 'header.php';
        include 'sidebar.php'; ?>



    <section class="content">
        <div class="container-fluid">
            <!-- Changelogs -->
 

<!-- ####################### xaricde tehsil basliq bolmesi ###################-->
<!-- #######################################################################-->
                    <div class="card">
                        <div class="header">
                            <h2> Xaricdə təhsil başlıq  </h2>
                            
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                 
                                </thead>
                                <tbody>

<!--###################################################-->
<tr>
      
       
<form action="../setting/engine.php" method="POST" enctype="multipart/form-data">

 <input type="hidden" name="xaric_id" value="<?php echo $xtcek['xaric_id']; ?>">
 <input type="hidden" name="xaric_bg" value="<?php echo $xtcek['xaric_bg']; ?>" >
 <div class="row">

<table class="table table-hover">
<thead>
        <tr>
           <th>Şəkil</th>
           <th>File</th>
        </tr>
</thead>
<tbody>
 <tr>

<td>         
     <div>         
          <img  height="250" width="150" src="../../<?php echo $xtcek['xaric_bg'] ?>" class="img-responsive">
     </div>  
</td>

<td>
                             <label for="file-upload" class="custom-file-upload">
                              <center><i class="material-icons">cloud_upload</i><br> Şəkil seç </center></label>
                             <input id="file-upload"  name="xaric_bg"  type="file"/></td>
</td>

 </tr>
</tbody>
</table>


                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="xaric_name"  value="<?php echo $xtcek['xaric_name'] ?>" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="xaric_text"  value="<?php echo $xtcek['xaric_text'] ?>" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <button name="xtheaderchange" type="sumbit" class="btn btn-block btn-lg btn-info waves-effect">Yadda saxla</button>
                                        </div>
                                    </div>
                                    
                                </div>
 
             
 </tr>
<!--###################################################-->                          
              </tbody>
         </table>              
     </div>
  </div>


<!--###################################################--> 

























 
    </section>

<?php   include 'footer.php'; ?>