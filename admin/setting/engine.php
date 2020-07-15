<!--######################################### SAYTIN MOTORU ########################################-->

<?php 
ob_start();
session_start();
    ob_clean();
    ob_end_clean();				//Sesia basladildi *
include 'connect.php';  //baglanti temin edildi *
$sitename="http://localhost/upper.az";

########################## admin login ######################
//---------------------------------------------------------------------//


if (isset($_POST['loggin'])) {  


$admin_login=$_POST['admin_name'];
$admin_password=md5($_POST['admin_password']);


		if ($admin_login && $admin_password ) {

		$sorgu=$db->prepare("SELECT * from admin WHERE admin_login=:name and  admin_password=:password");

		$sorgu->execute(array(
			'name'=>$admin_login,
			'password'=>$admin_password
		));

		$say=$sorgu->rowCount();

		if ($say>0) {
		
		$_SESSION['admin_login'] = $admin_login;


$site= "$sitename/admin/pages/login.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else {

$site= "$sitename/admin/pages/login.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }
		
}
}





//---------------------------------------------------------------------//



########################## ayar update ######################
//---------------------------------------------------------------------//
if (isset($_POST['ayarupdate'])) {          #duyme adi

$ayarsave=$db->prepare("UPDATE `ayarlar 1` SET  #tablo adi

ayar_sitename=:a, 							#sutun adi--> leqebi
ayar_title=:b,
ayar_description=:c,
ayar_keywords=:d,
ayar_author=:e



WHERE ayar_id={$_POST['ayar_id']}");
$update=$ayarsave->execute(array(

'a'=>$_POST['ayar_sitename'],     			#sutun leqebi --> adi
'b'=>$_POST['ayar_title'],
'c'=>$_POST['ayar_description'],
'd'=>$_POST['ayar_keywords'],
'e'=>$_POST['ayar_author']

));

if($update) {  #islem basarili olduqda gedeceyi yer

$site= "$sitename/admin/pages/parametr.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/parametr.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;
}
}
//---------------------------------------------------------------------//




########################## logo change ######################
//---------------------------------------------------------------------//

if (isset($_POST['logoupdate'])) {          #duyme adi

		
		if($_FILES['ayar_logourl']["size"] > 0) {

		$uploads_dir = '../../assets/images';                      #sekil yeri
		@$tmp_name = $_FILES['ayar_logourl']["tmp_name"];
		@$name = $_FILES['ayar_logourl']["name"];
		$xvalue1=rand(20000,32000);
		$xvalue2=rand(20000,32000);
		$xad=$xvalue1.$xvalue2;
		$ayar_logourl=substr($uploads_dir, 6)."/".$xad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$xad$name");

$logosave=$db->prepare("UPDATE `ayarlar 1` SET  #tablo adi

ayar_logourl=:a



WHERE ayar_id={$_POST['ayar_id']}");
$update=$logosave->execute(array(

'a'=>$ayar_logourl

));

$ayar_id=$_POST['ayar_id'];

if($update) { 	

$site= "$sitename/admin/pages/anaseh.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/anaseh.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;
}
}
}





#######################################################################
########################## Slider add Parametr  ######################
//---------------------------------------------------------------------//
if (isset($_POST['slideradd'])) {   			#duyme adi


		$uploads_dir = '../../assets/images';                      #sekil yeri
		@$tmp_name = $_FILES['slider_picurl']["tmp_name"];
		@$name = $_FILES['slider_picurl']["name"];
		$xvalue3=rand(20000,32000);
		$xvalue4=rand(20000,32000);
		$xad=$xvalue3.$xvalue4;
		$slider_picurl=substr($uploads_dir, 6)."/".$xad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$xad$name");


$save=$db->prepare("INSERT INTO slider SET   	#tablo adi     							
     #sutun adi--> leqebi
	slider_durum=:a,
	slider_sira=:b, 
	slider_picurl=:h");
$insert=$save->execute(array( 					
 #sutun leqebi --> adi
	'a'=>$_POST['slider_durum'],
	'b'=>$_POST['slider_sira'],
	'h'=> $slider_picurl
	 ));

if($insert) {

$site= "$sitename/admin/pages/anaseh.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/anaseh.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

}
#########################################################################
//---------------------------------------------------------------------//



########################## slider change ######################
//---------------------------------------------------------------------//

if (isset($_POST['sliderchange'])) {          #duyme adi

		if($_FILES['slider_picurl']["size"] > 0) {

		$uploads_dir = '../../assets/images';                      #sekil yeri
		@$tmp_name = $_FILES['slider_picurl']["tmp_name"];
		@$name = $_FILES['slider_picurl']["name"];
		$xvalue3=rand(20000,32000);
		$xvalue4=rand(20000,32000);
		$xad=$xvalue3.$xvalue4;
		$slider_picurl=substr($uploads_dir, 6)."/".$xad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$xad$name");

$slidersave=$db->prepare("UPDATE slider SET  #tablo adi

 #sutun adi--> leqebi
	slider_durum=:a,
	slider_sira=:b, 
	slider_picurl=:h


WHERE slider_id={$_POST['slider_id']}");
$update=$slidersave->execute(array(

 #sutun leqebi --> adi
	'a'=>$_POST['slider_durum'],
	'b'=>$_POST['slider_sira'],
	'h'=> $slider_picurl

));

$slider_id=$_POST['slider_id'];

if($update) { 	

  
		 	$resim_sil=$_POST['slider_picurl'];
		 	unlink("../../$resim_sil");

$site= "$sitename/admin/pages/anaseh.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/anaseh.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }





} else {

$slidersave=$db->prepare("UPDATE slider SET  #tablo adi

 #sutun adi--> leqebi
	slider_durum=:a,
	slider_sira=:b 

WHERE slider_id={$_POST['slider_id']}");
$update=$slidersave->execute(array(

 #sutun leqebi --> adi
	'a'=>$_POST['slider_durum'],
	'b'=>$_POST['slider_sira']

));


if($update) { 	

$site= "$sitename/admin/pages/anaseh.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/anaseh.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

}
}
//---------------------------------------------------------------------//





#######################################################################
########################## slider silme Parametr  ######################
//---------------------------------------------------------------------//

if ($_GET['slidersil']=="ok"){	            #sil duymesinden gelen ad
 
		$sil=$db->prepare("DELETE from slider where slider_id=:slider_id"); #ne silinecek

		$kontrol=$sil->execute(array('slider_id' => $_GET['slider_id']));	#ne silinecek hardan

	if($kontrol) 

		 { 
		 	$resim_sil=$_POST['sliderresimsil'];
		 	unlink("../../$resim_sil");

$site= "$sitename/admin/pages/anaseh.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/anaseh.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

							}

#########################################################################
//---------------------------------------------------------------------//






########################## Upper consulting change ######################
//---------------------------------------------------------------------//

if (isset($_POST['upperconchange'])) {          #duyme adi

		

$upperconsave=$db->prepare("UPDATE uppercon SET  #tablo adi

 #sutun adi--> leqebi
	uppercon_name=:a,
	uppercon_text=:b 

WHERE uppercon_id={$_POST['uppercon_id']}");
$update=$upperconsave->execute(array(

 #sutun leqebi --> adi
	'a'=>$_POST['uppercon_name'],
	'b'=>$_POST['uppercon_text']

));


if($update) { 	

$site= "$sitename/admin/pages/uppercon.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/uppercon.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

}

//---------------------------------------------------------------------//







########################## Upper consulting header change ######################
//---------------------------------------------------------------------//

if (isset($_POST['upperconheaderchange'])) {          #duyme adi

		

$upperconsave=$db->prepare("UPDATE upperconheader SET  #tablo adi

 #sutun adi--> leqebi
	uppercon1_name=:a,
	uppercon1_txt=:b 

WHERE uppercon1_id={$_POST['uppercon1_id']}");
$update=$upperconsave->execute(array(

 #sutun leqebi --> adi
	'a'=>$_POST['uppercon1_name'],
	'b'=>$_POST['uppercon1_txt']

));


if($update) { 	

$site= "$sitename/admin/pages/uppercon.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/uppercon.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

}

//---------------------------------------------------------------------//








            
########################## upperconbg change ######################
//---------------------------------------------------------------------//

if (isset($_POST['upperconbgchange'])) {          #duyme adi

		
		if($_FILES['uppercon_bg']["size"] > 0) {

		$uploads_dir = '../../assets/images';                      #sekil yeri
		@$tmp_name = $_FILES['uppercon_bg']["tmp_name"];
		@$name = $_FILES['uppercon_bg']["name"];
		$xvalue1=rand(20000,32000);
		$xvalue2=rand(20000,32000);
		$xad=$xvalue1.$xvalue2;
		$bgpic=substr($uploads_dir, 6)."/".$xad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$xad$name");

$logosave=$db->prepare("UPDATE `uppercon` SET  #tablo adi

uppercon_bg=:a

WHERE uppercon_id={$_POST['uppercon_id']}");
$update=$logosave->execute(array(

'a'=>$bgpic

));

$uppercon_id=$_POST['uppercon_id'];

if($update) { 	

		$del=$_POST['uppercon_bg'];
		unlink("../../$del");
		
$site= "$sitename/admin/pages/uppercon.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/uppercon.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

} 
}
#######################################################################







########################## uppercon pic change ######################
//---------------------------------------------------------------------//

if (isset($_POST['upperconsbchange'])) {          #duyme adi

		
		if($_FILES['upperpicurl']["size"] > 0) {

		$uploads_dir = '../../assets/images';                      #sekil yeri
		@$tmp_name = $_FILES['upperpicurl']["tmp_name"];
		@$name = $_FILES['upperpicurl']["name"];
		$xvalue1=rand(20000,32000);
		$xvalue2=rand(20000,32000);
		$xad=$xvalue1.$xvalue2;
		$bgpic=substr($uploads_dir, 6)."/".$xad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$xad$name");

$logosave=$db->prepare("UPDATE `uppercon` SET  #tablo adi

upperpicurl=:a

WHERE uppercon_id={$_POST['uppercon_id']}");
$update=$logosave->execute(array(

'a'=>$bgpic

));

$uppercon_id=$_POST['uppercon_id'];

if($update) { 	

		$del=$_POST['upperpicurl'];
		unlink("../../$del");
		
$site= "$sitename/admin/pages/uppercon.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/uppercon.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

} 
}
#######################################################################







########################## uppercon header pic change ######################
//---------------------------------------------------------------------//

if (isset($_POST['upperconheaderpicchange'])) {          #duyme adi

		
		if($_FILES['uppercon1_picurl']["size"] > 0) {

		$uploads_dir = '../../assets/images';                      #sekil yeri
		@$tmp_name = $_FILES['uppercon1_picurl']["tmp_name"];
		@$name = $_FILES['uppercon1_picurl']["name"];
		$xvalue1=rand(20000,32000);
		$xvalue2=rand(20000,32000);
		$xad=$xvalue1.$xvalue2;
		$bgpic=substr($uploads_dir, 6)."/".$xad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$xad$name");

$logosave=$db->prepare("UPDATE `upperconheader` SET  #tablo adi

uppercon1_picurl=:a

WHERE uppercon1_id={$_POST['uppercon1_id']}");
$update=$logosave->execute(array(

'a'=>$bgpic

));

$uppercon1_id=$_POST['uppercon1_id'];

if($update) { 	

		$del=$_POST['uppercon1_picurl'];
		unlink("../../$del");
		
$site= "$sitename/admin/pages/uppercon.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/uppercon.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

} 
}
######################################################################



########################## uppercon header bg change ######################
//---------------------------------------------------------------------//

if (isset($_POST['upperconheaderbgchange'])) {          #duyme adi

		
		if($_FILES['uppercon1_bg']["size"] > 0) {

		$uploads_dir = '../../assets/images';                      #sekil yeri
		@$tmp_name = $_FILES['uppercon1_bg']["tmp_name"];
		@$name = $_FILES['uppercon1_bg']["name"];
		$xvalue1=rand(20000,32000);
		$xvalue2=rand(20000,32000);
		$xad=$xvalue1.$xvalue2;
		$bgpic=substr($uploads_dir, 6)."/".$xad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$xad$name");

$logosave=$db->prepare("UPDATE `upperconheader` SET  #tablo adi

uppercon1_bg=:a

WHERE uppercon1_id={$_POST['uppercon1_id']}");
$update=$logosave->execute(array(

'a'=>$bgpic

));

$uppercon1_id=$_POST['uppercon1_id'];

if($update) { 	

		$del=$_POST['uppercon1_bg'];
		unlink("../../$del");
		
$site= "$sitename/admin/pages/uppercon.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/uppercon.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

} 
}
######################################################################




########################## modul change ######################
//---------------------------------------------------------------------//

if (isset($_POST['modulchange'])) {          #duyme adi

		if($_FILES['modul_picurl']["size"] > 0) {

		$uploads_dir = '../../assets/images';                      #sekil yeri
		@$tmp_name = $_FILES['modul_picurl']["tmp_name"];
		@$name = $_FILES['modul_picurl']["name"];
		$xvalue3=rand(20000,32000);
		$xvalue4=rand(20000,32000);
		$xad=$xvalue3.$xvalue4;
		$modul_picurl=substr($uploads_dir, 6)."/".$xad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$xad$name");

$modulsave=$db->prepare("UPDATE modul SET  #tablo adi

 #sutun adi--> leqebi
	modul_durum=:a,
	modul_sira=:b,
	modul_name=:c,
	modul_text=:d,
	modul_btntext=:e,
	modul_url=:f, 
	modul_picurl=:h


WHERE modul_id={$_POST['modul_id']}");
$update=$modulsave->execute(array(

 #sutun leqebi --> adi
	'a'=>$_POST['modul_durum'],
	'b'=>$_POST['modul_sira'],
	'c'=>$_POST['modul_name'],
	'd'=>$_POST['modul_text'],
	'e'=>$_POST['modul_btntext'],
	'f'=>$_POST['modul_url'],
	'h'=> $modul_picurl

));

$modul_id=$_POST['modul_id'];

if($update) { 	

  
		 	$resim_sil=$_POST['modul_picurl'];
		 	unlink("../../$resim_sil");

$site= "$sitename/admin/pages/anaseh.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/anaseh.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }


/////////////////////////////////////////////////////////////////////////////////////////////////////////////


} else {

$modulsave=$db->prepare("UPDATE modul SET  #tablo adi

 #sutun adi--> leqebi
	modul_durum=:a,
	modul_sira=:b,
	modul_name=:c,
	modul_text=:d,
	modul_btntext=:e,
	modul_url=:f 

WHERE modul_id={$_POST['modul_id']}");
$update=$modulsave->execute(array(

 #sutun leqebi --> adi
	'a'=>$_POST['modul_durum'],
	'b'=>$_POST['modul_sira'],
	'c'=>$_POST['modul_name'],
	'd'=>$_POST['modul_text'],
	'e'=>$_POST['modul_btntext'],
	'f'=>$_POST['modul_url']

));


if($update) { 	

$site= "$sitename/admin/pages/anaseh.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/anaseh.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }


}
}
//---------------------------------------------------------------------//





########################## Xaricde tehsil header change ######################
//---------------------------------------------------------------------//

if (isset($_POST['xtheaderchange'])) {          #duyme adi

		if($_FILES['xaric_bg']["size"] > 0) {

		$uploads_dir = '../../assets/images';                      #sekil yeri
		@$tmp_name = $_FILES['xaric_bg']["tmp_name"];
		@$name = $_FILES['xaric_bg']["name"];
		$xvalue3=rand(20000,32000);
		$xvalue4=rand(20000,32000);
		$xad=$xvalue3.$xvalue4;
		$xaric_bg=substr($uploads_dir, 6)."/".$xad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$xad$name");

$xrsave=$db->prepare("UPDATE xaricbas SET  #tablo adi

 #sutun adi--> leqebi
	xaric_name=:a,
	xaric_text=:b, 
	xaric_bg=:h


WHERE xaric_id={$_POST['xaric_id']}");
$update=$xrsave->execute(array(

 #sutun leqebi --> adi
	'a'=>$_POST['xaric_name'],
	'b'=>$_POST['xaric_text'],
	'h'=> $xaric_bg

));

$xaric_id=$_POST['xaric_id'];

if($update) { 	

  
		 	$resim_sil=$_POST['xaric_bg'];
		 	unlink("../../$resim_sil");

$site= "$sitename/admin/pages/anaseh.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/anaseh.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }





} else {

$xrsave=$db->prepare("UPDATE xaricbas SET  #tablo adi

 #sutun adi--> leqebi
	xaric_name=:a,
	xaric_text=:b 

WHERE xaric_id={$_POST['xaric_id']}");
$update=$xrsave->execute(array(

 #sutun leqebi --> adi
	'a'=>$_POST['xaric_name'],
	'b'=>$_POST['xaric_text']

));


if($update) { 	

$site= "$sitename/admin/pages/anaseh.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/anaseh.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

}
}
//---------------------------------------------------------------------//




########################## turkey change ######################
//---------------------------------------------------------------------//

if (isset($_POST['turkeychange'])) {          #duyme adi

		if($_FILES['turkey_picurl']["size"] > 0) {

		$uploads_dir = '../../assets/images';                      #sekil yeri
		@$tmp_name = $_FILES['turkey_picurl']["tmp_name"];
		@$name = $_FILES['turkey_picurl']["name"];
		$xvalue3=rand(20000,32000);
		$xvalue4=rand(20000,32000);
		$xad=$xvalue3.$xvalue4;
		$turkey_picurl=substr($uploads_dir, 6)."/".$xad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$xad$name");

$turkeysave=$db->prepare("UPDATE turkey SET  #tablo adi

 #sutun adi--> leqebi
	turkey_name=:a,
	turkey_link=:b,
	turkey_picurl=:h


WHERE turkey_id={$_POST['turkey_id']}");
$update=$turkeysave->execute(array(

 #sutun leqebi --> adi
	'a'=>$_POST['turkey_name'],
	'b'=>$_POST['turkey_link'],
	'h'=> $turkey_picurl

));

$turkey_id=$_POST['turkey_id'];

if($update) { 	

  
		 	$resim_sil=$_POST['turkey_picurl'];
		 	unlink("../../$resim_sil");

$site= "$sitename/admin/pages/turkey.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/turkey.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }


/////////////////////////////////////////////////////////////////////////////////////////////////////////////


} else {

$turkeysave=$db->prepare("UPDATE turkey SET  #tablo adi

 #sutun adi--> leqebi
	turkey_name=:a,
	turkey_link=:b

WHERE turkey_id={$_POST['turkey_id']}");
$update=$turkeysave->execute(array(

 #sutun leqebi --> adi
	'a'=>$_POST['turkey_name'],
	'b'=>$_POST['turkey_link']

));


if($update) { 	

$site= "$sitename/admin/pages/turkey.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/turkey.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

}
}
//---------------------------------------------------------------------//





#######################################################################
########################## turkey add Parametr  ######################
//---------------------------------------------------------------------//
if (isset($_POST['turkeyadd'])) {   			#duyme adi


		$uploads_dir = '../../assets/images';                      #sekil yeri
		@$tmp_name = $_FILES['turkey_picurl']["tmp_name"];
		@$name = $_FILES['turkey_picurl']["name"];
		$xvalue3=rand(20000,32000);
		$xvalue4=rand(20000,32000);
		$xad=$xvalue3.$xvalue4;
		$turkey_picurl=substr($uploads_dir, 6)."/".$xad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$xad$name");


$save=$db->prepare("INSERT INTO turkey SET   	#tablo adi     							
     #sutun adi--> leqebi
	turkey_name=:a,
	turkey_link=:b,
	turkey_picurl=:h");
$insert=$save->execute(array( 					
 #sutun leqebi --> adi
	'a'=>$_POST['turkey_name'],
	'b'=>$_POST['turkey_link'],
	'h'=> $turkey_picurl
	 ));

if($insert) {

$site= "$sitename/admin/pages/turkey.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/turkey.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

}
#########################################################################
//---------------------------------------------------------------------//



#######################################################################
########################## slider silme Parametr  ######################
//---------------------------------------------------------------------//

if ($_GET['turkeysil']=="ok"){	            #sil duymesinden gelen ad
 
		$sil=$db->prepare("DELETE from turkey where turkey_id=:turkey_id"); #ne silinecek

		$kontrol=$sil->execute(array('turkey_id' => $_GET['turkey_id']));	#ne silinecek hardan

	if($kontrol) 

		 { 
		 	$resim_sil=$_GET['turkeyresimsil'];
		 	unlink("../../$resim_sil");

$site= "$sitename/admin/pages/turkey.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/turkey.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

							}

#########################################################################
//---------------------------------------------------------------------//









#######################################################################
########################## menuadd Parametr  ######################
//---------------------------------------------------------------------//
if (isset($_POST['menuadd'])) {   			#duyme adi

if ($_POST['menu_mother']) {$result=1 ;}
else {$result=0 ;}

if ($_POST['menu_blank']) {$resultblank=1 ;}
else {$resultblank=0 ;}		

$save=$db->prepare("INSERT INTO menu SET   	#tablo adi     							
 #sutun adi--> leqebi
	menu_name=:a,
	menu_link=:b,
	menu_mother=:d,
	menu_blank=:h,
	menu_durum=:c ");
$insert=$save->execute(array( 					
 #sutun leqebi --> adi
	'a'=>$_POST['menu_name'],
	'b'=>$_POST['menu_link'],
	'd'=>$result,
	'h'=>$resultblank,
	'c'=>$_POST['menu_durum']
	 ));

if($insert) {

$site= "$sitename/admin/pages/menujson.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/menujson.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

							}
#########################################################################
//---------------------------------------------------------------------//












########################## menu update ######################
//---------------------------------------------------------------------//

if (isset($_POST['menuupdate'])) {          #duyme adi

if ($_POST['menu_mother']) {$result=1 ;}
else {$result=0 ;}

if ($_POST['menu_blank']) {$resultblank=1 ;}
else {$resultblank=0 ;}		

$menusave=$db->prepare("UPDATE menu SET  #tablo adi



 #sutun adi--> leqebi
	menu_name=:a,
	menu_link=:b,
	menu_mother=:d,
	menu_blank=:h,
	menu_durum=:c 

WHERE id={$_POST['menu_id']}");
$update=$menusave->execute(array(

 #sutun leqebi --> adi
	'a'=>$_POST['menu_name'],
	'b'=>$_POST['menu_link'],
	'd'=>$result,
	'h'=>$resultblank,
	'c'=>$_POST['menu_durum']

));


if($update) { 	

$site= "$sitename/admin/pages/menujson.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/menujson.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

							}

//---------------------------------------------------------------------//















#######################################################################
########################## menu delete ######################
//---------------------------------------------------------------------//

if ($_GET['menusil']=="ok"){	            #sil duymesinden gelen ad
 
		$sil=$db->prepare("DELETE from menu where id=:id"); #ne silinecek

		$kontrol=$sil->execute(array('id' => $_GET['id']));	#ne silinecek hardan

	if($kontrol) {

$site= "$sitename/admin/pages/menujson.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/menujson.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

							}








#######################################################################
########################## Slider add Parametr  ######################
//---------------------------------------------------------------------//
if (isset($_POST['externaladd'])) {   			#duyme adi


		$uploads_dir = '../../assets/images';                      #sekil yeri
		@$tmp_name = $_FILES['external_bannerpicurl']["tmp_name"];
		@$name = $_FILES['external_bannerpicurl']["name"];
		$xvalue3=rand(20000,32000);
		$xvalue4=rand(20000,32000);
		$xad=$xvalue3.$xvalue4;
		$external_bannerpicurl=substr($uploads_dir, 6)."/".$xad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$xad$name");


$save=$db->prepare("INSERT INTO external SET   	#tablo adi     							
     #sutun adi--> leqebi
	external_name=:a,
	external_text=:b,
	external_btnlink=:c, 
	external_picurl1=:d, 
	external_picurl2=:e,  
	external_bannerpicurl=:h");
$insert=$save->execute(array( 					
 #sutun leqebi --> adi
	'a'=>$_POST['external_name'],
	'b'=>$_POST['external_text'],
	'c'=>$_POST['external_btnlink'],
	'd'=>$_POST['external_picurl1'],
	'e'=>$_POST['external_picurl2'],
	'h'=> $external_bannerpicurl
	 ));

if($insert) {

$site= "$sitename/admin/pages/xaricdetehsil.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/xaricdetehsil.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

}
#########################################################################
//---------------------------------------------------------------------//



########################## slider change ######################
//---------------------------------------------------------------------//

if (isset($_POST['externalchange'])) {          #duyme adi

		if($_FILES['external_bannerpicurl']["size"] > 0) {

		$uploads_dir = '../../assets/images';                      #sekil yeri
		@$tmp_name = $_FILES['external_bannerpicurl']["tmp_name"];
		@$name = $_FILES['external_bannerpicurl']["name"];
		$xvalue3=rand(20000,32000);
		$xvalue4=rand(20000,32000);
		$xad=$xvalue3.$xvalue4;
		$external_bannerpicurl=substr($uploads_dir, 6)."/".$xad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$xad$name");

$save=$db->prepare("UPDATE external SET  #tablo adi

     #sutun adi--> leqebi
	external_name=:a,
	external_text=:b,
	external_btnlink=:c, 
	external_picurl1=:d, 
	external_picurl2=:e,  
	external_bannerpicurl=:h


WHERE external_id={$_POST['external_id']}");
$update=$save->execute(array(

 #sutun leqebi --> adi
	'a'=>$_POST['external_name'],
	'b'=>$_POST['external_text'],
	'c'=>$_POST['external_btnlink'],
	'd'=>$_POST['external_picurl1'],
	'e'=>$_POST['external_picurl2'],
	'h'=> $external_bannerpicurl
	 ));

$external_id=$_POST['external_id'];

if($update) { 	

  
		 	$resim_sil=$_POST['external_bannerpicurl'];
		 	unlink("../../$resim_sil");

$site= "$sitename/admin/pages/xaricdetehsil.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/xaricdetehsil.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }





} else {

$save=$db->prepare("UPDATE external SET  #tablo adi

     #sutun adi--> leqebi
	external_name=:a,
	external_text=:b,
	external_btnlink=:c, 
	external_picurl1=:d, 
	external_picurl2=:e 

WHERE external_id={$_POST['external_id']}");
$update=$save->execute(array(

 #sutun leqebi --> adi
	'a'=>$_POST['external_name'],
	'b'=>$_POST['external_text'],
	'c'=>$_POST['external_btnlink'],
	'd'=>$_POST['external_picurl1'],
	'e'=>$_POST['external_picurl2']

));


if($update) { 	

$site= "$sitename/admin/pages/xaricdetehsil.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/xaricdetehsil.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

}
}
//---------------------------------------------------------------------//







########################## mod change ######################
//---------------------------------------------------------------------//

if (isset($_POST['modchange'])) {          #duyme adi

		if($_FILES['mod_picurl']["size"] > 0) {

		$uploads_dir = '../../assets/images';                      #sekil yeri
		@$tmp_name = $_FILES['mod_picurl']["tmp_name"];
		@$name = $_FILES['mod_picurl']["name"];
		$xvalue3=rand(20000,32000);
		$xvalue4=rand(20000,32000);
		$xad=$xvalue3.$xvalue4;
		$mod_picurl=substr($uploads_dir, 6)."/".$xad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$xad$name");

$modsave=$db->prepare("UPDATE xaric SET  #tablo adi

 #sutun adi--> leqebi

	mod_name=:c,
	mod_text=:d,
	mod_btntext=:e,
	mod_btnurl=:f, 
	mod_picurl=:h


WHERE mod_id={$_POST['mod_id']}");
$update=$modsave->execute(array(

 #sutun leqebi --> adi

	'c'=>$_POST['mod_name'],
	'd'=>$_POST['mod_text'],
	'e'=>$_POST['mod_btntext'],
	'f'=>$_POST['mod_btnurl'],
	'h'=> $mod_picurl

));

$mod_id=$_POST['mod_id'];

if($update) { 	

  
		 	$resim_sil=$_POST['mod_picurl'];
		 	unlink("../../$resim_sil");

$site= "$sitename/admin/pages/anaseh.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/anaseh.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }


/////////////////////////////////////////////////////////////////////////////////////////////////////////////


} else {

$modsave=$db->prepare("UPDATE xaric SET  #tablo adi

 #sutun adi--> leqebi

	mod_name=:c,
	mod_text=:d,
	mod_btntext=:e,
	mod_btnurl=:f 

WHERE mod_id={$_POST['mod_id']}");
$update=$modsave->execute(array(

 #sutun leqebi --> adi

	'c'=>$_POST['mod_name'],
	'd'=>$_POST['mod_text'],
	'e'=>$_POST['mod_btntext'],
	'f'=>$_POST['mod_btnurl']

));


if($update) { 	

$site= "$sitename/admin/pages/anaseh.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/anaseh.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }


}
}






#######################################################################
########################## Blog add Parametr  ######################
//---------------------------------------------------------------------//
if (isset($_POST['blogadd'])) {
	   			#duyme adi
if ($_POST['blog_gundem']) {$result=1 ;}
else {$result=0 ;}

		$uploads_dir = '../../blog/images/blog';                      #sekil yeri
		@$tmp_name = $_FILES['blog_picurl']["tmp_name"];
		@$name = $_FILES['blog_picurl']["name"];
		$xvalue3=rand(20000,32000);
		$xvalue4=rand(20000,32000);
		$xad=$xvalue3.$xvalue4;
		$blog_picurl=substr($uploads_dir, 6)."/".$xad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$xad$name");


$save=$db->prepare("INSERT INTO blog SET   	#tablo adi     							
     #sutun adi--> leqebi
	blog_name=:a,
	blog_text=:b,
	blog_keywords=:z,
	blog_date=:c,
	blog_author=:d,
	blog_durum=:e,
	blog_gundem=:y,
	blog_option=:p,
	blog_picurl=:h");
$insert=$save->execute(array( 					
 #sutun leqebi --> adi
	'a'=>$_POST['blog_name'],
	'b'=>$_POST['blog_text'],
	'z'=>$_POST['blog_keywords'],
	'c'=>$_POST['blog_date'],
	'd'=>$_POST['blog_author'],
	'e'=>$_POST['blog_durum'],
	'p'=>$_POST['blog_option'],
	'y'=>$result,
	'h'=> $blog_picurl
	 ));

if($insert) { 	

$site= "$sitename/admin/pages/blog.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/blog.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

}

#########################################################################
//---------------------------------------------------------------------//








########################## blog change ######################
//---------------------------------------------------------------------//

if (isset($_POST['blogchange'])) {          #duyme adi

if ($_POST['blog_gundem']) {$result=1 ;}
else {$result=0 ;}

		if($_FILES['blog_picurl']["size"] > 0) {

		$uploads_dir = '../../blog/images/blog';                      #sekil yeri
		@$tmp_name = $_FILES['blog_picurl']["tmp_name"];
		@$name = $_FILES['blog_picurl']["name"];
		$xvalue3=rand(20000,32000);
		$xvalue4=rand(20000,32000);
		$xad=$xvalue3.$xvalue4;
		$blog_picurl=substr($uploads_dir, 6)."/".$xad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$xad$name");


$blogsave=$db->prepare("UPDATE blog SET  #tablo adi

     #sutun adi--> leqebi
	blog_name=:a,
	blog_text=:b,
	blog_keywords=:z,
	blog_date=:c,
	blog_author=:d,
	blog_durum=:e,
	blog_gundem=:y,
	blog_option=:p, 
	blog_picurl=:h

WHERE blog_id={$_POST['blog_id']}");
$update=$blogsave->execute(array(

 #sutun leqebi --> adi
	'a'=>$_POST['blog_name'],
	'b'=>$_POST['blog_text'],
	'z'=>$_POST['blog_keywords'],
	'c'=>$_POST['blog_date'],
	'd'=>$_POST['blog_author'],
	'e'=>$_POST['blog_durum'],
	'p'=>$_POST['blog_option'],
	'y'=>$result,
	'h'=> $blog_picurl
	 ));

$blog_id=$_POST['blog_id'];

if($update) { 	

  
		 	$resim_sil=$_POST['blog_picurl'];
		 	unlink("../../$resim_sil");


	header("Location:../pages/blog.php?durum=ok");			#islem basarili olduqda gedeceyi yer

} else { header("Location:../pages/blog.php?durum=no"); }






} else {

$blogsave=$db->prepare("UPDATE blog SET  #tablo adi

 #sutun adi--> leqebi
	blog_name=:a,
	blog_text=:b,
	blog_keywords=:z,
	blog_date=:c,
	blog_author=:d,
	blog_gundem=:y,
	blog_option=:p,
	blog_durum=:e

WHERE blog_id={$_POST['blog_id']}");
$update=$blogsave->execute(array(

 #sutun leqebi --> adi
	'a'=>$_POST['blog_name'],
	'b'=>$_POST['blog_text'],
	'z'=>$_POST['blog_keywords'],
	'c'=>$_POST['blog_date'],
	'd'=>$_POST['blog_author'],
	'p'=>$_POST['blog_option'],
	'y'=>$result,
	'e'=>$_POST['blog_durum']

));


if($update) { 	

$site= "$sitename/admin/pages/blog.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/blog.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

}
}
//---------------------------------------------------------------------//





#######################################################################
########################## blog silme Parametr  ######################
//---------------------------------------------------------------------//

if ($_GET['blogsil']=="ok"){	            #sil duymesinden gelen ad
 
		$sil=$db->prepare("DELETE from blog where blog_id=:blog_id"); #ne silinecek

		$kontrol=$sil->execute(array('blog_id' => $_GET['blog_id']));	#ne silinecek hardan

	if($kontrol) 

		 { 
		 	$resim_sil=$_GET['blogresimsil'];
		 	unlink("../../$resim_sil"); 


	$site= "$sitename/admin/pages/blog.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;			#islem basarili olduqda gedeceyi yer

} else { $site= "$sitename/admin/pages/blog.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;  }

							}

#########################################################################
//---------------------------------------------------------------------/










#######################################################################
########################## upperedu add Parametr  ######################
//---------------------------------------------------------------------//
if (isset($_POST['uppereduadd'])) {   			#duyme adi


		$uploads_dir = '../../assets/images';                      #sekil yeri
		@$tmp_name = $_FILES['col_picurl']["tmp_name"];
		@$name = $_FILES['col_picurl']["name"];
		$xvalue3=rand(20000,32000);
		$xvalue4=rand(20000,32000);
		$xad=$xvalue3.$xvalue4;
		$col_picurl=substr($uploads_dir, 6)."/".$xad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$xad$name");


$save=$db->prepare("INSERT INTO upperedu SET   	#tablo adi     							
     #sutun adi--> leqebi
	col_name=:a,
	col_text=:b,
	col_btntext=:c,
	col_btnlink=:d, 
	col_picurl=:e");
$insert=$save->execute(array( 					
 #sutun leqebi --> adi
	'a'=>$_POST['col_name'],
	'b'=>$_POST['col_text'],
	'c'=>$_POST['col_btntext'],
	'd'=>$_POST['col_btnlink'],
	'e'=> $col_picurl
	 ));

if($insert) {

$site= "$sitename/admin/pages/upperedu.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/upperedu.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

}
#########################################################################
//---------------------------------------------------------------------//



########################## upperedu change ######################
//---------------------------------------------------------------------//

if (isset($_POST['uppereduchange'])) {          #duyme adi

		if($_FILES['col_picurl']["size"] > 0) {

		$uploads_dir = '../../assets/images';                      #sekil yeri
		@$tmp_name = $_FILES['col_picurl']["tmp_name"];
		@$name = $_FILES['col_picurl']["name"];
		$xvalue3=rand(20000,32000);
		$xvalue4=rand(20000,32000);
		$xad=$xvalue3.$xvalue4;
		$col_picurl=substr($uploads_dir, 6)."/".$xad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$xad$name");

$slidersave=$db->prepare("UPDATE upperedu SET  #tablo adi

 #sutun adi--> leqebi
	col_name=:a,
	col_text=:b,
	col_btntext=:c,
	col_btnlink=:d, 
	col_picurl=:e


WHERE col_id={$_POST['col_id']}");
$update=$slidersave->execute(array(

 #sutun leqebi --> adi
	'a'=>$_POST['col_name'],
	'b'=>$_POST['col_text'],
	'c'=>$_POST['col_btntext'],
	'd'=>$_POST['col_btnlink'],
	'e'=> $col_picurl

));

$col_id=$_POST['col_id'];

if($update) { 	

  
		 	$resim_sil=$_POST['col_picurl'];
		 	unlink("../../$resim_sil");

$site= "$sitename/admin/pages/upperedu.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/upperedu.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }





} else {

$slidersave=$db->prepare("UPDATE upperedu SET  #tablo adi

 #sutun adi--> leqebi
	col_name=:a,
	col_text=:b,
	col_btntext=:c,
	col_btnlink=:d

WHERE col_id={$_POST['col_id']}");
$update=$slidersave->execute(array(

 #sutun leqebi --> adi
	'a'=>$_POST['col_name'],
	'b'=>$_POST['col_text'],
	'c'=>$_POST['col_btntext'],
	'd'=>$_POST['col_btnlink']

));


if($update) { 	

$site= "$sitename/admin/pages/upperedu.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/upperedu.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

}
}
//---------------------------------------------------------------------//





#######################################################################
########################## upperedu silme Parametr  ######################
//---------------------------------------------------------------------//

if ($_GET['upperedusil']=="ok"){	            #sil duymesinden gelen ad
 
		$sil=$db->prepare("DELETE from upperedu where col_id=:col_id"); #ne silinecek

		$kontrol=$sil->execute(array('col_id' => $_GET['col_id']));	#ne silinecek hardan

	if($kontrol) 

		 { 
		 	$resim_sil=$_GET['resimsil'];
		 	unlink("../../$resim_sil"); 


	$site= "$sitename/admin/pages/upperedu.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;			#islem basarili olduqda gedeceyi yer

} else { $site= "$sitename/admin/pages/upperedu.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;  }

							}

#########################################################################
//---------------------------------------------------------------------/




########################## dovlethaz change ######################
//---------------------------------------------------------------------//

if (isset($_POST['dovlethazchange'])) {          #duyme adi

$slidersave=$db->prepare("UPDATE dovlethaz SET  #tablo adi

 #sutun adi--> leqebi
	col_name=:a,
	col_text=:b,
	col_btntext=:c,
	col_btnlink=:d,
	col_picurl=:e


WHERE col_id={$_POST['col_id']}");
$update=$slidersave->execute(array(

 #sutun leqebi --> adi
	'a'=>$_POST['col_name'],
	'b'=>$_POST['col_text'],
	'c'=>$_POST['col_btntext'],
	'd'=>$_POST['col_btnlink'],
	'e'=>$_POST['col_picurl']


));


if($update) { 	

$site= "$sitename/admin/pages/dovlethaz.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/dovlethaz.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

}

//---------------------------------------------------------------------//





########################## ieltsmod change ######################
//---------------------------------------------------------------------//

if (isset($_POST['ieltsmodchange'])) {          #duyme adi

		if($_FILES['col_picurl']["size"] > 0) {

		$uploads_dir = '../../assets/images';                      #sekil yeri
		@$tmp_name = $_FILES['col_picurl']["tmp_name"];
		@$name = $_FILES['col_picurl']["name"];
		$xvalue3=rand(20000,32000);
		$xvalue4=rand(20000,32000);
		$xad=$xvalue3.$xvalue4;
		$col_picurl=substr($uploads_dir, 6)."/".$xad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$xad$name");

$slidersave=$db->prepare("UPDATE ieltsmod SET  #tablo adi

 #sutun adi--> leqebi
	col_name=:a,
	col_text=:b,
	col_btntext=:c,
	col_btnlink=:d, 
	col_picurl=:e


WHERE col_id={$_POST['col_id']}");
$update=$slidersave->execute(array(

 #sutun leqebi --> adi
	'a'=>$_POST['col_name'],
	'b'=>$_POST['col_text'],
	'c'=>$_POST['col_btntext'],
	'd'=>$_POST['col_btnlink'],
	'e'=> $col_picurl

));

$col_id=$_POST['col_id'];

if($update) { 	

  
		 	$resim_sil=$_POST['col_picurl'];
		 	unlink("../../$resim_sil");

$site= "$sitename/admin/pages/ielts.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/ielts.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }





} else {

$slidersave=$db->prepare("UPDATE ieltsmod SET  #tablo adi

 #sutun adi--> leqebi
	col_name=:a,
	col_text=:b,
	col_btntext=:c,
	col_btnlink=:d

WHERE col_id={$_POST['col_id']}");
$update=$slidersave->execute(array(

 #sutun leqebi --> adi
	'a'=>$_POST['col_name'],
	'b'=>$_POST['col_text'],
	'c'=>$_POST['col_btntext'],
	'd'=>$_POST['col_btnlink']

));


if($update) { 	

$site= "$sitename/admin/pages/ielts.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/ielts.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

}
}
//---------------------------------------------------------------------//


#######################################################################
########################## ieltsmod silme Parametr  ######################
//---------------------------------------------------------------------//

if ($_GET['ieltsmodsil']=="ok"){	            #sil duymesinden gelen ad
 
		$sil=$db->prepare("DELETE from ieltsmod where col_id=:col_id"); #ne silinecek

		$kontrol=$sil->execute(array('col_id' => $_GET['col_id']));	#ne silinecek hardan

	if($kontrol) 

		 { 
		 	$resim_sil=$_GET['resimsil'];
		 	unlink("../../$resim_sil"); 


	$site= "$sitename/admin/pages/ielts.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;			#islem basarili olduqda gedeceyi yer

} else { $site= "$sitename/admin/pages/ielts.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;  }

							}

#########################################################################
//---------------------------------------------------------------------/




#######################################################################
########################## ieltsmod add Parametr  ######################
//---------------------------------------------------------------------//
if (isset($_POST['ieltsmodadd'])) {   			#duyme adi


		$uploads_dir = '../../assets/images';                      #sekil yeri
		@$tmp_name = $_FILES['col_picurl']["tmp_name"];
		@$name = $_FILES['col_picurl']["name"];
		$xvalue3=rand(20000,32000);
		$xvalue4=rand(20000,32000);
		$xad=$xvalue3.$xvalue4;
		$col_picurl=substr($uploads_dir, 6)."/".$xad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$xad$name");


$save=$db->prepare("INSERT INTO ieltsmod SET   	#tablo adi     							
     #sutun adi--> leqebi
	col_name=:a,
	col_text=:b,
	col_btntext=:c,
	col_btnlink=:d, 
	col_picurl=:e");
$insert=$save->execute(array( 					
 #sutun leqebi --> adi
	'a'=>$_POST['col_name'],
	'b'=>$_POST['col_text'],
	'c'=>$_POST['col_btntext'],
	'd'=>$_POST['col_btnlink'],
	'e'=> $col_picurl
	 ));

if($insert) {

$site= "$sitename/admin/pages/ielts.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/ielts.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

}
#########################################################################
//---------------------------------------------------------------------//





#######################################################################
########################## external page silme Parametr  ######################
//---------------------------------------------------------------------//

if ($_GET['extsil']=="ok"){	            #sil duymesinden gelen ad
 
		$sil=$db->prepare("DELETE from external where external_id=:external_id"); #ne silinecek

		$kontrol=$sil->execute(array('external_id' => $_GET['external_id']));	#ne silinecek hardan

	if($kontrol) 

		 { 
		 	$resim_sil=$_GET['resimsil'];
		 	unlink("../../$resim_sil"); 


	$site= "$sitename/admin/pages/xaricdetehsil.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;			#islem basarili olduqda gedeceyi yer

} else { $site= "$sitename/admin/pages/xaricdetehsil.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;  }

							}

#########################################################################
//---------------------------------------------------------------------/





########################## social change ####################
//---------------------------------------------------------------------//

if (isset($_POST['socialupdate'])) {          #duyme adi

$save=$db->prepare("UPDATE social SET  #tablo adi

 #sutun adi--> leqebi
	col_facebook=:a,
	col_instagram=:b,
	col_google=:c,
	col_youtube=:d


WHERE col_id={$_POST['col_id']}");
$update=$save->execute(array(

 #sutun leqebi --> adi
	'a'=>$_POST['col_facebook'],
	'b'=>$_POST['col_instagram'],
	'c'=>$_POST['col_google'],
	'd'=>$_POST['col_youtube']


));


if($update) { 	

$site= "$sitename/admin/pages/social.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/social.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

}

//---------------------------------------------------------------------//




########################## turkeyphp change ######################
//---------------------------------------------------------------------//

if (isset($_POST['turkeychangephp'])) {          #duyme adi

		if($_FILES['col_picurl']["size"] > 0) {

		$uploads_dir = '../../assets/images';                      #sekil yeri
		@$tmp_name = $_FILES['col_picurl']["tmp_name"];
		@$name = $_FILES['col_picurl']["name"];
		$xvalue3=rand(20000,32000);
		$xvalue4=rand(20000,32000);
		$xad=$xvalue3.$xvalue4;
		$col_picurl=substr($uploads_dir, 6)."/".$xad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$xad$name");

$slidersave=$db->prepare("UPDATE turkeyphp SET  #tablo adi

 #sutun adi--> leqebi
	col_name=:a,
	col_text=:b,
	col_btntext=:c,
	col_btnlink=:d,
	col_uni=:f, 
	col_picurl=:e


WHERE col_id={$_POST['col_id']}");
$update=$slidersave->execute(array(

 #sutun leqebi --> adi
	'a'=>$_POST['col_name'],
	'b'=>$_POST['col_text'],
	'c'=>$_POST['col_btntext'],
	'd'=>$_POST['col_btnlink'],
	'f'=>$_POST['col_uni'],
	'e'=> $col_picurl

));

$col_id=$_POST['col_id'];

if($update) { 	

  
		 	$resim_sil=$_POST['col_picurl'];
		 	unlink("../../$resim_sil");

$site= "$sitename/admin/pages/turkey.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/turkey.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }





} else {

$slidersave=$db->prepare("UPDATE turkeyphp SET  #tablo adi

 #sutun adi--> leqebi
	col_name=:a,
	col_text=:b,
	col_btntext=:c,
	col_uni=:f,
	col_btnlink=:d

WHERE col_id={$_POST['col_id']}");
$update=$slidersave->execute(array(

 #sutun leqebi --> adi
	'a'=>$_POST['col_name'],
	'b'=>$_POST['col_text'],
	'c'=>$_POST['col_btntext'],
	'f'=>$_POST['col_uni'],
	'd'=>$_POST['col_btnlink']


));


if($update) { 	

$site= "$sitename/admin/pages/turkey.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/turkey.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

}
}
//---------------------------------------------------------------------//


#######################################################################
########################## HR Slider add Parametr  ######################
//---------------------------------------------------------------------//
if (isset($_POST['hrslideradd'])) {   			#duyme adi


		$uploads_dir = '../../assets/images';                      #sekil yeri
		@$tmp_name = $_FILES['slider_picurl']["tmp_name"];
		@$name = $_FILES['slider_picurl']["name"];
		$xvalue3=rand(20000,32000);
		$xvalue4=rand(20000,32000);
		$xad=$xvalue3.$xvalue4;
		$slider_picurl=substr($uploads_dir, 6)."/".$xad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$xad$name");


$save=$db->prepare("INSERT INTO hrslider SET   	#tablo adi     							
     #sutun adi--> leqebi
	slider_durum=:a,
	slider_sira=:b, 
	slider_picurl=:h");
$insert=$save->execute(array( 					
 #sutun leqebi --> adi
	'a'=>$_POST['slider_durum'],
	'b'=>$_POST['slider_sira'],
	'h'=> $slider_picurl
	 ));

if($insert) {

$site= "$sitename/admin/pages/hrclubaz.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/hrclubaz.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

}
#########################################################################
//---------------------------------------------------------------------//



##########################  HR slider change ######################
//---------------------------------------------------------------------//

if (isset($_POST['hrsliderchange'])) {          #duyme adi

		if($_FILES['slider_picurl']["size"] > 0) {

		$uploads_dir = '../../assets/images';                      #sekil yeri
		@$tmp_name = $_FILES['slider_picurl']["tmp_name"];
		@$name = $_FILES['slider_picurl']["name"];
		$xvalue3=rand(20000,32000);
		$xvalue4=rand(20000,32000);
		$xad=$xvalue3.$xvalue4;
		$slider_picurl=substr($uploads_dir, 6)."/".$xad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$xad$name");

$slidersave=$db->prepare("UPDATE hrslider SET  #tablo adi

 #sutun adi--> leqebi
	slider_durum=:a,
	slider_sira=:b, 
	slider_picurl=:h


WHERE slider_id={$_POST['slider_id']}");
$update=$slidersave->execute(array(

 #sutun leqebi --> adi
	'a'=>$_POST['slider_durum'],
	'b'=>$_POST['slider_sira'],
	'h'=> $slider_picurl

));

$slider_id=$_POST['slider_id'];

if($update) { 	

  
		 	$resim_sil=$_POST['slider_picurl'];
		 	unlink("../../$resim_sil");

$site= "$sitename/admin/pages/hrclubaz.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/hrclubaz.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }





} else {

$slidersave=$db->prepare("UPDATE hrslider SET  #tablo adi

 #sutun adi--> leqebi
	slider_durum=:a,
	slider_sira=:b 

WHERE slider_id={$_POST['slider_id']}");
$update=$slidersave->execute(array(

 #sutun leqebi --> adi
	'a'=>$_POST['slider_durum'],
	'b'=>$_POST['slider_sira']

));


if($update) { 	

$site= "$sitename/admin/pages/hrclubaz.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/hrclubaz.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

}
}
//---------------------------------------------------------------------//





#######################################################################
########################## HR slider silme Parametr  ######################
//---------------------------------------------------------------------//

if ($_GET['hrslidersil']=="ok"){	            #sil duymesinden gelen ad
 
		$sil=$db->prepare("DELETE from hrslider where slider_id=:slider_id"); #ne silinecek

		$kontrol=$sil->execute(array('slider_id' => $_GET['slider_id']));	#ne silinecek hardan

	if($kontrol) 

		 { 
		 	$resim_sil=$_POST['sliderresimsil'];
		 	unlink("../../$resim_sil");

$site= "$sitename/admin/pages/hrclubaz.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/hrclubaz.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

							}

#########################################################################
//---------------------------------------------------------------------//





##########################  HR club aze change ######################
//---------------------------------------------------------------------//

if (isset($_POST['hrazchange'])) {          #duyme adi

		if($_FILES['hr_bg']["size"] > 0) {

		$uploads_dir = '../../assets/images';                      #sekil yeri
		@$tmp_name = $_FILES['hr_bg']["tmp_name"];
		@$name = $_FILES['hr_bg']["name"];
		$xvalue3=rand(20000,32000);
		$xvalue4=rand(20000,32000);
		$xad=$xvalue3.$xvalue4;
		$hr_bg=substr($uploads_dir, 6)."/".$xad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$xad$name");

$slidersave=$db->prepare("UPDATE hrclubaz SET  #tablo adi

 #sutun adi--> leqebi
	hr_title=:a,
	hr_subtitle=:b, 
	hr_bg=:h


WHERE hr_id={$_POST['hr_id']}");
$update=$slidersave->execute(array(

 #sutun leqebi --> adi
	'a'=>$_POST['hr_title'],
	'b'=>$_POST['hr_subtitle'],
	'h'=> $hr_bg

));

$hr_id=$_POST['hr_id'];

if($update) { 	

  
		 	$resim_sil=$_POST['hr_bg'];
		 	unlink("../../$resim_sil");

$site= "$sitename/admin/pages/hrclubaz.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/hrclubaz.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }





} else {

$slidersave=$db->prepare("UPDATE hrclubaz SET  #tablo adi

 #sutun adi--> leqebi
	hr_title=:a,
	hr_subtitle=:b 

WHERE hr_id={$_POST['hr_id']}");
$update=$slidersave->execute(array(

 #sutun leqebi --> adi
	'a'=>$_POST['hr_title'],
	'b'=>$_POST['hr_subtitle']

));


if($update) { 	

$site= "$sitename/admin/pages/hrclubaz.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/hrclubaz.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

}
}
//---------------------------------------------------------------------//





##########################  galery delete  ######################
//---------------------------------------------------------------------//

if ($_GET['galsil']=="ok"){	            #sil duymesinden gelen ad
 
	
		 	$resim_sil=$_GET['deletegalery'];
			unlink("../../$resim_sil"); 
			 
			 exit;
			 

			
$site= "$sitename/admin/pages/galery.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else { 

$site= "$sitename/admin/pages/galery.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

							

//---------------------------------------------------------------------//



















?>