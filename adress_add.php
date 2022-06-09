<?php
include "header_main.php";




	if($_POST){


                
                $baslik = $_POST["baslik"];
                $ad = $_POST["ad"];
                $soyad = $_POST["soyad"];
                $ulke = $_POST["ulke"];
                $sehir = $_POST["sehir"]; 
                $semt = $_POST["semt"]; 
                $cep = $_POST["cep"];
                $tel = $_POST["tel"]; 
                $tc = $_POST["tc"]; 
                $adres = $_POST["adres"];



                $adres_def_ekle = mysqli_query($conn,"INSERT INTO uyeler_adres_defter (uye_id,uye_adres_baslik,uye_adres_ad,uye_adres_soyad,uye_adres_ulke,uye_adres_sehir,uye_adres_semt,uye_adres_telefon,uye_adres_cep,uye_adres_adres,uye_adres_tc) 

                	VALUES ('$uyeid','$baslik','$ad','$soyad','$ulke','$sehir','$semt','$tel','$cep','$adres','$tc')");


                $adres_fat_ekle = mysqli_query($conn,"INSERT INTO uyeler_fatura_defter (uye_id,uye_fatura_baslik,uye_fatura_ad,uye_fatura_soyad,uye_fatura_ulke,uye_fatura_sehir,uye_fatura_semt,uye_fatura_telefon,uye_fatura_cep,uye_fatura_adres,uye_fatura_tc) 

                	VALUES ('$uyeid','$baslik','$ad','$soyad','$ulke','$sehir','$semt','$tel','$cep','$adres','$tc')");           		

                if($adres_def_ekle AND $adres_fat_ekle){

                	header("location:adress.php?id=".$uyeid."");

                }else{

                	echo "<div style='margin:10px; font-size:18px;'><center>Bir Hata Oluştu Lütfen Tekrar Deneyiniz.</center></div>";

                }			



	}




include "footer.php";



 ?>