
<?php

include "header.php";

include "menu.php";

$urunid = $_GET["id"];

$urunduzenle = mysqli_query($conn,"SELECT * FROM urunler WHERE urun_id = '$urunid'");
$urunyaz = mysqli_fetch_array($urunduzenle);

 ?>
 	<form action="urun_duzenle_work.php?id=<?php echo $urunid; ?>" method="post" name="urun_duzenle" id="urun_duzenle">
    <div class="sag-ic">


      <h2>Ürün Ekle</h2>

      <input type="submit" class="btn btn-primary btn-lg urunekle" name="" value="Ürünü Düzenle ve Kaydet">

      <div class="sag-ic-tablo2">
        
        <table>
          <tr>
            <td>Ürün Kodu</td>
            <td><input type="text" name="urunkodu" value="<?php echo $urunyaz['urun_kodu'] ?>"></td>
          </tr>
          <tr>
            <td>Ürün Adı</td>
            <td><input type="text" name="urunadi" value="<?php echo $urunyaz['urun_adi'] ?>"></td>
          </tr>
          <tr>
            <td>Bilgi</td>
            <td><textarea name="urunbilgi1"><?php echo $urunyaz["urun_bilgi_1"] ?></textarea></td>
          </tr>
          <tr>
            <td>Bilgi 2</td>
            <td><textarea name="urunbilgi2"><?php echo $urunyaz["urun_bilgi_2"] ?></textarea></td>
          </tr>
          <tr>
            <td>Stok</td>
            <td><input type="text" name="urunstok" value="<?php echo $urunyaz['urun_stok'] ?>"></td>
          </tr>
          <tr>
            <td>Fiyat</td>
            <td><input type="text" name="urunfiyat" value="<?php echo $urunyaz['urun_fiyat'] ?>"></td>
          </tr>
          <tr>
            <td>KDV Yüzdesi</td>
            <td>
              <select name="urunkdv" form="urun_duzenle" >
              	<option><?php echo $urunyaz["urun_kdv"] ?></option>
                <option value="8">8</option>
                <option value="18">18</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Kategori</td>
            <td>
              <select name="urunkategori" form="urun_duzenle">
                  <?php 

                    $kategori_id = $urunyaz["urun_kategori_id"];

                    $katesorgula0 = mysqli_query($conn,"SELECT * FROM kategori_alt WHERE kategori_alt_id = '$kategori_id'");
                    $kategori_adi_yaz = mysqli_fetch_array($katesorgula0);

                     

                  ?>                
                <option value="<?php echo $kategori_id; ?>"><?php echo $kategori_adi_yaz["kategori_alt_adi"]; ?></option>
              	<?php 

              		$katesorgula = mysqli_query($conn,"SELECT * FROM kategori_alt");
              		while($kateyaz = mysqli_fetch_array($katesorgula)){

              			echo "<option value='".$kateyaz["kategori_alt_id"]."'>".$kateyaz["kategori_alt_adi"]."</option>";
              		}

              	?>
                
              </select>
            </td>
          </tr>
          <tr>
            <td>Kampanya</td>
            <td>
              <select name="urunkampanya" form="urun_duzenle">
              	<?php 

              		$kampsorgula = mysqli_query($conn,"SELECT * FROM kampanya");
              		while($kampyaz = mysqli_fetch_array($kampsorgula)){

              			echo "<option value='".$kampyaz["kampanya_id"]."'>".$kampyaz["kampanya_adi"]."</option>";
              		}

              	?>
              </select>
            </td>
          </tr>
          <tr>
            <td>Ürün Birimi</td>
            <td>
              <select name="urunbirim" form="urun_duzenle">
                <option value="1">Adet</option>
                <option value="2">Metre</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Yeni Ürün</td>
            <td><input type="checkbox" name="yeniurun" value="1"></td>
          </tr>
          </form>
          <tr>
            <td>Resim 1</td>
            <td>
            	
              <form action="resim1.php?id=<?php echo $urunid; ?>" method="post" enctype="multipart/form-data">
                <img style="width: 80px;" src="<?php echo $urunyaz['urun_resim'] ?>">
                <input type="file" name="urunresim1">
                <input class='btn btn-primary' type='submit' name='resimguncelle' value='Resim 1 Güncelle'>
              </form>

            </td>
        	</tr>
            	


          <?php
          	$i = 1;
          	$resimbul = mysqli_query($conn,"SELECT * FROM urunler_resimler WHERE urunler_id = '$urunid'");
          	while($resimyaz = mysqli_fetch_array($resimbul)){
          	$i++;


          	echo "

          		<tr>
	          	<td>Resim ".$i."(".$resimyaz['resimler_id'].")</td>
	            <td>
	            
	            <img style='width: 80px;' src='".$resimyaz['resimler_yol']."'>	            
	            <input type='file' name='resimler'>
	            <input class='btn btn-primary' type='submit' name='resimguncelle' value='Resim ".$i." Güncelle'>
	          	</td>
	          	</tr>


          	";


          	}

           ?>
           
          


        </table>        

      </div>

    </div>
   

    <div class="temizle"></div>

<?php 

include "footer.php";

?>