
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
            <td>Kampanya Adı</td>
            <td>Kampanya Yüzde %</td>
            <td>Tarih</td>
            <td>İşlem</td>
          </tr>
          <?php 

            $sorgula = mysqli_query($conn,"SELECT * FROM kampanya");
            while($yaz = mysqli_fetch_array($sorgula)){

           ?>
          <tr>
            <td>#<?php echo $yaz["kampanya_id"]; ?></td> 
            <td><?php echo $yaz["kampanya_adi"]; ?></td>
            <td>%<?php echo $yaz["kampanya_yuzdesi"]; ?></td>
            <td><?php echo $yaz["kampanya_tarih"]; ?></td>
            <td>
              <a href="kampanyaduzenle.php?id=<?php echo $yaz['kampanya_id']; ?>" class="btn btn-primary btn-xs">Düzenle</a>              
              <a href="kampanyasil.php?id=<?php echo $yaz['kampanya_id']; ?>" class="btn btn-danger btn-xs">Sil</a> 
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