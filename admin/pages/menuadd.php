<?php   include 'header.php';
        include 'sidebar.php'; 
        ?>



    <section class="content">
        <div class="container-fluid">
            <!-- Changelogs -->

   <div class="body">
<div class="clearfix m-b-20">

<form action="../setting/engine.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="name_id" >

<button type="sumbit" name="menuadd" class="btn btn-block btn-lg btn-success waves-effect">Save</button><br>
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

       
        <td><input align="right" type="text"  placeholder="Menu adı daxil edin" name="menu_name" class="form-control col-md-7 col-xs-12"></td>

       <td>
<div class="demo-radio-button">


                                <input name="menu_durum" value="1" checked="" type="radio" id="radio_13" class="radio-col-light-blue">
                                <label for="radio_13">Aktiv</label>
                             <br>
                                <input name="menu_durum" type="radio" value="0" id="radio_7" class="radio-col-red" >
                                <label for="radio_7">Passiv</label>
<div>
        </td>

 <td>
<input type="checkbox" id="md_checkbox_222" class="chk-col-green" value="1" name="menu_mother" >
<label for="md_checkbox_222"></label>
</td>

 <td>
<input type="checkbox" id="md_checkbox_111" class="chk-col-green" value="1" name="menu_blank" >
<label for="md_checkbox_111"></label>
</td>
     </tr>

                                </tbody>
<!--###################################################-->
                             </table>   
<input align="right" type="text"  placeholder="Menu linki daxil edin" name="menu_link" class="form-control col-md-7 col-xs-12"></td>
</form>           
                        </div>

    















    </section>

<?php   include 'footer.php'; ?>