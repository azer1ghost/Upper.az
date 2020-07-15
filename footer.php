

 <footer class="footer-distributed">


            <div class="footer-center">

<img src="assets/images/footerlogo.png" style="height: 75px; width: 150px">
<p style="color: white;font-size: 12.5px; padding-top: 70px">
                        © Copyright 2017 Upper Group - All Rights Reserved by <a href="http://www.azarmamadov.ml/" target="_blank"><em>Azar Mammadov</em></a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                
        
                    
            </div>

            <div class="footer-center">

                <div>
                    <a href="https://goo.gl/YtG5cu" target="_blank"><i class="fa fa-map-marker"></i>
                    <p><span>Istiglaliyyat 39, </span> İçəri şəhər mst.-yaxınlığında</p></a>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>+994 (012) 492 55 42 </p>
                </div>

                <div>
                    <i class="fa fa-mobile"></i>
                    <p>+994 (050) 290 71 96 </p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:office@upper.az">office@upper.az</a></p>
                </div>

            </div>

            <div class="footer-right">

                <p class="footer-company-about">
                    <span>Linklər</span>
                    <p class="mbr-text"><a href="https://www.upper.az/">upper.az</a><br>
                    <a href="https://www.upper.az/blog/" target="_blank">blog.upper.az</a><br>
                    <a href="https://www.studentclubaze.com/" target="_blank">studentclubaze.com</a></p>
                </p>

                <div class="footer-icons">
<?
$socialfooter=$db->prepare("select * from `social` where col_id=6");
$socialfooter->execute(array(1));
$socialcekfooter=$socialfooter->fetch(PDO::FETCH_ASSOC); ?>
                    <a target="_blank" href="<?php echo $socialcekfooter['col_facebook'] ?>"><i class="fa fa-facebook"></i></a>
                    <a target="_blank" href="<?php echo $socialcekfooter['col_instagram'] ?>"><i class="fa fa-instagram"></i></a>
                    <a target="_blank" href="<?php echo $socialcekfooter['col_google'] ?>"><i class="fa fa-google"></i></a>
                    <a target="_blank" href="<?php echo $socialcekfooter['col_youtube'] ?>"><i class="fa fa-youtube"></i></a>

                </div>

            </div>

        </footer>
    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/smooth-scroll/smooth-scroll.js"></script>
    <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
    <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
    <script src="assets/dropdown/js/script.min.js"></script>
    <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/jarallax/jarallax.js"></script>
    <script src="assets/theme/js/script.js"></script>
    <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
    <script src="assets/masonry/masonry.pkgd.min.js"></script>
    <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/mobirise-gallery/player.min.js"></script>
    <script src="assets/mobirise-gallery/script.js"></script>
<script src="assets/js/socialpages.js" type="text/javascript" ></script>
    <input name="animation" type="hidden">
</body>

</html>