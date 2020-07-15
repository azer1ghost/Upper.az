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
                                Saytın Əsas parametrləri
                            </h2>
                            
                        </div>
                        <div class="body">

                            <form action="../setting/engine.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="ayar_id" value="<?php echo $ayarcek['ayar_id']; ?> " >

                                <label for="">Saytın adı</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="ayar_sitename" class="form-control" value="<?php echo $ayarcek['ayar_sitename'] ?>" placeholder="Saytın adını yazın">
                                    </div>
                                </div>

                                <label for="">Title</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="ayar_title" class="form-control" value="<?php echo $ayarcek['ayar_title'] ?>" placeholder="Sayt üçün title yazın">
                                    </div>
                                </div>

                                <label for="">Description</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="ayar_description" class="form-control" value="<?php echo $ayarcek['ayar_description'] ?>" placeholder="Google-da göstəriləcək sayt haqqında məlumat ">
                                    </div>
                                </div>

                                <label for="">Keywords</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="ayar_keywords" class="form-control" value="<?php echo $ayarcek['ayar_keywords'] ?>" placeholder="Sayt üçün açar sözlər yazın">
                                    </div>
                                </div>
                   


                                <label for="">Author</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="ayar_author" class="form-control" value="<?php echo $ayarcek['ayar_author'] ?>" placeholder="Sayt üçün müəllif yazın">
                                    </div>
                                </div>


                              

                                <br>
                                <button type="submit" name="ayarupdate" class="btn btn-block btn-lg btn-success waves-effect">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->














    </section>

<?php   include 'footer.php'; ?>