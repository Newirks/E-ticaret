<?php

include "header_main.php";
$sipkod = $_GET["order"];



?>

  <div class="container-fluid odeme_adres">
    
  	<div class="container">
  		<form action="payment_work.php" method="post" id="adres" name="adres">
  		<div class="row">
  			
  			<div class="col-md-9">
  				
  				<div class="kayitli_adres">
  					
  					<div class="kayitli_adres_baslik">Kargo Seçiniz</div>

            <table table style="margin-left: 20px;">
            <?php

              $kargosorgula = mysqli_query($conn,"SELECT * FROM siparis_adres WHERE sipkod = '$sipkod'");
              $kargoyaz = $kargosorgula->fetch_array();
              $il_id = $kargoyaz["il"];


              $kargo_ucret = mysqli_query($conn,"SELECT * FROM kargo_ucret WHERE il_id = '$il_id'");
              while($ucret_yaz = $kargo_ucret->fetch_array()){ ?>

               
                  <tr>
                    
                      <td style="padding-right: 10px;"> <input type="radio" name="kargo" id="<?php echo $ucret_yaz["kargo_ucret_id"]; ?>" value="<?php echo $ucret_yaz["kargo_ucret_id"]; ?>"> </td>

                      <td class="kargo_resim"> 
                      
                        <?php 

                        $kargo_id = $ucret_yaz["kargo_id"]; 

                        $kargolar = mysqli_query($conn,"SELECT * FROM kargolar WHERE kargo_id = '$kargo_id' ");

                        $yaz_kargo = $kargolar->fetch_array();

                        echo "<img src='".$yaz_kargo["kargo_resim"]."' class='img-responsive' style='width: 100px; '>";

                        ?>
                        </td>
                        <td>
                          <span class="kargo_yazi"><?php echo $ucret_yaz["kargo_ucret"]; ?> TL</span>
                        </td>
                        

                  </tr>          


             <?php   

              }

             ?>

  					
          </table>   
  				</div>
          <div class="kayitli_adres">
            
            <div class="kayitli_adres_baslik">Ödeme Yöntemi Seçiniz</div>

            
                      <table style="margin-left: 20px;">
                        <tr>
                          <td style="padding-right: 10px;">
                            <input type="radio" name="odemetip" value="1">
                            
                          </td>
                          <td class="kargo_resim">
                            <img src="img/odeme/kredi.png">
                          </td>
                          <td>
                            <span class="kargo_yazi">Kredi Kartı ile Ödeme</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <input type="radio" name="odemetip" value="2">
                            
                          </td>
                          <td class="kargo_resim">
                            <img src="img/odeme/havale.png">
                          </td>
                          <td>
                            <span class="kargo_yazi">Havale ile Ödeme</span>
                          </td>                          
                        </tr>
                      </table>




          </div>				
  				<div class="yeni_adres">
  					
  					<div class="yeni_adres_baslik">Teslimat Bilgileri</div>

            <p><?php echo $kargoyaz["tc_no"]; ?> - <?php echo $kargoyaz["ad"]." ". $kargoyaz["soyad"]; ?> - <?php echo NumarayiFormatla($kargoyaz["tel"])." / ". NumarayiFormatla($kargoyaz["cep_tel"]); ?></p>
            <p><?php echo $kargoyaz["adres"]; ?> / <?php

                      $sehiradi = $kargoyaz["il"]; 

                      $sehirsorgula = mysqli_query($conn,"SELECT * FROM iller WHERE il_no = '$sehiradi'");
                      $sehiryaz = $sehirsorgula->fetch_array();

                      echo $sehiryaz["isim"];              

             ?> / <?php echo $kargoyaz["ilce"]; ?></p>
             <hr>

            <div class="yeni_adres_baslik">Fatura Bilgileri</div>

            <?php


              $fsorgula = mysqli_query($conn,"SELECT * FROM siparis_adres_fatura WHERE f_sipkod = '$sipkod'");
              $fyaz = $fsorgula->fetch_array();
              $f_il_id = $fyaz["f_il"];              

             ?>

            <p><?php echo $fyaz["f_tc_no"]; ?> - <?php echo $fyaz["f_ad"]." ". $fyaz["f_soyad"]; ?> - <?php echo NumarayiFormatla($fyaz["f_tel"])." / ". NumarayiFormatla($fyaz["f_cep_tel"]); ?></p>
            <p><?php echo $fyaz["f_adres"]; ?> / <?php

                      $fsehiradi = $fyaz["f_il"]; 

                      $fsehirsorgula = mysqli_query($conn,"SELECT * FROM iller WHERE il_no = '$fsehiradi'");
                      $fsehiryaz = $fsehirsorgula->fetch_array();

                      echo $fsehiryaz["isim"];              

             ?> / <?php echo $fyaz["f_ilce"]; ?></p>
             <hr>



            <div class="sepet_detay_tablo">
                 <?php
                $toplam = 0;
                foreach($_SESSION["sepet"] as $anahtar => $deger){
                            
                ?>             
              <table class="hidden-sm hidden-xs">

                <tr>
                  <td style="width: 120px;"><img src="admin/<?=$deger['resim'];?>" class="img-responsive"></td>
                  <td style="width: 250px;">
                    <p class="sepet_urun_adi"><?=$deger["ad"];?></p>
                    <p class="sepet_urun_kodu">Ürün Kodu : <?=$deger["kod"];?></p>
                    

                  </td>
                  <td>

                    <div class="sepet_adet" style="color:grey; font-size:12px;">
                    
                    <?=$deger['adet'];?> <?php if($deger["birim"] == 1){

                        echo "Adet";
                      }else{

                        echo "Metre";
                      }

                      ?>
                    
                    </div>

                  </td>
                  <td><span class="sepet_adet_fiyat"><?php echo $deger["fiyat"] * $deger["adet"]; ?> TL</span><span class="sepet_kdv"> + KDV % <?=$deger["kdv"];?></span></td>
                </tr>


              </table>

 
              <table class="hidden-lg hidden-md">
                <tr>
                  <td style="width: 120px;"><img src="admin/<?=$deger['resim'];?>" class="img-responsive"></td>
                  <td style="width: 250px;">
                    <p class="sepet_urun_adi"><?=$deger["ad"];?></p>
                    <p class="sepet_urun_kodu">Ürün Kodu : <?=$deger["kod"];?></p>
                    

                  </td>
                </tr>
                  <tr>
                    
                  <td>
                    <center>
                    
                    <div class="sepet_adet" style="color:grey; font-size:12px;">
                    
                    <?=$deger['adet'];?> <?php if($deger["birim"] == 1){

                        echo "Adet";
                      }else{

                        echo "Metre";
                      }

                      ?>
                    
                    </div>
                    
                  </center>
                  </td>                    
<td><span class="sepet_adet_fiyat"><?php echo $deger["fiyat"] * $deger["adet"]; ?>,00 TL</span><span class="sepet_kdv"> + KDV % <?=$deger["kdv"];?></span></td>                  
                  
                </tr>
              </table>
             <?php 

                
                $toplam = $toplam + ($deger["adet"] * $deger["fiyat"]);



            } 

            ?>
            </div>



  					<div class="buton_grup">
                <input type="hidden" value="<?php echo $uyeid; ?>" name="uyeid">
                <input type="hidden" value="<?php echo $sipkod; ?>" name="sipkod">
		  					<input type="submit" class="kaydet" name="odeme"  value="Ödeme Yap ve Siparişi Tamamla">

		  					  							

  						


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
	                  <td style="float: right;"><b><?php echo $toplam; ?> TL</b></td>
	                </tr>
	                <tr>
	                  <td>KDV</td>
	                  <td style="float: right;"><b><?php echo (number_format($toplam) / 100) * 8; ?> TL</b></td>
	                </tr>
	                <tr>
	                  <td>KDV Dahil</td>
	                  <td style="float: right;"><b><?php echo ((number_format($toplam) / 100) * 8) + $toplam; ?> TL</b></td>
	                </tr>

	              </table>              

	            </div>

	            <div class="sepet_ozet_toplam">
	              
	              <table>
	                <tr>
	                  <td>Toplam</td>
	                  <td style="font-weight: bold; font-size:18px; float: right; "><b><?php echo ((number_format($toplam) / 100) * 8) + number_format($toplam); ?> TL</b></td>
	                </tr>
	              </table>
	              
	            </div>



	          </div>  				

  			</div>

  		</div>

  	</div>

  </div>


<?php

include "footer.php";

?>