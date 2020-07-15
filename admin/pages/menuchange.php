<?php   include 'header.php';
        include 'sidebar.php'; 
    $menusor=$db->prepare("SELECT * from menu where id=:id");

    $menusor->execute(array('id' => $_GET['id'])); 

    $menucek=$menusor->fetch(PDO::FETCH_ASSOC);
        ?>



    <section class="content">
        <div class="container-fluid">
            <!-- Changelogs -->

   <div class="body">
<div class="clearfix m-b-20">

<form action="../setting/engine.php" method="POST" enctype="multipart/form-data">

      <input type="hidden" name="menu_id"  value="<?php echo $menucek['id']; ?>" >

<button type="sumbit" name="menuupdate" class="btn btn-block btn-lg btn-success waves-effect">Save</button><br>
                        <div class="body table-responsive">
                        
                            <table class="table table-hover">
                            
<!--###################################################-->    
                                <thead>
                                    <tr>
                                        <th>Ad</th>
                                        <th>Durum</th>
                                        <th>Parent</th>
                                        <th>Blank</th>
                                    </tr>
                                </thead>
<!--###################################################-->
                                <tbody>

	
      <tr>

       
        <td><input align="right" type="text"  placeholder="Menu adı daxil edin" value="<?php echo $menucek['menu_name'];?>" name="menu_name" class="form-control col-md-7 col-xs-12"></td>

            <td><div class="demo-radio-button">

<?php if ($menucek['menu_durum']==1) {?>
                                <input name="menu_durum" value="1" checked="" type="radio" id="radio_13" class="radio-col-light-blue">
                                <label for="radio_13">Aktiv</label>
                             <br>
                                <input name="menu_durum" type="radio" value="0" id="radio_7" class="radio-col-red" >
                                <label for="radio_7">Passiv</label>
<?php }  elseif ($menucek['menu_durum']==0) {?>
                                <input name="menu_durum" value="1"  type="radio" id="radio_13" class="radio-col-light-blue">
                                <label for="radio_13">Aktiv</label>
                             <br>
                                <input name="menu_durum" type="radio" checked="" value="0" id="radio_7" class="radio-col-red" >
                                <label for="radio_7">Passiv</label>
<?php }?>

                            </div>

                    </td>

 <td><?php if ($menucek['menu_mother']==1) {?>
            <input type="checkbox" id="md_checkbox_222" class="chk-col-green" value="1" name="menu_mother" checked>
            <?php }  elseif ($menucek['menu_mother']==0) {?>
            <input type="checkbox" id="md_checkbox_222" class="chk-col-green" value="1" name="menu_mother" >
<?php }?>
            <label for="md_checkbox_222"></label>
</td>


<td><?php if ($menucek['menu_blank']==1) {?>
            <input type="checkbox" id="md_checkbox_111" class="chk-col-green" value="1" name="menu_blank" checked>
            <?php }  elseif ($menucek['menu_blank']==0) {?>
            <input type="checkbox" id="md_checkbox_111" class="chk-col-green" value="1" name="menu_blank" >
<?php }?>
            <label for="md_checkbox_111"></label>
</td>



     </tr>


                                </tbody>
                                
<!--###################################################-->
                             </table>  
<input align="right" type="text"  placeholder="Menu adı daxil edin" value="<?php echo $menucek['menu_link'];?>" name="menu_link" class="form-control col-md-12 col-xs-12">            
                        </div>


</form>












    </section>

<?php   include 'footer.php'; ?>