
<?php

include "header.php";

include "menu.php";

 ?>

  	<div class="sag-ic">


      <h2>Kategoriler</h2>


      <div class="sag-ic-tablo">
        
        <table>
          <tr class="baslik">
            <td>id#</td>
            <td>Kategori Adı</td>
            <td>Kategori Grup</td>
            <td>İşlem</td>
          </tr>

          <?php

            $kategori = mysqli_query($conn,"SELECT * FROM kategori_alt");
            while($kategoriyaz = mysqli_fetch_array($kategori)){


           ?> 
          <tr>
            <td><?php echo $kategoriyaz["kategori_alt_id"]; ?>#</td> 
            <td><?php echo $kategoriyaz["kategori_alt_adi"]; ?></td>
            <td><?php


             $ustid = $kategoriyaz["ust_id"]; 

             $ustkategori = mysqli_query($conn,"SELECT * FROM kategori_baslik WHERE kategori_baslik_id = '$ustid'");
             $ustyaz = mysqli_fetch_array($ustkategori);

             echo $ustyaz["kategori_baslik_adi"];



             ?></td>
            <td>
              <a href="kategoriduzenle.php?id=<?php echo $kategoriyaz['kategori_alt_id']; ?>" class="btn btn-primary btn-xs">Düzenle</a>              
              <a href="kategorisil.php?id=<?php echo $kategoriyaz['kategori_alt_id']; ?>" class="btn btn-danger btn-xs">Sil</a> 
            </td>
          </tr>
          <?php } ?>


        </table>        

      </div>






    </div>

  	<div class="temizle"></div>

<?php 

include "footer.php";

?>