

<?php

$sitename="http://localhost/upper.az";

 $resim_sil=$_GET['delete'];
		$del=unlink("$resim_sil"); 
exit;
		if($del) {  #islem basarili olduqda gedeceyi yer

$site= "$sitename/admin/pages/galery.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/galery.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;
}