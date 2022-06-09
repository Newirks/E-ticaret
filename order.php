<?php

include "header_main.php";
if( !isset($_SESSION['uye_id']) ) {
  header("Location: index.php");
  exit;
 }



?>


<div class="container-fluid uyeprofil">
  
  <div class="container">
    
    <div class="row">
      
      <div class="col-md-12">
        
        <div class="uyeprofil_ust">
          
          <h3>Siparişler</h3>

        </div>

      </div>

    </div>

    <div class="row uyeprofil_alt">
      
      <div class="col-md-12">
        

        <table class="siparisler_tablo">
          <thead>
            <td>#Sipariş Kodu</td>
            <td>Sipariş Tarihi</td>
            <td>Sepet Adedi</td>
            <td>Teslim Adresi</td>
            <td>Fatura Adresi</td>
            <td>Toplam Tutar</td>
            <td>Durum</td>
            <td>işlemler</td>
          </thead>

<?php

$siparis_sorgu = mysqli_query($conn,"SELECT * FROM siparisler WHERE uye_id = '$uyeid'");
while($siparisleri_yaz = mysqli_fetch_array($siparis_sorgu)){

 ?>          

          <tr>
            <td><?php echo $siparisleri_yaz["siparis_kodu"] ?></td>
            <td><?php echo $siparisleri_yaz["siparis_tarihi"] ?></td>
            <td>
              
              <?php
                $sipkodu = $siparisleri_yaz["siparis_kodu"];
                $urunlerisay = mysqli_query($conn,"SELECT * FROM sip_urunler WHERE sip_kodu = '$sipkodu'");
                $saydir = mysqli_num_rows($urunlerisay);
                echo $saydir ." Tip";

               ?>

            </td>
            <td>
              
              <?php 

                $siparis_adres_bul = mysqli_query($conn,"SELECT * FROM siparis_adres WHERE sipkod = '$sipkodu'");
                $adresyaz = mysqli_fetch_array($siparis_adres_bul);
                echo $adresyaz["adres_baslik"];

              ?>

            </td>
            <td>Ev</td>
            <td><?php echo $siparisleri_yaz["siparis_tutar"] ?></td>
            <td><span class="bekleniyor">Bekleniyor</span></td>
            <td>
              <a href="order_detail.php?sid=<?php echo $sipkodu; ?>">Detay</a>
              <a href="#">Fatura</a>
            </td>

          </tr>

<?php } ?>


        </table>


      </div>



      

    </div>

  </div>

</div>


<?php
include "footer.php";

 ?>