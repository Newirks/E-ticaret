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
  					
  					<div class="kayitli_adres_baslik">Ödeme Alanı</div>

            <?php

              $siparis = mysqli_query($conn,"SELECT * FROM siparisler WHERE siparis_kodu = '$sipkod'");
              $sipyaz = $siparis->fetch_array();

              $odemeid = $sipyaz["siparis_odeme_id"];

              if($odemeid == 1){

                echo "<p>Kredi Kartı ile Ödeme</p>";

              }else{

                echo "<p>Havale İle Ödeme</p>";

              }

             ?>
            
  				</div>
          		
  				<div class="yeni_adres">
  					
  					<div class="yeni_adres_baslik">Sipariş Bilgileri</div>
            <?php
              $sipbilgisorgula = mysqli_query($conn,"SELECT * FROM siparis_adres WHERE sipkod = '$sipkod'");
              $sipbilgiyaz = $sipbilgisorgula->fetch_array();
             ?>
            <p><?php echo $sipbilgiyaz["tc_no"]; ?> - <?php echo $sipbilgiyaz["ad"]." ". $sipbilgiyaz["soyad"]; ?> - <?php echo NumarayiFormatla($sipbilgiyaz["tel"])." / ". NumarayiFormatla($sipbilgiyaz["cep_tel"]); ?></p>
            <p><?php echo $sipbilgiyaz["adres"]; ?> / <?php

                      $sehiradi = $sipbilgiyaz["il"]; 

                      $sehirsorgula = mysqli_query($conn,"SELECT * FROM iller WHERE il_no = '$sehiradi'");
                      $sehiryaz = $sehirsorgula->fetch_array();

                      echo $sehiryaz["isim"];              

             ?> / <?php echo $sipbilgiyaz["ilce"]; ?></p>
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
                $sip_urun_sorgula = mysqli_query($conn,"SELECT * FROM sip_urunler WHERE sip_kodu = '$sipkod' ");
                while($sip_urun_yaz = $sip_urun_sorgula->fetch_array()){


                            
                ?>             
              <table class="hidden-sm hidden-xs">

                <tr>
                  <td style="width: 120px;"><img src="admin/<?php echo $sip_urun_yaz['sip_urun_resim'] ?>" class="img-responsive"></td>
                  <td style="width: 250px;">
                    <p class="sepet_urun_adi"><?php echo $sip_urun_yaz["sip_urun_adi"] ?></p>
                    <p class="sepet_urun_kodu"><?php echo $sip_urun_yaz["sip_urun_kodu"] ?></p>
                    

                  </td>
                  <td>

                    <div class="sepet_adet" style="color:grey; font-size:12px;">
                    
                    <?php echo $sip_urun_yaz["sip_urun_miktar"] ?> <?php 

                    if($sip_urun_yaz["sip_urun_birim"] == 1){

                      echo "Adet";

                    }else{

                      echo "Metre";
                    } 


                    ?>
                    
                    </div>

                  </td>
                  <td><span class="sepet_adet_fiyat"><?php echo $sip_urun_yaz["sip_urun_fiyat"] * $sip_urun_yaz["sip_urun_miktar"]; ?> TL</span><span class="sepet_kdv"> + KDV % <?php echo $sip_urun_yaz["sip_urun_kdv"] ?></span></td>
                </tr>


              </table>

 
              <table class="hidden-lg hidden-md">
                <tr>
                  <td style="width: 120px;"><img src="img/deneme.jpg" class="img-responsive"></td>
                  <td style="width: 250px;">
                    <p class="sepet_urun_adi"><?php echo $sip_urun_yaz["sip_urun_adi"] ?></p>
                    <p class="sepet_urun_kodu">Ürün Kodu : <?php echo $sip_urun_yaz["sip_urun_kodu"] ?></p>
                    

                  </td>
                </tr>
                  <tr>
                    
                  <td>
                    <center>
                    
                    <div class="sepet_adet" style="color:grey; font-size:12px;">
                    
                    <?php echo $sip_urun_yaz["sip_urun_miktar"] ?> <?php echo $sip_urun_yaz["sip_urun_birim"] ?>
                    
                    </div>
                    
                  </center>
                  </td>                    
<td><span class="sepet_adet_fiyat"><?php echo $sip_urun_yaz["sip_urun_fiyat"] * $sip_urun_yaz["sip_urun_miktar"]; ?>,00 TL</span><span class="sepet_kdv"> + KDV % <?php echo $sip_urun_yaz["sip_urun_kdv"] ?></span></td>                  
                  
                </tr>
              </table>
             <?php 

                
                $toplam = $toplam + ($sip_urun_yaz["sip_urun_miktar"] * $sip_urun_yaz["sip_urun_fiyat"]);



            } 

            ?>
            </div>



  					<div class="buton_grup">



		  					  							

  						


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
	                  <td style="float: right;"><b><?php echo number_format($toplam); ?>,00 TL</b></td>
	                </tr>
	                <tr>
	                  <td>KDV</td>
	                  <td style="float: right;"><b><?php echo (number_format($toplam) / 100) * 8; ?> TL</b></td>
	                </tr>
	                <tr>
	                  <td>KDV Dahil</td>
	                  <td style="float: right;"><b><?php echo ((number_format($toplam) / 100) * 8) + number_format($toplam); ?> TL</b></td>
	                </tr>
                  <tr>
                    <td>Kargo</td>
                    <td style="float: right;"><b>
                      <?php

                        $sipkargoid = $sipyaz["siparis_kargo_id"];

                        $sipadres = mysqli_query($conn,"SELECT * FROM siparis_adres WHERE sipkod = '$sipkod'");
                        $sipadresyaz = $sipadres->fetch_array();

                        $sipil = $sipadresyaz["il"];

                        $kargo_ucret = mysqli_query($conn,"SELECT * FROM kargo_ucret WHERE kargo_id = '$sipkargoid' AND il_id = '$sipil'");
                        $ucret_yaz = $kargo_ucret->fetch_array();

                        echo $ucret_yaz["kargo_ucret"];


                       ?>

                    TL</b></td>
                  </tr>
	              </table>              

	            </div>

	            <div class="sepet_ozet_toplam">
	              
	              <table>
	                <tr>
	                  <td>Toplam</td>
	                  <td style="font-weight: bold; font-size:18px; float: right; "><b><?php echo ((number_format($toplam) / 100) * 8) + number_format($toplam) + $ucret_yaz["kargo_ucret"]; ?> TL</b></td>
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