<?php

include "header_main.php";
if( !isset($_SESSION['uye_id']) ) {
  header("Location: index.php");
  exit;
 }
$adres_id = $_GET["id"];

$adres_sorgula = mysqli_query($conn,"SELECT * FROM uyeler_adres_defter WHERE uye_adres_id = '$adres_id' ");
$adresyaz = $adres_sorgula->fetch_array();

?>

<form action="adress_update_add.php?id=$adres_id" method="post">
<div class="container-fluid uyeprofil">
  
  <div class="container">
    
    <div class="row">
      
      <div class="col-md-12">
        
        <div class="uyeprofil_ust">
          
          <h3>Teslimat Adresi Düzenle - <?php echo $adresyaz["uye_adres_baslik"] ?></h3>

        </div>

      </div>

    </div>
    <div class="row">
      
      <div class="col-md-12">
        

          <div class="yeni_adres">
            
            
            <form action="adress_add.php" method="post" name="adres" id="adres">
            <table>
              
              <tr>
                <td><input type="text" name="baslik" value="<?php echo $adresyaz['uye_adres_baslik'] ?>" ></td>
                <td><i>Örn : Ev yada İş</i></td>
              </tr>
              <tr>
                <td><input type="text" name="ad" value="<?php echo $adresyaz['uye_adres_ad'] ?>" ></td>
                <td><input type="text" name="soyad" value="<?php echo $adresyaz['uye_adres_soyad'] ?>" ></td>
              </tr>
              <tr>
                <td>
                  <select name="ulke" form="adres" >
                    <option value=""><?php echo $adresyaz["uye_adres_ulke"] ?></option>
                    <option value="Türkiye">Türkiye</option>
                  </select>
                </td>
                <td>
                  <select name="sehir" form="adres" >
                    <option value=""><?php 

                    $sehir_id = $adresyaz["uye_adres_sehir"];
                    $il = mysqli_query($conn,"SELECT * FROM iller WHERE il_no = '$sehir_id'");
                    $iyaz = $il->fetch_array();
                    echo $iyaz["isim"]; 


                    ?></option>
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
                <td><input type="text" name="semt" value="<?php echo $adresyaz['uye_adres_semt'] ?>" ></td>
                <td><input type="text" name="cep"  value="<?php echo $adresyaz['uye_adres_cep'] ?>"></td>
              </tr>
              <tr>
                <td><input type="text"  name="tel" value="<?php echo $adresyaz['uye_adres_telefon'] ?>"></td>
                <td><input type="text" name="tc" value="<?php echo $adresyaz['uye_adres_tc'] ?>"></td>
              </tr>
              <tr><td colspan="2"><textarea name="adres" placeholder="* Adres"><?php echo $adresyaz["uye_adres_adres"] ?></textarea></td></tr>
            </table>

            <div class="buton_grup">

                
                <input type="submit" class="kaydet" name="kaydetadres" value="Kaydet">
            

            </div>
          </form>
            <div class="temizle"></div>

          </div>  
      

      </div>

    </div>


  </div>

</div>
</form>



<?php
include "footer.php";

 ?>