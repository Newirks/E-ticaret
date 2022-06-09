<?php

include "header.php";



$urunid = $_GET["id"];

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


	$guncelle = mysqli_query($conn,"UPDATE urunler SET 




		urun_kodu = '$kodu',
		urun_adi = '$adi',
		urun_bilgi_1 = '$bilgi1',
		urun_bilgi_2 = '$bilgi2',
		urun_stok = '$stok',
		urun_fiyat = '$fiyat',
		urun_kdv = '$kdv',
		urun_kampanya_fiyat = '$kampanya_fiyat',
		urun_kategori_id = '$kategori',
		urun_kampanya_id = '$kampanya',
		urun_tarih = '$tarih',
		urun_birim = '$birim',
		urun_yeni = '$yeni' WHERE urun_id = '$urunid'");


	if($guncelle){


		header("location:urunler.php");
	
	}else{

		echo "Başarısız".$urunid."";

	}

}



include "footer.php"


 ?>