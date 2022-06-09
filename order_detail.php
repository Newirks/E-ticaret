<?php

include "header_main.php";
if( !isset($_SESSION['uye_id']) ) {
  header("Location: index.php");
  exit;
 }

$sipkod = $_GET["sid"];

?>


<div class="container-fluid uyeprofil">
  

    
    


    <div class="col-md-12">
      
      <div class="container">
        
        <div class="row">
          
          <div class="col-md-12">
            
            <div class="uyeprofil_ust">
              
              <h3>Sipariş Detay - <?php echo $sipkod; ?></h3>

            </div>

          </div>

        </div>

        <div class="row uyeprofil_alt">
          
          <div class="col-md-12">
            

            <div class="siparis_detay">
              

              <div class="siparisler_bilgi">


                
                <div class="siparis_bilgi_tablo">
                  
                  <table>
                    <tr>

                      <td class="sip_bilgi_baslik">Tarih</td>
                      <td>:</td>
                      <td>

                        <?php

                          $siptarih = mysqli_query($conn,"SELECT * FROM siparisler WHERE siparis_kodu = '$sipkod'");
                          $tarihyaz = mysqli_fetch_array($siptarih);
                          $kargoid = $tarihyaz["siparis_kargo_id"];

                          $kargofiyat = mysqli_query($conn,"SELECT * FROM kargo_ucret WHERE kargo_ucret_id = '$kargoid'");
                          $kargoyaz = mysqli_fetch_array($kargofiyat);
                          $kargo = $kargoyaz["kargo_ucret"];
                          echo $tarihyaz["siparis_tarihi"];

                        ?>

                      </td>
                      <td class="sip_bilgi_baslik">Alıcı</td>
                      <td>:</td>
                      <td>
                        <?php

                          $alici = mysqli_query($conn,"SELECT * FROM siparis_adres WHERE sipkod = '$sipkod'");
                          $aliciyaz = mysqli_fetch_array($alici);
                          $il = $aliciyaz["il"];
                          $iller = mysqli_query($conn,"SELECT * FROM iller WHERE il_no = '$il'");
                          $ilyaz = mysqli_fetch_array($iller);
                          $il_adi = $ilyaz["isim"];
                          echo $aliciyaz["ad"]." ".$aliciyaz["soyad"];

                        ?>
                      
                      </td>
                      <td class="sip_bilgi_baslik">Ödeme Yöntemi</td>
                      <td>:</td>
                      <td><?php 

                        if($tarihyaz["siparis_odeme_id"] == 1){

                          echo "Kredi Kartı";

                        }else{

                          echo "Havale";

                        }


                       ?></td>
                    </tr>
                    <tr>
                      <td class="sip_bilgi_baslik">Sipariş Kodu</td>
                      <td>:</td>
                      <td><?php echo $sipkod; ?></td>
                      <td class="sip_bilgi_baslik">Adres</td>
                      <td>:</td>
                      <td>
                        <a href="" data-toggle="tooltip" title="<?php echo $aliciyaz['adres']; ?> / <?php echo $aliciyaz['ilce']; ?> / <?php echo $il_adi; ?>"><?php echo $aliciyaz["adres_baslik"]; ?> <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>

                      </td>

                    </tr>
                  </table>

                </div>

                <div class="siparis_bilgi_buton">
                  
                  <a href="#">Kargom Nerede ?</a>

                  <a href="#">Faturam</a>

                </div>

                <div class="temizle"></div>

              </div>


              <div class="siparis_urunler_listele">

                <table class="urun_detaylar">
                <?php
                  $siparis_urunler = mysqli_query($conn,"SELECT * FROM sip_urunler WHERE sip_kodu = '$sipkod'");
                  while($sip_urun_yaz = mysqli_fetch_array($siparis_urunler)){
                ?>
                  <tr>
                    <td><img src="<?php echo $sip_urun_yaz['sip_urun_resim'] ?>"></td>
                    <td>
                    <p class="siparisler_adi"><?php echo $sip_urun_yaz["sip_urun_adi"] ?></p>
                    <p class="siparisler_urun_kodu">Ürün Kodu : <?php echo $sip_urun_yaz["sip_urun_kodu"] ?></p>
                    </td>
                    <td class="siparisler_miktar"><?php echo $sip_urun_yaz["sip_urun_miktar"] ?> <?php echo $sip_urun_yaz["sip_urun_birim"] ?></td>
                    <td class="siparisler_fiyat"><?php echo $urunfiyat = $sip_urun_yaz["sip_urun_miktar"] * $sip_urun_yaz["sip_urun_fiyat"] ?>,00 TL</td>
                  </tr>
                <?php 

                          $toplam = $toplam + $sip_urun_yaz["sip_urun_miktar"] * $sip_urun_yaz["sip_urun_fiyat"];
              } 


              ?>

                </table>                

              </div>

              <div class="siparis_urunler_ozet">

                <div class="sepet_ozet">
                  
                  <div class="sepet_ozet_baslik">SİPARİŞ ÖZETİ</div>

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
                        <td style="float: right;"><b><?php echo $kdvdahil = ((number_format($toplam) / 100) * 8) + number_format($toplam); ?> TL</b></td>
                      </tr>
                      <tr>
                        <td>Kargo</td>
                        <td style="float: right;"><b><?php echo $kargo; ?> TL</b></td>
                      </tr>
                    </table>              

                  </div>

                  <div class="sepet_ozet_toplam">
                    
                    <table>
                      <tr>
                        <td>Toplam</td>
                        <td style="font-weight: bold; font-size:18px; float: right; "><b><?php echo $kdvdahil + $kargo ?> TL</b></td>
                      </tr>
                    </table>
                    
                  </div>



                </div>  


                


              </div>

              <div class="temizle"></div>

              <div class="siparis_detay_adresler1">
                

                <h3>Teslimat Adresi</h3>

                <p><?php echo $aliciyaz["tc_no"]; ?> - <?php echo $aliciyaz["ad"]." ".$aliciyaz["soyad"]; ?> - <?php echo NumarayiFormatla($aliciyaz["tel"]); ?> / <?php echo NumarayiFormatla($aliciyaz["cep_tel"]); ?></p>
                <p><?php echo $aliciyaz["adres"]; ?> / <?php echo $aliciyaz["il"]; ?> / <?php echo $aliciyaz["ilce"]; ?></p>


              </div>
              <div class="siparis_detay_adresler2">
                

                <h3>Fatura Adresi</h3>
                <?php

                  $fatura = mysqli_query($conn,"SELECT * FROM siparis_adres_fatura WHERE f_sipkod = '$sipkod'");
                  $faturayaz = mysqli_fetch_array($fatura);

                 ?>
                <p><?php echo $faturayaz["f_tc_no"]; ?> - <?php echo $faturayaz["f_ad"]." ".$faturayaz["f_soyad"]; ?> - <?php echo NumarayiFormatla($faturayaz["f_tel"]); ?> / <?php echo NumarayiFormatla($faturayaz["f_cep_tel"]); ?></p>
                <p><?php echo $faturayaz["f_adres"]; ?> / <?php echo $faturayaz["f_il"]; ?> / <?php echo $faturayaz["f_ilce"]; ?></p>


              </div>
              <div class="temizle"></div>

            </div>


          </div>



          

        </div>

      </div>

    </div>



</div> 


<?php
include "footer.php";

 ?>