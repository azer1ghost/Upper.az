                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="latest_post">
                        <h2><span>Son xəbərlər</span></h2>
                        <div class="latest_post_container">
                            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
                            <ul class="latest_postnav">

<?php $blogsor=$db->prepare("SELECT * from blog order by blog_id desc limit 5");
	  $blogsor->execute();
while($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC)){
?>	
                                <li>
                                    <div class="media">
                                        <a href="single.php?post=<?php echo $blogcek['blog_id']?>&<?php echo seo($blogcek['blog_name'])?>" class="media-left"> <img alt="" src="../<?php echo $blogcek['blog_picurl']?>"> </a>
                                        <div class="media-body"> <a href="single.php?post=<?php echo $blogcek['blog_id']?>&<?php echo seo($blogcek['blog_name'])?>" class="catg_title"><?php echo $blogcek['blog_name']?></a> </div>
                                    </div>
                                </li>
<?php } ?>                         
                            </ul>
                            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
                        </div>
                    </div>
                </div>