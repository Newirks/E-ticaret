<?php 
 include "header_main.php";



if($_POST["kayitli_adres"]){

				
				
				$adresid = $_POST["kayit_adres"];

				$adresi_sorgula = mysqli_query($conn,"SELECT * FROM uyeler_fatura_defter WHERE uye_adres_id = '$adresid'");
				$bilgileriyaz = $adresi_sorgula->fetch_array();

				$sipkod = $_POST["sipkod"];
                $baslik = $bilgileriyaz["uye_adres_baslik"];
                $ad = $bilgileriyaz["uye_adres_ad"];
                $soyad = $bilgileriyaz["uye_adres_soyad"];
                $ulke = $bilgileriyaz["uye_adres_ulke"];
                $sehir = $bilgileriyaz["uye_adres_sehir"]; 
                $semt = $bilgileriyaz["uye_adres_semt"]; 
                $cep = $bilgileriyaz["uye_adres_cep"];
                $tel = $bilgileriyaz["uye_adres_telefon"]; 
                $tc = $bilgileriyaz["uye_adres_tc"]; 
                $adres = $bilgileriyaz["uye_adres_adres"];

                $adres_sip_ekle = mysqli_query($conn,"INSERT INTO siparis_adres_fatura (f_uye_id,f_ulke,f_il,f_ilce,f_ad,f_soyad,f_tc_no,f_tel,f_cep_tel,f_adres,f_adres_baslik,f_sipkod) VALUES ('$uyeid','$ulke','$sehir','$semt','$ad','$soyad','$tc','$tel','$cep','$adres','$baslik','$sipkod')");
                
                if($adres_sip_ekle){

                    header("location:payment_step2.php?order=$sipkod");

                }else{

                    echo "<div style='margin:10px; font-size:18px;'><center>Bir Hata Oluştu Lütfen Tekrar Deneyiniz.</center></div>";

                }



 


}elseif($_POST["kaydet"]){

            	                                         
                $sipkod = $_POST["sipkod"];
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

                $adres_sip_ekle = mysqli_query($conn,"INSERT INTO siparis_adres_fatura (f_uye_id,f_ulke,f_il,f_ilce,f_ad,f_soyad,f_tc_no,f_tel,f_cep_tel,f_adres,f_adres_baslik,f_sipkod) VALUES ('$uyeid','$ulke','$sehir','$semt','$ad','$soyad','$tc','$tel','$cep','$adres','$baslik','$sipkod')");


                $adres_def_ekle = mysqli_query($conn,"INSERT INTO uyeler_fatura_defter (uye_id,uye_fatura_baslik,uye_fatura_ad,uye_fatura_soyad,uye_fatura_ulke,uye_fatura_sehir,uye_fatura_semt,uye_fatura_telefon,uye_fatura_cep,uye_fatura_adres,uye_fatura_tc) 

                	VALUES ('$uyeid','$baslik','$ad','$soyad','$ulke','$sehir','$semt','$tel','$cep','$adres','$tc')");
           		

                if($adres_sip_ekle AND $adres_def_ekle){

                	header("location:payment_step2.php?order=$sipkod");

                }else{

                	echo "<div style='margin:10px; font-size:18px;'><center>Bir Hata Oluştu Lütfen Tekrar Deneyiniz.</center></div>";

                }
               

 }elseif($_POST["devam"]){
 				
 				$sipkod = $_POST["sipkod"];
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

                $adres_sip_ekle = mysqli_query($conn,"INSERT INTO siparis_adres_fatura (f_uye_id,f_ulke,f_il,f_ilce,f_ad,f_soyad,f_tc_no,f_tel,f_cep_tel,f_adres,f_adres_baslik,f_sipkod) VALUES ('$uyeid','$ulke','$sehir','$semt','$ad','$soyad','$tc','$tel','$cep','$adres','$baslik','$sipkod')"); 

                if($adres_sip_ekle){

                	header("location:payment_step2.php?order=$sipkod");

                }else{

                	echo "<div style='margin:10px; font-size:18px;'><center>Bir Hata Oluştu Lütfen Tekrar Deneyiniz.</center></div>";

                }                	

 }elseif($_POST["devam2"]){



 				
 				$email = $_POST["email"];
 				$sipkod = $_POST["sipkod"];
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

                $adres_sip_ekle = mysqli_query($conn,"INSERT INTO siparis_adres_fatura (f_email,f_ulke,f_il,f_ilce,f_ad,f_soyad,f_tc_no,f_tel,f_cep_tel,f_adres,f_adres_baslik,f_sipkod) VALUES ('$email','$ulke','$sehir','$semt','$ad','$soyad','$tc','$tel','$cep','$adres','$baslik','$sipkod')"); 

                if($adres_sip_ekle){

                	header("location:payment_step2.php?order=$sipkod");

                }else{

                	echo "<div style='margin:10px; font-size:18px;'><center>Bir Hata Oluştu Lütfen Tekrar Deneyiniz.</center></div>";

                }




 }





 include "footer.php";

?>