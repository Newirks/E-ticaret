<?php

include "header.php";


$id = $_GET["id"];


    $dosya_adi1 = $_FILES["resim1"]["name"];
	$uzanti1 = substr($dosya_adi1,-4,4);
    $rand1 = substr(md5(microtime()),rand(0,26),10);
    $yeni_ad1 = "img/urunler/".$rand1.$uzanti1;
    move_uploaded_file($_FILES["resim1"]["tmp_name"], $yeni_ad1);

include "footer.php";

?>