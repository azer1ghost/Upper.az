<?php 


/*
$_POST["dosya"];

$_FILES["dosya"][""];

tmp_name 
name 
size 
type
is_uploaded_file
move_uploaded_file
*/

$maxboyut = 500000;
$dosyauzantisi = substr($_FILES["dosya"]["name"],-4,4);
$dosyaadi = rand(0,99999).$dosyauzantisi;
$dosyayolu =  "dosya/".$dosyaadi;

if($_FILES["dosya"]["size"]> $maxboyut){
	
	
	echo "dosya boyutu 500 kb dan buyuk olamaz...";
	
	
}else{
	
	$d = $_FILES["dosya"]["type"];
	
	if($d == "image/jpeg" || $d == "image/png" || $d == "image/gif"){
		
		if(is_uploaded_file($_FILES["dosya"]["tmp_name"])){
			
			$x = move_uploaded_file($_FILES["dosya"]["tmp_name"],$dosyayolu);
			
			if($x){
				
				echo "basarýlý bir sekilde dosyayý yuklediniz..<br/>";
				
				echo "http://asrc.esy.es/".$dosyayolu;
				
				
			}
			
		}else{
			
			echo "yuklenirken bir hata olustu";
			
		}
		
		
		
	}else{
		
		echo "sadece jpg,png ve gif formatlarý yukleyebilirsiniz...";
		
		
	}
	
	
	
	
}

?>