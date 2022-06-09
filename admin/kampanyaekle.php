
<?php

include "header.php";

include "menu.php";

 ?>

  	<div class="sag-ic">


      <h2>Kampanya Ekle</h2>
      <p><i>Sadece etiket için yüzde girmeye gerek yok</i></p>
      <form action="" method="post">
      <input type="submit" class="btn btn-primary btn-lg urunekle" name="" value="Kampanya Ekle">

      <div class="sag-ic-tablo2">
        
        <table>
          <tr>
            <td>Kampanya Adı</td>
            <td><input type="text" name="kampadi"></td>
          </tr>
          <tr>
            <td>kampanya Yüzdesi</td>
            <td><input type="text" name="kampyuzde"></td>
          </tr>

        </table>        

        

      </div>

      </form>

      <?php 

      if($_POST){

        $tarih = date('d.m.Y H:i:s');
        $adi = $_POST["kampadi"];
        $yuzde = $_POST["kampyuzde"];


        $ekle = mysqli_query($conn,"INSERT INTO kampanya (kampanya_adi,kampanya_yuzdesi,kampanya_tarih) VALUES ('$adi','$yuzde','$tarih')");

        if($ekle){

          header("location:kampanyalar.php");


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