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
                                col
                            </h2> 
<div style=" padding-top: 20px;"><a href="ieltsadd.php"><button type="button" class="btn btn-block btn-lg btn-info waves-effect"><i class="material-icons">add_circle</i><h5> Yeni post əlavə et</h5></button></a></div>



                        </div>

<div class="body table-responsive">
  <table class="table table-hover">
      <thead>
        <tr>
           <th>№</th>
           <th>Şəkil</th>
           <th>Ad</th>
           <th>Düzənlə</th>
           <th>Sil</th>
        </tr>
    </thead>


    <tbody>
<?php $ieltsmodsor=$db->prepare("select * from ieltsmod order by col_id ASC");
    $ieltsmodsor->execute();
    $number=0; // id sayici
while($colcek=$ieltsmodsor->fetch(PDO::FETCH_ASSOC)){
$number++; //id sayici ++   ?>  

         <tr>
            <td>
                <?php echo $number ?>
            </td>
            
            <td>
                <div class="row">
                    <img align="center" height="250" width="150" src="../../<?php echo $colcek['col_picurl'] ?>" class="img-responsive">
                 </div>   
            </td>  

            <td>                        
               <?php echo $colcek['col_name'] ?>
            </td> 
	        
            <td>
                <a href="ieltschange.php?col_id=<?php echo $colcek['col_id'];  ?>">
                <button type="button" class="btn btn-info btn-circle-lg waves-effect waves-circle waves-float">
                <i class="material-icons">border_color</i></button></a>
            </td>


<?php if($colcek['col_id']!=1){ ?>
            <td>
                <a href="../setting/engine.php?ieltsmodsil=ok&resimsil=<?php echo $colcek['col_picurl'] ?>&col_id=<?php echo $colcek['col_id'] ?>" onclick="return confirm('<?php echo $colcek['col_name'] ?> adlı post silinsin?')">
                <button type="button" class="btn bg-red btn-circle-lg waves-effect waves-circle waves-float">
                <i class="material-icons">delete_sweep</i></button></a>
            </td>


        </tr>
<?php } }?>

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