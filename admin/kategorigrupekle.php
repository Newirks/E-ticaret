
<?php

include "header.php";

include "menu.php";

 ?>

  	<div class="sag-ic">


      <h2>Kategori Grup Ekle</h2>
      <form action="" method="post" name="grupekle" id="grupekle">
      <input type="submit" class="btn btn-primary btn-lg urunekle" name="" value="Kategori Grup Ekle">

      <div class="sag-ic-tablo2">
        

        <table>
          <tr>
            <td>Kategori Grup Adı</td>
            <td><input type="text" name="grupadi"></td>
          </tr>
          <tr>
            <td>Kategori Ana Grup</td>
            <td>
              <select name="grup" form="grupekle">
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


            $adi = $_POST["grupadi"];
            $grup = $_POST["grup"];


            $grup_ekle = mysqli_query($conn,"INSERT INTO kategori_baslik (kategori_baslik_adi,ust_id) VALUES ('$adi','$grup')");

            if($grup_ekle){

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