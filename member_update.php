<?php

include "header_main.php";



	if($_POST){


		$ad = $_POST["uye_adi"];
		$soyad = $_POST["uye_soyadi"];
		$email = $_POST["uye_email"];
		$tel = $_POST["uye_tel"];
		$sifre = $_POST["uye_sifre"];
		$t_sifre = $_POST["uye_tekrar_sifre"];
		$cinsiyet = $_POST["uye_cinsiyet"];


      	$guncelle = mysqli_query($conn,"UPDATE uyeler SET uye_adi='$ad', uye_soyadi='$soyad', uye_email='$mail', uye_tel='$tel' , uye_sifre='$sifre', uye_tekrar_sifre='$t_sifre', uye_cinsiyet='$cinsiyet' WHERE uye_id = '$uyeid' ");



      	if($guncelle){


      		echo "<center><h2 style='margin:50px;'>Bilgileriniz Başarıyla Güncellendi!</h2></center>";

      	}

	}



include "footer.php";


 ?>