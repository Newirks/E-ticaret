
<?php

include "header.php";

include "menu.php";

 ?>

  	<div class="sag-ic">


      <h2>Kampanya Düzenle</h2>
      <p><i>Sadece etiket için yüzde girmeye gerek yok</i></p>
      <form action="" method="post">
      <input type="submit" class="btn btn-primary btn-lg urunekle" name="" value="Kaydet ve Düzenle">

      <div class="sag-ic-tablo2">
        <?php

        $kampid = $_GET["id"];

        $kampsorgu = mysqli_query($conn,"SELECT * FROM kampanya WHERE kampanya_id = '$kampid'");
        $kampyaz = mysqli_fetch_array($kampsorgu);

         ?>
        <table>
          <tr>
            <td>Kampanya Adı</td>
            <td><input type="text" name="kampadi" value="<?php echo $kampyaz['kampanya_adi']; ?>"></td>
          </tr>
          <tr>
            <td>kampanya Yüzdesi</td>
            <td><input type="text" name="kampyuzde" value="<?php echo $kampyaz['kampanya_yuzdesi']; ?>"></td>
          </tr>

        </table>        

        

      </div>

      </form>

      <?php 

      if($_POST){

        $tarih = date('d.m.Y H:i:s');
        $adi = $_POST["kampadi"];
        $yuzde = $_POST["kampyuzde"];


        $duzenle = mysqli_query($conn,"UPDATE kampanya SET kampanya_adi = '$adi',kampanya_yuzdesi = '$yuzde',kampanya_tarih = '$tarih' WHERE kampanya_id = '$kampid'");

        if($duzenle){

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