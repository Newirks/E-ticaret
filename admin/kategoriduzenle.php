
<?php

include "header.php";

include "menu.php";

 ?>

  	<div class="sag-ic">


      <h2>Kategori Düzenle</h2>
      <form action="" method="post" name="kategori" id="kategori">
      <input type="submit" class="btn btn-primary btn-lg urunekle" name="" value="Düzenle ve Kaydet">

      <div class="sag-ic-tablo2">
        <?php

          $katid = $_GET["id"];

          $sorgula = mysqli_query($conn,"SELECT * FROM kategori_alt WHERE kategori_alt_id = '$katid'");
          $yaz = mysqli_fetch_array($sorgula);

         ?>
        <table>
          <tr>
            <td>Kategori Adı</td>
            <td><input type="text" form="kategori" name="kategori_adi" value="<?php echo $yaz['kategori_alt_adi'] ?>"></td>
          </tr>
          <tr>
            <td>Kategori Grup</td>
            <td>
              <select name="kategori_grup" form="kategori">
                <option><?php

                  $ustid = $yaz["ust_id"];

                  $grupbul = mysqli_query($conn,"SELECT * FROM kategori_baslik WHERE kategori_baslik_id = '$ustid'");
                  $grupyaz = mysqli_fetch_array($grupbul);

                  echo $grupyaz["kategori_baslik_adi"];


                 ?></option>
                <?php

                  $grup = mysqli_query($conn,"SELECT * FROM kategori_baslik");
                  while($grupliste = mysqli_fetch_array($grup)){


                    echo "<option value='".$grupliste["kategori_baslik_id"]."'>".$grupliste["kategori_baslik_adi"]."</option>";

                  }

                 ?>
              </select>
            </td>
          </tr>

        </table>        

        

      </div>
      </form>

      <?php


        if($_POST){


            $ad = $_POST["kategori_adi"];
            $grup = $_POST["kategori_grup"];


            $kategori_ekle = mysqli_query($conn,"UPDATE kategori_alt SET kategori_alt_adi = '$ad' , ust_id = '$grup' WHERE kategori_alt_id = '$katid'");

            if($kategori_ekle){

              header("location:kategoriler.php");

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