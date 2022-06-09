<?php 
 include "header_main.php";



if($_POST["kayitli_adres"]){

				
				$fatura = $_POST["fatura"];
				$adresid = $_POST["kayit_adres"];

				$adresi_sorgula = mysqli_query($conn,"SELECT * FROM uyeler_adres_defter WHERE uye_adres_id = '$adresid'");
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


                if($fatura == 1){

                $adres_sip_ekle = mysqli_query($conn,"INSERT INTO siparis_adres (uye_id,ulke,il,ilce,ad,soyad,tc_no,tel,cep_tel,adres,adres_baslik,sipkod) VALUES ('$uyeid','$ulke','$sehir','$semt','$ad','$soyad','$tc','$tel','$cep','$adres','$baslik','$sipkod')"); 

                if($adres_sip_ekle){

                	header("location:payment_step1_2.php?order=$sipkod");

                }else{

                	echo "<div style='margin:10px; font-size:18px;'><center>Bir Hata Oluştu Lütfen Tekrar Deneyiniz.</center></div>";

                }


                }else {

                $adres_sip_ekle = mysqli_query($conn,"INSERT INTO siparis_adres (uye_id,ulke,il,ilce,ad,soyad,tc_no,tel,cep_tel,adres,adres_baslik,sipkod) VALUES ('$uyeid','$ulke','$sehir','$semt','$ad','$soyad','$tc','$tel','$cep','$adres','$baslik','$sipkod')"); 


                $adres_sip_ekle2 = mysqli_query($conn,"INSERT INTO siparis_adres_fatura (f_uye_id,f_ulke,f_il,f_ilce,f_ad,f_soyad,f_tc_no,f_tel,f_cep_tel,f_adres,f_adres_baslik,f_sipkod) VALUES ('$uyeid','$ulke','$sehir','$semt','$ad','$soyad','$tc','$tel','$cep','$adres','$baslik','$sipkod')"); 


                if($adres_sip_ekle AND $adres_sip_ekle2){

                	header("location:payment_step2.php?order=$sipkod");

                }else{

                	echo "<div style='margin:10px; font-size:18px;'><center>Bir Hata Oluştu Lütfen Tekrar Deneyiniz.</center></div>";

                }


                }

 


}elseif($_POST["kaydet"]){

            	$fatura = $_POST["fatura"];                                         
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

                if($fatura == 1){


                $adres_sip_ekle = mysqli_query($conn,"INSERT INTO siparis_adres (uye_id,ulke,il,ilce,ad,soyad,tc_no,tel,cep_tel,adres,adres_baslik,sipkod) VALUES ('$uyeid','$ulke','$sehir','$semt','$ad','$soyad','$tc','$tel','$cep','$adres','$baslik','$sipkod')");


                $adres_def_ekle = mysqli_query($conn,"INSERT INTO uyeler_adres_defter (uye_id,uye_adres_baslik,uye_adres_ad,uye_adres_soyad,uye_adres_ulke,uye_adres_sehir,uye_adres_semt,uye_adres_telefon,uye_adres_cep,uye_adres_adres,uye_adres_tc) 

                	VALUES ('$uyeid','$baslik','$ad','$soyad','$ulke','$sehir','$semt','$tel','$cep','$adres','$tc')");


                if($adres_sip_ekle AND $adres_def_ekle){

                	header("location:payment_step1_2.php?order=$sipkod");

                }else{

                	echo "<div style='margin:10px; font-size:18px;'><center>Bir Hata Oluştu Lütfen Tekrar Deneyiniz.</center></div>";

                }                


                }else{

                $adres_sip_ekle = mysqli_query($conn,"INSERT INTO siparis_adres (uye_id,ulke,il,ilce,ad,soyad,tc_no,tel,cep_tel,adres,adres_baslik,sipkod) VALUES ('$uyeid','$ulke','$sehir','$semt','$ad','$soyad','$tc','$tel','$cep','$adres','$baslik','$sipkod')");


                $adres_def_ekle = mysqli_query($conn,"INSERT INTO uyeler_adres_defter (uye_id,uye_adres_baslik,uye_adres_ad,uye_adres_soyad,uye_adres_ulke,uye_adres_sehir,uye_adres_semt,uye_adres_telefon,uye_adres_cep,uye_adres_adres,uye_adres_tc) 

                	VALUES ('$uyeid','$baslik','$ad','$soyad','$ulke','$sehir','$semt','$tel','$cep','$adres','$tc')");

                $adres_sip_ekle2 = mysqli_query($conn,"INSERT INTO siparis_adres_fatura (f_uye_id,f_ulke,f_il,f_ilce,f_ad,f_soyad,f_tc_no,f_tel,f_cep_tel,f_adres,f_adres_baslik,f_sipkod) VALUES ('$uyeid','$ulke','$sehir','$semt','$ad','$soyad','$tc','$tel','$cep','$adres','$baslik','$sipkod')"); 


                if($adres_sip_ekle AND $adres_def_ekle AND $adres_sip_ekle2){

                	header("location:payment_step2.php?order=$sipkod");

                }else{

                	echo "<div style='margin:10px; font-size:18px;'><center>Bir Hata Oluştu Lütfen Tekrar Deneyiniz.</center></div>";

                }



                }


           		


               

 }elseif($_POST["devam"]){

 				$fatura = $_POST["fatura"];
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


                if($fatura == 1){

               $adres_sip_ekle = mysqli_query($conn,"INSERT INTO siparis_adres (uye_id,ulke,il,ilce,ad,soyad,tc_no,tel,cep_tel,adres,adres_baslik,sipkod) VALUES ('$uyeid','$ulke','$sehir','$semt','$ad','$soyad','$tc','$tel','$cep','$adres','$baslik','$sipkod')");                	


                if($adres_sip_ekle){

                	header("location:payment_step1_2.php?order=$sipkod");

                }else{

                	echo "<div style='margin:10px; font-size:18px;'><center>Bir Hata Oluştu Lütfen Tekrar Deneyiniz.</center></div>";

                }   


                }else{

                $adres_sip_ekle2 = mysqli_query($conn,"INSERT INTO siparis_adres_fatura (f_uye_id,f_ulke,f_il,f_ilce,f_ad,f_soyad,f_tc_no,f_tel,f_cep_tel,f_adres,f_adres_baslik,f_sipkod) VALUES ('$uyeid','$ulke','$sehir','$semt','$ad','$soyad','$tc','$tel','$cep','$adres','$baslik','$sipkod')"); 

                $adres_sip_ekle = mysqli_query($conn,"INSERT INTO siparis_adres (uye_id,ulke,il,ilce,ad,soyad,tc_no,tel,cep_tel,adres,adres_baslik,sipkod) VALUES ('$uyeid','$ulke','$sehir','$semt','$ad','$soyad','$tc','$tel','$cep','$adres','$baslik','$sipkod')");    
                
                if($adres_sip_ekle AND $adres_sip_ekle2){

                	header("location:payment_step2.php?order=$sipkod");

                }else{

                	echo "<div style='margin:10px; font-size:18px;'><center>Bir Hata Oluştu Lütfen Tekrar Deneyiniz.</center></div>";

                }                              	

                }

 

              	

 }elseif($_POST["devam2"]){



 				$fatura = $_POST["fatura"];
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

                if($fatura == 1){

                $adres_sip_ekle = mysqli_query($conn,"INSERT INTO siparis_adres (email,ulke,il,ilce,ad,soyad,tc_no,tel,cep_tel,adres,adres_baslik,sipkod) VALUES ('$email','$ulke','$sehir','$semt','$ad','$soyad','$tc','$tel','$cep','$adres','$baslik','$sipkod')"); 

                if($adres_sip_ekle){

                	header("location:payment_step1_2.php?order=$sipkod");

                }else{

                	echo "<div style='margin:10px; font-size:18px;'><center>Bir Hata Oluştu Lütfen Tekrar Deneyiniz.</center></div>";

                } 


                }else {


                $adres_sip_ekle = mysqli_query($conn,"INSERT INTO siparis_adres (email,ulke,il,ilce,ad,soyad,tc_no,tel,cep_tel,adres,adres_baslik,sipkod) VALUES ('$email','$ulke','$sehir','$semt','$ad','$soyad','$tc','$tel','$cep','$adres','$baslik','$sipkod')"); 

                $adres_sip_ekle2 = mysqli_query($conn,"INSERT INTO siparis_adres_fatura (f_email,f_ulke,f_il,f_ilce,f_ad,f_soyad,f_tc_no,f_tel,f_cep_tel,f_adres,f_adres_baslik,f_sipkod) VALUES ('$email','$ulke','$sehir','$semt','$ad','$soyad','$tc','$tel','$cep','$adres','$baslik','$sipkod')"); 

                if($adres_sip_ekle AND $adres_sip_ekle2){

                	header("location:payment_step2.php?order=$sipkod");

                }else{

                	echo "<div style='margin:10px; font-size:18px;'><center>Bir Hata Oluştu Lütfen Tekrar Deneyiniz.</center></div>";

                }                

                }

 






 }





 include "footer.php";

?>