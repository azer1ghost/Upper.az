<?php   include 'header.php';
        include 'sidebar.php'; ?>



    <section class="content">
        <div class="container-fluid">
            <!-- Changelogs -->
 

 <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                ADMIN HESABI PARAMETRLƏRİ
                            </h2>
                            
                        </div>
                        <div class="body">

                            <form action="../setting/engine.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="admin_id" value="<?php echo $admincek['admin_id'] ?> " >

                            <div class="col-md-6">
                                <label for="">Ad</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="admin_name" class="form-control" value="<?php echo $admincek['admin_name'] ?>" placeholder="Saytın adını yazın">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="">Soyad</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="admin_surname" class="form-control" value="<?php echo $admincek['admin_surname'] ?>" placeholder="Sayt üçün title yazın">
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <label for="">E-mail</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="email" name="admin_email" class="form-control" value="<?php echo $admincek['admin_email'] ?>" placeholder="E-mail yazın">
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-6">
                                <label for="">Şəhər</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="admin_city" class="form-control" value="<?php echo $admincek['admin_city'] ?>" placeholder="Şəhər adı yazın">
                                    </div>
                                </div>
                            </div>

                   
                            <div class="col-md-6">
                                <label for="">Ölkə</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="admin_country" class="form-control" value="<?php echo $admincek['admin_country'] ?>" placeholder="Sayt üçün müəllif yazın">
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <label for="">İstifadəçi adı</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input disabled="" type="text" name="admin_login" class="form-control" value="<?php echo $admincek['admin_login'] ?>" >
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-6">
                                <label for="">Rütbə</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" disabled=""  class="form-control" value="<?php echo $admincek['admin_mission'] ?>" >
                                    </div>
                                </div>
                            </div>



                                <br>
                                <button type="submit" name="adminupdate" class="btn btn-block btn-lg btn-success waves-effect">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->














    </section>

<?php   include 'footer.php'; ?>