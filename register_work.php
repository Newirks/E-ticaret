<?php

include "header_main.php";
	
$rand = substr(md5(microtime()),rand(0,26),10);
$ipadres = $_SERVER["REMOTE_ADDR"];
$tarih = date('d.m.Y H:i:s');	

if($_POST){

	$ad = $_POST["uye_adi"];
	$soyad = $_POST["uye_soyadi"];
	$email = $_POST["uye_email"];
	$tel = $_POST["uye_tel"];
	$sifre = $_POST["uye_sifre"];
	$t_sifre = $_POST["uye_tekrar_sifre"];
	$cinsiyet = $_POST["uye_cinsiyet"];

	$ekle = mysqli_query($conn,"INSERT INTO uyeler (uye_kodu,uye_adi,uye_soyadi,uye_email,uye_tel,uye_sifre,uye_tekrar_sifre,uye_cinsiyet,uye_ip,uye_tarih) 

		VALUES ('$rand','$ad','$soyad','$email','$tel','$sifre','$t_sifre','$cinsiyet','$ipadres','$tarih')");

	if($ekle){

		header('Location: register_complete.php');
	}else{

		echo "Tekrar Deneyiniz";
	}

}


 ?>