
<?php

include "header.php";

include "menu.php";

 ?>

    <div class="sag-ic">


      <h2>Ürün Ekle</h2>
<form action="urunekle_work.php" method="post" name="urunekle" id="urunekle" enctype="multipart/form-data">
      <input type="submit" class="btn btn-primary btn-lg urunekle" name="" value="Ürünü Yükle">

      <div class="sag-ic-tablo2">
        
        <table>
          <tr>
            <td>Ürün Kodu</td>
            <td><input type="text" name="urunkodu"></td>
          </tr>
          <tr>
            <td>Ürün Adı</td>
            <td><input type="text" name="urunadi"></td>
          </tr>
          <tr>
            <td>Bilgi</td>
            <td><textarea name="urunbilgi1"></textarea></td>
          </tr>
          <tr>
            <td>Bilgi 2</td>
            <td><textarea name="urunbilgi2"></textarea></td>
          </tr>
          <tr>
            <td>Stok</td>
            <td><input type="text" name="urunstok"></td>
          </tr>
          <tr>
            <td>Fiyat</td>
            <td><input type="text" name="urunfiyat"></td>
          </tr>
          <tr>
            <td>KDV Yüzdesi</td>
            <td>
              <select name="urunkdv" form="urunekle" >
                <option>kdv Seçin</option>
                <option value="8">8</option>
                <option value="18">18</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Kategori</td>
            <td>
              <select name="urunkategori" form="urunekle">
                <option>Kategori Seçin</option>
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
              <select name="urunkampanya" form="urunekle">
                <option>Kampanya Seçin</option>
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
              <select name="urunbirim" form="urunekle">
                <option value="1">Adet</option>
                <option value="2">Metre</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Resim 1</td>
            <td><input type="file" name="resim1"></td>
          </tr>
          <tr>
            <td>Resim 2</td>
            <td><input type="file" name="resim2"></td>
          </tr>
          <tr>
            <td>Resim 3</td>
            <td><input type="file" name="resim3"></td>
          </tr>
          <tr>
            <td>Resim 4</td>
            <td><input type="file" name="resim4"></td>
          </tr>
          <tr>
            <td>Resim 5</td>
            <td><input type="file" name="resim5"></td>
          </tr>
          <tr>
            <td>Yeni Ürün</td>
            <td><input type="checkbox" name="yeniurun"></td>
          </tr>
        </table>        

        

      </div>






    </div>

    <div class="temizle"></div>

<?php 

include "footer.php";

?>