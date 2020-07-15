        <!-- #Top sideBar -->
    <section>
<?php $actual_link = $_SERVER['PHP_SELF'];?>




        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="assets/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $admincek['admin_name'] ?> <?php echo $admincek['admin_surname'] ?></div>
                    <div class="email"><?php echo $_SESSION['admin_login'] ?> / <?php echo $admincek['admin_mission'] ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="adminchange.php?admin_id=<?php echo $admincek['admin_id'] ?>"><i class="material-icons">person</i>Profil</a></li>
                            <li role="seperator" class="divider"></li>
                           <!-- <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>-->
                            
                            <li><a href="logout.php"><i class="material-icons">input</i>Çıxış</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">Baş Parametrlər</li>
                     <li class="<?php $href="index.php"; if ( substr($actual_link, 13)==$href  ) echo "active"; ?>">
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
 
                      <li class="<?php $href="parametr.php"; if ( substr($actual_link, 13)==$href  ) echo "active"; ?>">
                        <a href="parametr.php">
                            <i class="material-icons">text_fields</i>
                            <span>Sayt parametrləri</span>
                        </a>
                    </li>

                     <li class="<?php $href="pages.php"; if ( substr($actual_link, 13)==$href  ) echo "active"; ?>">
                        <a href="pages.php">
                            <i class="material-icons">widgets</i>
                            <span>Səhifələr</span>
                        </a>
                    </li>

             


                    <li class="<?php $href="menujson.php"; if ( substr($actual_link, 13)==$href  ) echo "active"; ?>">
                        <a href="menujson.php">
                            <i class="material-icons">menu</i>
                            <span>Menu</span>
                        </a>
                    </li>

                  
                   
                     <li class="<?php $href="#"; if ( substr($actual_link, 13)==$href  ) echo "active"; ?>">
                        <a href="#">
                            <i class="material-icons">update</i>
                            <span>Updates</span>
                        </a>
                    </li>
                    
                    <li class="header">Yenilənmiş özəlliklər</li>
                        <li class="active">
                    </li>


                    <li class="<?php $href="xaricdetehsil.php"; if ( substr($actual_link, 13)==$href  ) echo "active"; ?>">
                        <a href="xaricdetehsil.php">
                            <i class="material-icons">g_translate</i>
                            <span>Xaricdə təhsil</span>
                        </a>
                    </li>

                    <li class="<?php $href="blog.php"; if ( substr($actual_link, 13)==$href  ) echo "active"; ?>">
                        <a href="blog.php">
                            <i class="material-icons">chrome_reader_mode</i>
                            <span>Blog</span>
                        </a>
                    </li>

                    <li class="<?php $href="galery.php"; if ( substr($actual_link, 13)==$href  ) echo "active"; ?>">
                        <a href="galery.php">
                            <i class="material-icons">wallpaper</i>
                            <span>Galery</span>
                        </a>
                    </li>


                    <li class="<?php $href="social.php"; if ( substr($actual_link, 13)==$href  ) echo "active"; ?>">
                        <a href="social.php">
                            <i class="material-icons">plus_one</i>
                            <span>Sosial şəbəkələr</span>
                        </a>
                    </li>
                   
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                  <a href="http://www.azarmamadov.ml/">Ultradmin - Desinged By Azer Mamedov</a>.
                </div>
                <div class="version">
                      &copy; 2017  <b>Version: </b> 2.0.0 
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->

        <!-- #END# Right Sidebar -->
    </section>