<?php   include 'header.php';
        include 'sidebar.php';
$list = getFullListFromDB($db); ?>

<section class="content">
        <div class="container-fluid">
            
            <!-- Draggable Handles -->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 ">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Menu Locations
                                <small style="color: green">AutoSave</small>
                            </h2>
                        </div>
                        <div class="body">
                            <div class="clearfix m-b-20">


<div class="cf nestable-lists">
    <div class="dd" id="nestable">
<?php displayList($list); ?>
    </div>               
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Draggable Handles -->
        </div>



            <div class="row clearfix">
                <div class="col-lg-7 col-md-6 ">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Menu Düzənləmələri
                            </h2>
                        </div>
                        <div class="body">
                            <div class="clearfix m-b-20">


<a href="menuadd.php"><button type="button" class="btn btn-block btn-lg btn-success waves-effect">Yeni menu əlavə et</button></a><br>
                        <div class="body table-responsive">
                        
                            <table class="table table-hover">
                            
<!--###################################################-->    
                                <thead>
                                    <tr>
                                        <th>№</th>
                                        <th>update</th>
                                        <th>Sil</th>
                                        <th>Ad</th>
                                        <th>Durum</th>
                                        <th>Parent</th>
                                    </tr>
                                </thead>
<!--###################################################-->
                                <tbody>
<?php $menusor=$db->prepare("select * from menu order by menu_sira ASC ");
	  $menusor->execute();
$number=0;
$benzersiz_id=9999; // id sayici
while($menucek=$menusor->fetch(PDO::FETCH_ASSOC)){
$number++;
$benzersiz_id++;
 //id sayici ++  ?>	
      <tr>
        <td><?php echo $number;?></td>
        <td><a href="menuchange.php?id=<?php echo $menucek['id'];  ?>"><button type="button"  class="btn btn-info btn-circle waves-effect waves-circle waves-float">
                                    <i class="material-icons">update</i>
                                </button></a></td>
        <td><a href="../setting/engine.php?menusil=ok&id=<?php echo $menucek['id'] ?>" onclick="return confirm('<?php echo $menucek['menu_name'];?> silinsinmi?')"><button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float">
                                    <i class="material-icons">delete_sweep</i>
                                </button></a></td>
        <td><?php echo $menucek['menu_name'];?></td>

        <td><?php       if ($menucek['menu_durum']==1) {?>
            <i class="fa fa-eye" aria-hidden="true"> Aktiv</i>
            <?php } elseif ($menucek['menu_durum']==0) {?>
            <i class="fa fa-eye-slash" aria-hidden="true"> Passiv</i>
                                                 <?php }?>
        </td>

        <td><?php if ($menucek['menu_mother']==1) {?>
            <input type="checkbox" id="md_checkbox_<?php echo $benzersiz_id?>" class="chk-col-green" value="1" name="menu_mother" disabled checked>
            <?php }  elseif ($menucek['menu_mother']==0) {?>
            <input type="checkbox" id="md_checkbox_<?php echo $benzersiz_id?>" class="chk-col-green" value="1" name="menu_mother" disabled>
<?php }?>
            <label for="md_checkbox_<?php echo $benzersiz_id?>"></label>
        </td>
     </tr>
<?php } ?></form>
                                </tbody>
<!--###################################################-->
                             </table>              
                        </div>










        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="assets/plugins/node-waves/waves.js"></script>

    <!-- Jquery Nestable -->
    <script src="assets/plugins/nestable/jquery.nestable.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>

    <script>
$(document).ready(function () {
    var updateOutput = function (e) {
        var list = e.length ? e : $(e.target), output = list.data('output');

        $.ajax({
            method: "POST",
            url: "../setting/saveList.php",
            data: {
                list: list.nestable('serialize')
            }
        }).fail(function(jqXHR, textStatus, errorThrown){
            alert("Unable to save new list order: " + errorThrown);
        });
    };

    $('#nestable').nestable({
        group: 1,
        maxDepth: 7,
    }).on('change', updateOutput);
});
</script>

    <!-- Demo Js -->
    <script src="assets/js/demo.js"></script>
</body>



<?php   include 'footer.php'; ?>

<?php
function getFullListFromDB($db, $parent_id = 0) {
    $sql = "
        SELECT id, parent_id, menu_name
        FROM menu 
        WHERE parent_id = :parent_id
        ORDER BY menu_sira
    ";

    $statement = $db->prepare($sql);
    $statement->bindValue(':parent_id', $parent_id, PDO::PARAM_INT);
    $statement->execute();

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach($result as &$value) {
        $subresult = getFullListFromDB($db, $value["id"]);

        if (count($subresult) > 0) {
            $value['children'] = $subresult;
        }
    }
    unset($value);

    return $result;
}

function displayList($list) {
?>
    <ol class="dd-list">
    <?php foreach($list as $item): ?>
    <li class="dd-item" data-id="<?php echo $item["id"]; ?>"><div class="dd-handle"><?php echo $item["menu_name"]; ?>
    </div>
    <?php if (array_key_exists("children", $item)): ?>
    <?php displayList($item["children"]); ?>
    <?php endif; ?>
    </li>
    <?php endforeach; ?>
    </ol>
<?php
}
?>