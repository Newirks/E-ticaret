
<?php

include "header.php";

include "menu.php";

 ?>


    <div class="sag-ic">


      <h2>Tüm Ürünler</h2>


      <div class="sag-ic-tablo">
        
        <table>
          <tr class="baslik">
            <td>id#</td>
            <td>Ürün Resim</td>
            <td>Ürün Kodu</td>
            <td>Ürün Adı</td>
            <td>Ürün Stok</td>
            <td>Ürün Fiyat</td>
            <td>Kampanya ?</td>
            <td>Birimi</td>
            <td>Tarih</td>
            <td>İşlem</td>
          </tr>


          <?php 

          $urunsorgula = mysqli_query($conn,"SELECT * FROM urunler");
          while($urunyaz = mysqli_fetch_array($urunsorgula)){

          ?>
          <tr>
            <td>#<?php echo $urunyaz["urun_id"] ?></td>
            <td><img style="width: 50px;" src="<?php echo $urunyaz['urun_resim']; ?>"></td>
            <td><?php echo $urunyaz["urun_kodu"] ?></td>
            <td><?php echo $urunyaz["urun_adi"] ?></td>
            <td><?php echo $urunyaz["urun_stok"] ?></td>
            <td><?php echo $urunyaz["urun_fiyat"] ?> TL</td>
            <td><?php echo $urunyaz["urun_kampanya_id"] ?></td>
            <td><?php echo $urunyaz["urun_birim"] ?></td>
            <td><?php echo $urunyaz["urun_tarih"] ?></td>
            <td>
              <a class="btn btn-primary btn-xs" href="urun_duzenle?id=<?php echo $urunyaz['urun_id'] ?>">Düzenle</a>              
              <button type="button" class="btn btn-danger btn-xs">Sil</button> 
            </td>
          </tr>

          <?php

            }

           ?>


        </table>        

      </div>






    </div>

    <div class="temizle"></div>

<?php 

include "footer.php";

?>