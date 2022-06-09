<?php

include "header_main.php";
if( !isset($_SESSION['uye_id']) ) {
  header("Location: index.php");
  exit;
 }


?>


<div class="container-fluid uyeprofil">
  
  <div class="container">
    
    <div class="row">
      
      <div class="col-md-12">
        
        <div class="uyeprofil_ust">
          
          <h3>Adres Defteri</h3>

        </div>

      </div>

    </div>
    <div class="row">
      
      
      <div class="col-md-12">
        
        <!-- Button trigger modal -->
        <button type="button" class="adresekle" data-toggle="modal" data-target="#myModal">
          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Yeni Adres Ekle
        </button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Yeni Adres Ekle</h4>
              </div>
              <div class="modal-body">
                
          <div class="yeni_adres">
            
            
            <form action="adress_add.php" method="post" name="adres" id="adres">
            <table>
              
              <tr>
                <td><input type="text" name="baslik" placeholder="*Adres Başlığı" ></td>
                <td><i>Örn : Ev yada İş</i></td>
              </tr>
              <tr>
                <td><input type="text" name="ad" placeholder="* Ad" ></td>
                <td><input type="text" name="soyad" placeholder="* Soyad" ></td>
              </tr>
              <tr>
                <td>
                  <select name="ulke" form="adres" >
                    <option value="">-- Ülke Seçiniz --</option>
                    <option value="Türkiye">Türkiye</option>
                  </select>
                </td>
                <td>
                  <select name="sehir" form="adres" >
                    <option value="">-- Şehir Seçiniz --</option>
                    <?php

                      $iller = mysqli_query($conn,"SELECT * FROM iller");
                      while($il_yaz = $iller->fetch_array()){

                        echo "<option value='".$il_yaz["il_no"]."'>".$il_yaz["isim"]."</option>";

                      }

                     ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td><input type="text" name="semt" placeholder="* Semt" ></td>
                <td><input type="text" name="cep"  placeholder="* Cep Telefonu"></td>
              </tr>
              <tr>
                <td><input type="text"  name="tel" placeholder="Telefon"></td>
                <td><input type="text" name="tc" placeholder="* TC Kimlik No"></td>
              </tr>
              <tr><td colspan="2"><textarea name="adres" placeholder="* Adres"></textarea></td></tr>
            </table>

            <div class="buton_grup">

                
                <input type="submit" class="kaydet" name="kaydet" value="Kaydet">
            

            </div>
          </form>
            <div class="temizle"></div>

          </div>                

              </div>

            </div>
          </div>
        </div>       

      </div>

    </div>
    <div class="row">

    <?php

      $adres_defter = mysqli_query($conn,"SELECT * FROM uyeler_adres_defter WHERE uye_id = '$uyeid'");
      while($adresyaz = $adres_defter->fetch_array()){
      $sehirid = $adresyaz["uye_adres_sehir"];
      $adresid = $adresyaz["uye_adres_id"];

      $iller = mysqli_query($conn,"SELECT * FROM iller WHERE il_no = '$sehirid'");
      $ilyaz = $iller->fetch_array();

     ?> 


      
      <div class="col-md-6">
        
        <div class="adres">

          <p><b>Teslimat Adresi :</b> <?php echo $adresyaz["uye_adres_baslik"]; ?></p>
          <p><b><?php echo $adresyaz["uye_adres_ad"]; ?> <?php echo $adresyaz["uye_adres_soyad"]; ?></b></p>
          <p><b>Adres :</b> <?php echo $adresyaz["uye_adres_adres"]; ?> - <?php echo $adresyaz["uye_adres_semt"]; ?> / <?php echo $ilyaz["isim"]; ?></p>
          <p><b>Cep Telefon :</b> <?php echo NumarayiFormatla($adresyaz["uye_adres_cep"]); ?></p>
          <p><b>Telefon :</b> <?php echo NumarayiFormatla($adresyaz["uye_adres_telefon"]); ?></p>

          <p><a href="adress_update.php?id=<?php echo $adresid; ?>">Düzenle</a><a href="adress_del.php?id=<?php echo $adresid; ?>">Sil</a></p>
        </div>


      </div>

   <?php 

     } 

      $fatura_defter = mysqli_query($conn,"SELECT * FROM uyeler_fatura_defter WHERE uye_id = '$uyeid'");
      while($faturayaz = $fatura_defter->fetch_array()){
      $faturaid = $faturayaz["uye_fatura_id"];

      $iller = mysqli_query($conn,"SELECT * FROM iller WHERE il_no = '$sehirid'");
      $ilyaz = $iller->fetch_array();     

     ?>     

      <div class="col-md-6">
        
        <div class="adres">

          <p><b>Fatura Adresi :</b> <?php echo $faturayaz["uye_fatura_baslik"]; ?></p>
          <p><b><?php echo $faturayaz["uye_fatura_ad"]; ?> <?php echo $faturayaz["uye_fatura_soyad"]; ?></b></p>
          <p><b>Adres :</b> <?php echo $faturayaz["uye_fatura_adres"]; ?> - <?php echo $faturayaz["uye_fatura_semt"]; ?> / <?php echo $ilyaz["isim"]; ?></p>
          <p><b>Cep Telefon :</b> <?php echo NumarayiFormatla($faturayaz["uye_fatura_cep"]); ?></p>
          <p><b>Telefon :</b> <?php echo NumarayiFormatla($faturayaz["uye_fatura_telefon"]); ?></p>

          <p><a href="adress_update2.php?id=<?php echo $faturaid; ?>">Düzenle</a><a href="adress_del.php?id=<?php echo $faturaid; ?>">Sil</a></p>
        </div>

      </div>

    <?php } ?>



    </div>

  </div>

</div>




<?php
include "footer.php";

 ?>