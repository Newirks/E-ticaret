<?php

include "header_main.php";



	
		if($_POST){

			$uyeid = $_POST["uyeid"];
			$sipkod = $_POST["sipkod"];
			$kargo = $_POST["kargo"];
			$odemetip = $_POST["odemetip"];
			$tarih = date('d.m.Y H:i:s');

			foreach($_SESSION["sepet"] as $anahtar => $deger){

                
                $urunkod = $deger["kod"];
                $urunadi = $deger["ad"];
                $urunfiyat = $deger["fiyat"];
                $urunmiktar = $deger["adet"];
                $urunresim = $deger["resim"]; 
                $urunbirim = $deger["birim"]; 
                $urunkdv = $deger["kdv"];

                $toplam = $toplam + $urunmiktar * $urunfiyat;

                $siptop = ((number_format($toplam) / 100) * 8) + number_format($toplam);	

			$sip_urunler = mysqli_query($conn,"INSERT INTO sip_urunler (sip_urun_kodu,sip_urun_adi,sip_urun_resim,sip_urun_miktar,sip_urun_birim,sip_urun_fiyat,sip_urun_kdv,sip_kodu) VALUES ('$urunkod','$urunadi','$urunresim','$urunmiktar','$urunbirim','$urunfiyat','$urunkdv','$sipkod')");                			

			}


			if($_SESSION["oturum"] > 0){


				$siparisler = mysqli_query($conn,"INSERT INTO siparisler (uye_id , siparis_kodu , siparis_odeme_id , siparis_kargo_id , siparis_tutar , siparis_tarihi) 
																VALUES ('$uyeid','$sipkod','$odemetip','$kargo','$siptop','$tarih')");


				if($siparisler){


					header("location:payment_step3?order=".$sipkod."");

					session_destroy();

				}else{

					echo "<div style='margin:20px;'><center><h3>Hata Oluştu Tekrar Deneyiniz.</h3></center></div>";

					echo "1 - ".$sipkod."<br>2 - ".$uyeid."<br>3 - ".$odemetip."<br>4 - ".$kargo."<br>5 - ".$siptop;

					

					
				}





			}else{



				$siparisler = mysqli_query($conn,"INSERT INTO siparisler ( siparis_kodu , siparis_odeme_id , siparis_kargo_id , siparis_tutar , siparis_tarihi) 
																VALUES ('$sipkod','$odemetip','$kargo','$siptop','$tarih')");


				if($siparisler){


					header("location:payment_step3?order=".$sipkod."");

					session_destroy();

				}else{

					echo "<div style='margin:20px;'><center><h3>Hata Oluştu Tekrar Deneyiniz.</h3></center></div>";

					echo "1 - ".$sipkod."<br>2 - ".$uyeid."<br>3 - ".$odemetip."<br>4 - ".$kargo."<br>5 - ".$siptop;

					

					
				}



			}







		}
	



include "footer.php";




 ?>