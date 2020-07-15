<?php   include 'header.php';
        include 'sidebar.php';
 ?>


    <section class="content">
        <div class="container-fluid">
            <!-- Changelogs -->
 




<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Sosial şəbəkə linkləri
                            </h2> 
                        </div>

<div class="body table-responsive">
  <table class="table table-hover">
      <thead>
        <tr>
           <th>№</th>
           <th>Ad</th>
           <th>Düzənlə</th>
        </tr>
    </thead>


    <tbody>

<?php $socialsor=$db->prepare("select * from social order by col_id ASC");
      $socialsor->execute();
$number=0; // id sayici
while($socialcek=$socialsor->fetch(PDO::FETCH_ASSOC)){
$number++; //id sayici ++  ?>   


         <tr>
            <td> <? echo $number ?> </td>
            <td><h4> <? echo $socialcek['col_name'] ?></h4></td> 
            <td>
                <a href="socialchange.php?col_id=<? echo $socialcek['col_id']?>">
                <button type="button" class="btn btn-info btn-circle-lg waves-effect waves-circle waves-float">
                <i class="material-icons">border_color</i></button></a>
            </td>
        </tr>

<?php }?>

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