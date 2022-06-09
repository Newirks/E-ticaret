<?php

include "header_main.php";




if($_POST){

$tutar = $_POST["tutar"];
$_SESSION["tutar"] = $tutar;
$sipkod = substr(md5(microtime()),rand(0,26),5);
}else {}


?>

  <div class="container-fluid odeme_adres">
    
  	<div class="container">
  		<form action="payment_add.php" method="post" id="adres" name="adres">
  		<div class="row">
  			
  			<div class="col-md-9">
  				
  				<div class="kayitli_adres">
  					
  					
            

  					<?php

  						$adres_sorgula = mysqli_query($conn,"SELECT * FROM uyeler_adres_defter WHERE uye_id = '$uyeid'");
  						$adres_say = mysqli_num_rows($adres_sorgula);


  						if($_SESSION["oturum"] > 0){




  						

  						if($adres_say > 0){
   


  						while($adresyaz = $adres_sorgula->fetch_array()){


  					?>
              <div class="kayitli_adres_baslik">Kayıtlı Adresler</div>
  					
  					<p>
	                  <label class="uyeol_sozlesme">
	                    <input type="checkbox" name="kayit_adres" id="<?php echo $adresyaz["uye_adres_id"]; ?>" value="<?php echo $adresyaz["uye_adres_id"]; ?>">
	                    <span class="checkmark_checkbox"></span>
	                    <span class="checkmark_checkbox_text"><?php echo $adresyaz["uye_adres_baslik"]; ?> / <?php echo $adresyaz["uye_adres_ulke"]; ?> / <?php 


	                    $sehiradi = $adresyaz["uye_adres_sehir"]; 

	                    $sehirsorgula = mysqli_query($conn,"SELECT * FROM iller WHERE il_no = '$sehiradi'");
	                    $sehiryaz = $sehirsorgula->fetch_array();

	                    echo $sehiryaz["isim"];


	                    ?> / <?php echo $adresyaz["uye_adres_semt"]; ?> / <?php echo substr($adresyaz["uye_adres_adres"] , 0 , 80); ?>...</span>
	                  </label>
  					</p>


  					<?php		

  						}

  					?>
  					<hr>
  					<p>
                  <label class="uyeol_sozlesme">
                    <input type="checkbox" value="1" name="fatura">
                    <span class="checkmark_checkbox"></span>
                    <span class="checkmark_checkbox_text"><b>Fatura Adresi Olarak Başka Adres Girmek İstiyorum.</b></span>
                  </label>  						

  					</p>

  					<div class="buton_grup">

  							<input type="hidden" name="sipkod" value="<?php echo $sipkod; ?>">
		  					<input type="submit" class="kaydet" name="kayitli_adres" value="Devam Et">

		  					 							

  						


  					</div>
  					<div class="temizle"></div>

  					<?php

  					}else { echo "<p><i>Henüz kayıtlı Teslimat adresiniz bulunmamaktadır.</i></p>"; }


  				}else {


  					?>


  					<div class="kayitli_adres_baslik">Email Adres Giriniz</div>
  					
  					<div class="email_alan" style="padding: 20px;">
  					<input  type="email" name="email" class="email" placeholder="*Email" required="required">
  					</div>
  					
  					<?php



  				}

  					 ?>

  					

  				</div>
				
  				<div class="yeni_adres">
  					
  					<div class="yeni_adres_baslik">Adres Ekle</div>

  					<table>
  						
  						<tr>
  							<td><input type="text" name="baslik" placeholder="*Adres Başlığı" ></td>
  							<td><i>Örn : Ev yada İş</i></td>
  						</tr>
  						<tr>
  							<td><input type="text" name="ad" placeholder="* Ad" ></td>
  							<td><input type="text" name="soyad" placeholder="* Soyad" ></td>
  						</tr>
  						<tr>
  							<td>
  								<select name="ulke" form="adres" >
  									<option value="">-- Ülke Seçiniz --</option>
  									<option value="Türkiye">Türkiye</option>
  								</select>
  							</td>
  							<td>
  								<select name="sehir" form="adres" >
  									<option value="">-- Şehir Seçiniz --</option>
  									<?php

  										$iller = mysqli_query($conn,"SELECT * FROM iller");
  										while($il_yaz = $iller->fetch_array()){

  											echo "<option value='".$il_yaz["il_no"]."'>".$il_yaz["isim"]."</option>";

  										}

  									 ?>
  								</select>
  							</td>
  						</tr>
  						<tr>
  							<td><input type="text" name="semt" placeholder="* Semt" ></td>
  							<td><input type="text" name="cep"  placeholder="* Cep Telefonu"></td>
  						</tr>
  						<tr>
  							<td><input type="text"  name="tel" placeholder="Telefon"></td>
  							<td><input type="text" name="tc" placeholder="* TC Kimlik No"></td>
  						</tr>
  						<tr><td colspan="2"><textarea name="adres" placeholder="* Adres"></textarea></td></tr>

  					</table>
  					<p>
  						                  <label class="uyeol_sozlesme">
                    <input type="checkbox" value="1" name="fatura">
                    <span class="checkmark_checkbox"></span>
                    <span class="checkmark_checkbox_text">Fatura Adresi Olarak Başka Adres Girmek İstiyorum.</span>
                  </label>
  					</p>
  					<div class="buton_grup">

  							<?php

  								if($_SESSION["oturum"] > 0){

  									echo '

  							<input type="hidden" name="sipkod" value="'.$sipkod.'">		
		  					<input type="submit" class="kaydet" name="kaydet" value="Kaydet ve Devam Et">

		  					<input type="submit" class="devam" name="devam" value="Sadece Devam Et">


  									';

  								}else {


									echo '
							<input type="hidden" name="sipkod" value="'.$sipkod.'">		
		  					<input type="submit" class="kaydet" name="devam2" value="Devam Et">

									';  									


  								}

  							 ?>
 							

  						


  					</div>
  					<div class="temizle"></div>

  				</div>
  				</form>
  			</div>

  			<div class="col-md-3">
  				
	          <div class="sepet_ozet">
	            
	            <div class="sepet_ozet_baslik">SEPET ÖZETİ</div>

	            <div class="sepet_ozet_tablo">
	              
	              <table>
	                <tr>
	                  <td>Ara Toplam</td>
	                  <td style="float: right;"><b><?php echo $tutar; ?>,00 TL</b></td>
	                </tr>
	                <tr>
	                  <td>KDV</td>
	                  <td style="float: right;"><b><?php echo (number_format($tutar) / 100) * 8; ?> TL</b></td>
	                </tr>
	                <tr>
	                  <td>KDV Dahil</td>
	                  <td style="float: right;"><b><?php echo ((number_format($tutar) / 100) * 8) + number_format($tutar); ?> TL</b></td>
	                </tr>
	              </table>              

	            </div>

	            <div class="sepet_ozet_toplam">
	              
	              <table>
	                <tr>
	                  <td>Toplam</td>
	                  <td style="font-weight: bold; font-size:18px; float: right; "><b><?php echo ((number_format($tutar) / 100) * 8) + number_format($tutar); ?> TL</b></td>
	                </tr>
	              </table>
	              
	            </div>

	            <div class="sepet_ozet_buton">
	              
	              <button type="button" disabled="disabled">Ödeme İşlemleri</button>

	            </div>

	          </div>  				

  			</div>

  		</div>

  	</div>

  </div>


<?php

include "footer.php";

?>