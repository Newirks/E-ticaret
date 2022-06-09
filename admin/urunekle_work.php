<?php

include "header.php";





if($_POST){

	

	$tarih = date('d.m.Y H:i:s');
	$kodu = $_POST["urunkodu"];
	$adi = $_POST["urunadi"];
	$bilgi1 = $_POST["urunbilgi1"];
	$bilgi2 = $_POST["urunbilgi2"];
	$stok = $_POST["urunstok"];
	$fiyat = $_POST["urunfiyat"];
	$kdv = $_POST["urunkdv"];
	$kategori = $_POST["urunkategori"];
	$kampanya = $_POST["urunkampanya"];
	$birim = $_POST["urunbirim"];
	$yeni = $_POST["yeniurun"];
   					
    $dosya_adi1 = $_FILES["resim1"]["name"];
	$uzanti1 = substr($dosya_adi1,-4,4);
    $rand1 = substr(md5(microtime()),rand(0,26),10);
    $yeni_ad1 = "img/urunler/".$rand1.$uzanti1;
    move_uploaded_file($_FILES["resim1"]["tmp_name"], $yeni_ad1);


    $dosya_adi2 = $_FILES["resim2"]["name"];
	$uzanti2 = substr($dosya_adi2,-4,4);
    $rand2 = substr(md5(microtime()),rand(0,26),10);
    $yeni_ad2 = "img/urunler/".$rand2.$uzanti2;
    move_uploaded_file($_FILES["resim2"]["tmp_name"], $yeni_ad2);

    $dosya_adi3 = $_FILES["resim3"]["name"];
	$uzanti3 = substr($dosya_adi3,-4,4);
    $rand3 = substr(md5(microtime()),rand(0,26),10);
    $yeni_ad3 = "img/urunler/".$rand3.$uzanti3;
    move_uploaded_file($_FILES["resim3"]["tmp_name"], $yeni_ad3);

    $dosya_adi4 = $_FILES["resim4"]["name"];
	$uzanti4 = substr($dosya_adi4,-4,4);
    $rand4 = substr(md5(microtime()),rand(0,26),10);
    $yeni_ad4 = "img/urunler/".$rand4.$uzanti4;
    move_uploaded_file($_FILES["resim4"]["tmp_name"], $yeni_ad4);

    $dosya_adi5 = $_FILES["resim5"]["name"];
	$uzanti5 = substr($dosya_adi5,-4,4);
    $rand5 = substr(md5(microtime()),rand(0,26),10);
    $yeni_ad5 = "img/urunler/".$rand5.$uzanti5;
    move_uploaded_file($_FILES["resim5"]["tmp_name"], $yeni_ad5);


	if($kampanya > 0){

		$kampanya_bul = mysqli_query($conn,"SELECT * FROM kampanya WHERE kampanya_id = '$kampanya'");
		$kampanya_yaz = mysqli_fetch_array($kampanya_bul);
		$yuzde = $kampanya_yaz["kampanya_yuzdesi"];

		if($yuzde > 0){

			$kampanya_fiyat = $fiyat / 100 * $yuzde;

		}else {}

	}else {

			$kampanya_fiyat = 0;

	}


		$ekle1 = mysqli_query($conn,"INSERT INTO urunler (urun_kodu,urun_adi,urun_bilgi_1,urun_bilgi_2,urun_stok,urun_fiyat,urun_kdv,urun_kampanya_fiyat,urun_kategori_id,urun_kampanya_id,urun_tarih,urun_birim,urun_yeni,urun_resim) VALUES ('$kodu','$adi','$bilgi1','$bilgi2','$stok','$fiyat','$kdv','$kampanya_fiyat','$kategori','$kampanya','$tarih','$birim','$yeni','$yeni_ad1')");


	if($ekle1){


		$idbul = mysqli_query($conn,"SELECT * FROM urunler WHERE urun_kodu = '$kodu'");
		$idyaz = mysqli_fetch_array($idbul);

		$urunidsi = $idyaz["urun_id"];

		$ekle2 = mysqli_query($conn,"INSERT INTO urunler_resimler (urunler_id,resimler_yol) VALUES ('$urunidsi','$yeni_ad2')");

		$ekle3 = mysqli_query($conn,"INSERT INTO urunler_resimler (urunler_id,resimler_yol) VALUES ('$urunidsi','$yeni_ad3')");

		$ekle4 = mysqli_query($conn,"INSERT INTO urunler_resimler (urunler_id,resimler_yol) VALUES ('$urunidsi','$yeni_ad4')");

		$ekle5 = mysqli_query($conn,"INSERT INTO urunler_resimler (urunler_id,resimler_yol) VALUES ('$urunidsi','$yeni_ad5')");



		header("location:urunler.php");
	
	}else{

		echo "Başarısız";

	}

}



include "footer.php"


 ?>