
<?php

include "header.php";

include "menu.php";

 ?>

    <div class="sag-ic">


      <h2>Kategori Gruplar</h2>


      <div class="sag-ic-tablo">
        
        <table>
          <tr class="baslik">
            <td>id#</td>
            <td>Kategori Grup Adı</td>
            <td>Kategori Grup</td>
            <td>İşlem</td>
          </tr>

          <?php

            $kategori = mysqli_query($conn,"SELECT * FROM kategori_baslik");
            while($kategoriyaz = mysqli_fetch_array($kategori)){


           ?> 
          <tr>
            <td><?php echo $kategoriyaz["kategori_baslik_id"]; ?>#</td> 
            <td><?php echo $kategoriyaz["kategori_baslik_adi"]; ?></td>
            <td><?php


             $ustid = $kategoriyaz["ust_id"]; 


             if($ustid == 0){

              echo "Kumaşlarımız";

             }elseif($ustid == 1){

              echo "Tuhafiye";

             }elseif($ustid == 2){

              echo "Fırsat Ürünleri";

             }elseif($ustid == 3){

              echo "Bebek Ürünler";

             }elseif($ustid == 4){

              echo "Perde Kumaşları";

             }elseif($ustid == 5){

              echo "Parça Kumaş";

             }elseif($ustid == 6){

              echo "Ev Tekstil";

             }elseif($ustid == 7){

              echo "Giyim";

             }else{

              echo "Hobi";

             }



             ?></td>
            <td>
              <a href="kategorigrupduzenle.php?id=<?php echo $kategoriyaz["kategori_baslik_id"]; ?>" class="btn btn-primary btn-xs">Düzenle</a>              
              <a href="kategorigrupsil.php?id=<?php echo $kategoriyaz["kategori_baslik_id"]; ?>" class="btn btn-danger btn-xs">Sil</a> 
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