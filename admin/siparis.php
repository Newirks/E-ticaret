<?php

include "header.php";

include "menu.php";




?>

  	<div class="sag-ic">


      <h2>Bekleyen Siparişler</h2>


      <div class="sag-ic-tablo">
        
        <table>
          <tr class="baslik">
            <td>Sipariş Kodu</td>
            <td>Ödeme Tipi</td>
            <td>Kargo</td>
            <td>Toplam Tutar</td>
            <td>Tarih</td>
            <td>Durum</td>
            <td>İşlem</td>
          </tr>

          <?php

          if($sorgula0 = mysqli_query($conn,"SELECT * FROM siparisler WHERE siparis_durumu = 0")){

            while($yaz0 = mysqli_fetch_array($sorgula0)){

           ?>
                  <tr>
                    <td><?php echo $yaz0["siparis_kodu"] ?></td>
                    <td><?php 

                    $odemeid0 = $yaz0["siparis_odeme_id"];

                    if($odemeid0 == 1){

                      echo "<p>Kredi Kartı ile Ödeme</p>";

                    }else{

                      echo "<p>Havale İle Ödeme</p>";

                    }

                     ?></td>
                    <td><?php 

                    $kargoid0 = $yaz0["siparis_kargo_id"]; 

                    $kargosorgu0 = mysqli_query($conn,"SELECT * FROM kargolar WHERE kargo_id = '$kargoid0'");
                    $kargoyaz0 = mysqli_fetch_array($kargosorgu0);

                    echo $kargoyaz0["kargo_adi"];


                    ?></td>
                    <td><?php echo $yaz0["siparis_tutar"] ?> TL</td>
                    <td><?php echo $yaz0["siparis_tarihi"] ?></td>
                    <td><div style="background-color:orange; padding:2px; border-radius:5px; color:white;">Beklemede</div></td>
                    <td>
                      <button type="button" class="btn btn-primary btn-xs">Siparişe Git</button>              

                    </td>
                  </tr>

          <?php 

            }
            }

          ?>

        </table>        

      </div>


      <h2>Onaylı Siparişler</h2>


      <div class="sag-ic-tablo">
        
        <table>
          <tr class="baslik">
            <td>Sipariş Kodu</td>
            <td>Ödeme Tipi</td>
            <td>Kargo</td>
            <td>Toplam Tutar</td>
            <td>Tarih</td>
            <td>Durum</td>
            <td>İşlem</td>
          </tr>
          <?php

          if($sorgula1 = mysqli_query($conn,"SELECT * FROM siparisler WHERE siparis_durumu = 1")){

            while($yaz1 = mysqli_fetch_array($sorgula1)){

           ?>
                  <tr>
                    <td><?php echo $yaz1["siparis_kodu"] ?></td>
                    <td><?php 

                    $odemeid1 = $yaz1["siparis_odeme_id"];

                    if($odemeid1 == 1){

                      echo "<p>Kredi Kartı ile Ödeme</p>";

                    }else{

                      echo "<p>Havale İle Ödeme</p>";

                    }

                     ?></td>
                    <td><?php 

                    $kargoid1 = $yaz1["siparis_kargo_id"]; 

                    $kargosorgu1 = mysqli_query($conn,"SELECT * FROM kargolar WHERE kargo_id = '$kargoid1'");
                    $kargoyaz1 = mysqli_fetch_array($kargosorgu1);

                    echo $kargoyaz1["kargo_adi"];


                    ?></td>
                    <td><?php echo $yaz1["siparis_tutar"] ?> TL</td>
                    <td><?php echo $yaz1["siparis_tarih"] ?></td>
                    <td><div style="background-color:green; padding:2px; border-radius:5px; color:white;">Onaylandı</div></td>
                    <td>
                      <button type="button" class="btn btn-primary btn-xs">Siparişe Git</button>              

                    </td>
                  </tr>

          <?php 

            }
            }

          ?>
        </table>        

      </div>



      <h2>İptal Edilen Siparişler</h2>


      <div class="sag-ic-tablo">
        
        <table>
          <tr class="baslik">
            <td>Sipariş Kodu</td>
            <td>Ödeme Tipi</td>
            <td>Kargo</td>
            <td>Toplam Tutar</td>
            <td>Tarih</td>
            <td>Durum</td>
            <td>İşlem</td>
          </tr>
          <?php

          if($sorgula2 = mysqli_query($conn,"SELECT * FROM siparisler WHERE siparis_durumu = 2")){

            while($yaz2 = mysqli_fetch_array($sorgula2)){

           ?>
                  <tr>
                    <td><?php echo $yaz2["siparis_kodu"] ?></td>
                    <td><?php 

                    $odemeid2 = $yaz2["siparis_odeme_id"];

                    if($odemeid2 == 1){

                      echo "<p>Kredi Kartı ile Ödeme</p>";

                    }else{

                      echo "<p>Havale İle Ödeme</p>";

                    }

                     ?></td>
                    <td><?php 

                    $kargoid2= $yaz2["siparis_kargo_id"]; 

                    $kargosorgu2 = mysqli_query($conn,"SELECT * FROM kargolar WHERE kargo_id = '$kargoid2'");
                    $kargoyaz2 = mysqli_fetch_array($kargosorgu2);

                    echo $kargoyaz2["kargo_adi"];


                    ?></td>
                    <td><?php echo $yaz2["siparis_tutar"] ?> TL</td>
                    <td><?php echo $yaz2["siparis_tarih"] ?></td>
                    <td><div style="background-color:red; padding:2px; border-radius:5px; color:white;">İptal Edildi</div></td>
                    <td>
                      <button type="button" class="btn btn-primary btn-xs">Siparişe Git</button>              

                    </td>
                  </tr>

          <?php 

            }
            }

          ?>
        </table>        

      </div>

      <h2>Kargodaki Siparişler</h2>


      <div class="sag-ic-tablo">
        
        <table>
          <tr class="baslik">
            <td>Sipariş Kodu</td>
            <td>Ödeme Tipi</td>
            <td>Kargo</td>
            <td>Toplam Tutar</td>
            <td>Tarih</td>
            <td>Durum</td>
            <td>İşlem</td>
          </tr>
          <?php

          if($sorgula3 = mysqli_query($conn,"SELECT * FROM siparisler WHERE siparis_durumu = 3")){

            while($yaz3 = mysqli_fetch_array($sorgula3)){

           ?>
                  <tr>
                    <td><?php echo $yaz3["siparis_kodu"] ?></td>
                    <td><?php 

                    $odemeid3 = $yaz3["siparis_odeme_id"];

                    if($odemeid3 == 1){

                      echo "<p>Kredi Kartı ile Ödeme</p>";

                    }else{

                      echo "<p>Havale İle Ödeme</p>";

                    }

                     ?></td>
                    <td><?php 

                    $kargoid3 = $yaz3["siparis_kargo_id"]; 

                    $kargosorgu3 = mysqli_query($conn,"SELECT * FROM kargolar WHERE kargo_id = '$kargoid3'");
                    $kargoyaz3 = mysqli_fetch_array($kargosorgu3);

                    echo $kargoyaz3["kargo_adi"];


                    ?></td>
                    <td><?php echo $yaz3["siparis_tutar"] ?> TL</td>
                    <td><?php echo $yaz3["siparis_tarih"] ?></td>
                    <td><div style="background-color:blue; padding:2px; border-radius:5px; color:white;">Kargoda</div></td>
                    <td>
                      <button type="button" class="btn btn-primary btn-xs">Siparişe Git</button>              

                    </td>
                  </tr>

          <?php 

            }
            }

          ?>
        </table>        

      </div>


    </div>

  	<div class="temizle"></div>



<?php 

include "footer.php";

?>