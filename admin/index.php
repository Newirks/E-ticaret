
<?php

include "header.php";

include "menu.php";

 ?>


  	<div class="sag-ic">
     
      <div class="container-fluid">
        
        <div class="row">
          
          <div class="col-md-3">
            
            <div class="yeniuye">Yeni Üyeler <span>0</span></div>

          </div>

          <div class="col-md-3">
            <?php

              $uyeler = mysqli_query($conn,"SELECT * FROM uyeler");
              $saydiruyeler = mysqli_num_rows($uyeler);

             ?>             
            <div class="yeniuye">Toplam Üyeler <span><?php echo $saydiruyeler; ?></span></div>

          </div>

          <div class="col-md-3">
            <?php

              $siparisler = mysqli_query($conn,"SELECT * FROM siparisler");
              $saydirsiparis = mysqli_num_rows($siparisler);

             ?>            
            <div class="yeniuye">Toplam Sipariş <span><?php echo $saydirsiparis; ?></span></div>

          </div>

          <div class="col-md-3">
            <?php

              $urunler = mysqli_query($conn,"SELECT * FROM urunler");
              $saydirurun = mysqli_num_rows($urunler);

             ?>
            <div class="yeniuye">Toplam Ürünler <span><?php echo $saydirurun; ?></span></div>

          </div>

        </div>

        <div class="row">
          
          <div class="col-md-12">
            
            <h2>Yeni Gelen Siparişler</h2>


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

                $sipsorgula = mysqli_query($conn,"SELECT * FROM siparisler");
                $saydir = mysqli_num_rows($sipsorgula);

                if($saydir > 0){

                	while($sipyaz = mysqli_fetch_array($sipsorgula)){  

                	
                	


                 ?>
	                <tr>
	                  <td><?php echo $sipyaz["siparis_kodu"] ?></td>
	                  <td><?php 

			              $odemeid = $sipyaz["siparis_odeme_id"];

			              if($odemeid == 1){

			                echo "<p>Kredi Kartı ile Ödeme</p>";

			              }else{

			                echo "<p>Havale İle Ödeme</p>";

			              }

	                   ?></td>
	                  <td><?php 

	                  $kargoid = $sipyaz["siparis_kargo_id"]; 

	                  $kargosorgu = mysqli_query($conn,"SELECT * FROM kargolar WHERE kargo_id = '$kargoid'");
	                  $kargoyaz = mysqli_fetch_array($kargosorgu);

	                  echo $kargoyaz["kargo_adi"];


	                  ?></td>
	                  <td><?php echo $sipyaz["siparis_tutar"] ?> TL</td>
	                  <td><?php echo $sipyaz["siparis_tarihi"] ?></td>
	                  <td><?php 

	                  if($sipyaz["siparis_durum"] == 0){

	                  	echo "<div style='background-color:orange; padding:2px; border-radius:5px; color:white;'>Beklemede</div>";

	                  }elseif($sipyaz["siparis_durum"] == 1){

	                  	echo "<div style='background-color:green; padding:2px; border-radius:5px; color:white;'>Onaylandı</div>";

	                  }elseif($sipyaz["siparis_durum"] == 2){

	                  	echo "<div style='background-color:red; padding:2px; border-radius:5px; color:white;'>İptal Edildi</div>";

	                  }else{

	                  	echo "<div style='background-color:blue; padding:2px; border-radius:5px; color:white;'>Kargoda</div>";

	                  }  

	                  ?></td>
	                  <td>
	                    <button type="button" class="btn btn-primary btn-xs">Siparişe Git</button>              

	                  </td>
	                </tr>

				<?php 

					}

				}else {

						echo "<center><i>Henüz Yeni Sipariş Bulunmamaktadır.</i></center>";
					}
					 ?>

              </table>        

            </div>

          </div>

        </div>

      </div>

    </div>

    <div class="temizle"></div>

<?php 

include "footer.php";

?>