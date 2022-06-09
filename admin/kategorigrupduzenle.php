
<?php

include "header.php";

include "menu.php";

 ?>

  	<div class="sag-ic">


      <h2>Kategori Grup Düzenle</h2>
      <form action="" method="post" name="kategori" id="kategori">
      <input type="submit" class="btn btn-primary btn-lg urunekle" name="" value="Düzenle ve Kaydet">

      <div class="sag-ic-tablo2">
        <?php

          $grupid = $_GET["id"];

          $sorgula = mysqli_query($conn,"SELECT * FROM kategori_baslik WHERE kategori_baslik_id = '$grupid'");
          $yaz = mysqli_fetch_array($sorgula);

         ?>
        <table>
          <tr>
            <td>Kategori Adı</td>
            <td><input type="text" name="kategori_adi" value="<?php echo $yaz['kategori_baslik_adi']; ?>"></td>
          </tr>
          <tr>
            <td>Kategori Grup</td>
            <td>
              <select name="kategori_grup" form="kategori">
                <option>**<?php

                  $ustid = $yaz["ust_id"];

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


                 ?></option>
                <option value="0">Kumaşlarımız</option>
                <option value="1">Tuhafiye</option>
                <option value="2">Fırsat Ürünleri</option>
                <option value="3">Bebek Ürünleri</option>
                <option value="4">Perde Kumaşları</option>
                <option value="5">Parça Kumaş</option>
                <option value="6">Ev Tekstil</option>
                <option value="7">Giyim</option>
                <option value="8">Hobi</option>
              </select>
            </td>
          </tr>

        </table>        

        

      </div>
      </form>

      <?php


        if($_POST){


            $isim = $_POST["kategori_adi"];
            $grup = $_POST["kategori_grup"];


            $kategori_ekle = mysqli_query($conn,"UPDATE kategori_baslik SET kategori_baslik_adi='$isim',ust_id='$grup' WHERE kategori_baslik_id = '$grupid'");

            if($kategori_ekle){

              header("location:kategorigrup.php");

            }else{

              echo "<div style='float:right;'>Hata Oluştu</div>";
            }



        }


      ?>




    </div>

  	<div class="temizle"></div>

<?php 

include "footer.php";

?>