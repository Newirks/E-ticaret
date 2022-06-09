<?php

include "header_main.php";
if( !isset($_SESSION['uye_id']) ) {
  header("Location: index.php");
  exit;
 }

$uyebilgi = mysqli_query($conn,"SELECT * FROM uyeler WHERE uye_id = '$uyeid' ");
$yaz = $uyebilgi->fetch_array();

?>


<div class="container-fluid uyeprofil">
  
  <div class="container">
    
    <div class="row">
      
      <div class="col-md-12">
        
        <div class="uyeprofil_ust">
          
          <h3>Üye Bilgileri</h3>

        </div>

      </div>

    </div>

    <div class="row">
      

      <div class="row hidden-xs hidden-sm">
        
        <div class="col-md-12">

          <form action="member_update.php" method="post" name="uyelik_form" id="uyelik_form">

            <table class="uyeol_tablo" style="margin-left: auto; margin-right: auto;">
              <tr>
                <td class="uyeol_tablo_name">Adı</td>
                <td class="uyeol_tablo_input"><input type="text" name="uye_adi" class="uyeol_tablo_text" value="<?php echo $yaz["uye_adi"]; ?>" required/></td>
              </tr>
              <tr>
                <td class="uyeol_tablo_name">Soyadı</td>
                <td class="uyeol_tablo_input"><input type="text" name="uye_soyadi" class="uyeol_tablo_text" value="<?php echo $yaz["uye_soyadi"]; ?>" required/></td>
              </tr>
              <tr>
                <td class="uyeol_tablo_name">Email</td>
                <td class="uyeol_tablo_input"><input type="email" name="uye_email" class="uyeol_tablo_text" value="<?php echo $yaz["uye_email"]; ?>" required/></td>
              </tr>
              <tr>
                <td class="uyeol_tablo_name">Telefon</td>
                <td class="uyeol_tablo_input"><input type="text" pattern="\d{11}" name="uye_tel" class="uyeol_tablo_text" value="<?php echo $yaz["uye_tel"]; ?>" required/></td>
              </tr>
              <tr>
                <td class="uyeol_tablo_name">Şifre</td>
                <td class="uyeol_tablo_input"><input type="password" name="uye_sifre" class="uyeol_tablo_text" value="<?php echo $yaz["uye_sifre"]; ?>" required/></td>
              </tr>
              <tr>
                <td class="uyeol_tablo_name">Şifre Tekrar</td>
                <td class="uyeol_tablo_input"><input type="password" name="uye_tekrar_sifre" class="uyeol_tablo_text" value="<?php echo $yaz["uye_tekrar_sifre"]; ?>" required/></td>
              </tr>
              <tr>
                <td class="uyeol_tablo_name">Cinsiyet</td>
                <td class="uyeol_tablo_input">

                  <?php

                    if($yaz["uye_cinsiyet"] == 1){

                      echo '

                  <label class="example-radio">
                      Kadın
                      <input type="radio" checked="checked" name="uye_cinsiyet" value="1" id="kadın">
                      <span class="checkmark-radio"></span>
                  </label>
                  <label class="example-radio">
                      Erkek
                      <input type="radio" name="uye_cinsiyet" value="2" id="erkek">
                      <span class="checkmark-radio"></span>
                  </label>


                      ';



                    }else{


                      echo '

                  <label class="example-radio">
                      Kadın
                      <input type="radio" name="uye_cinsiyet" value="1" id="kadın">
                      <span class="checkmark-radio"></span>
                  </label>
                  <label class="example-radio">
                      Erkek
                      <input type="radio" checked="checked" name="uye_cinsiyet" value="2" id="erkek">
                      <span class="checkmark-radio"></span>
                  </label>


                      ';

                    }

                   ?>

   

                </td>
              </tr>


              <tr>
                <td></td>
                <td>

                    <button type="submit" name="kaydet" class="uyeol_kaydet">Kaydet</button>                
                    

                 
                </td>
              </tr>

            </table>
          </form>

        </div>

      </div>

      <div class="row hidden-md hidden-lg">
        
        <div class="col-md-12">
          
          <form action="member_update.php" method="post" name="uyelik_form_mob" id="uyelik_form_mob">

            <table  style="width: 100%;" class="uyeol_tablo">
              <tr>
                <td class="uyeol_tablo_name" ><span class="zorunlu">*</span> Adı</td>
              </tr>
              <tr>
                <td><input type="text" name="uye_adi" class="uyeol_tablo_text_mob" value="<?php echo $yaz["uye_adi"]; ?>"></td>
              </tr>
              <tr>
                <td class="uyeol_tablo_name"><span class="zorunlu">*</span> Soyadı</td>              
              </tr>
              <tr>
                <td><input type="text" name="uye_soyadi" class="uyeol_tablo_text_mob" value="<?php echo $yaz["uye_soyadi"]; ?>"></td>
              </tr>
              <tr>
                <td class="uyeol_tablo_name"><span class="zorunlu">*</span> Email</td>
              </tr>
              <tr>              
                <td><input type="text" name="uye_email" class="uyeol_tablo_text_mob" value="<?php echo $yaz["uye_email"]; ?>"></td>
              </tr>
              <tr>
                <td class="uyeol_tablo_name"><span class="zorunlu">*</span> Telefon</td>
              </tr>
              <tr>
                <td><input type="text" name="uye_tel" class="uyeol_tablo_text_mob" value="<?php echo $yaz["uye_tel"]; ?>"></td>
              </tr>
              <tr>
                <td class="uyeol_tablo_name"><span class="zorunlu">*</span> Şifre</td>
              </tr>
              <tr>
                <td><input type="password" name="uye_sifre" class="uyeol_tablo_text_mob" value="<?php echo $yaz["uye_sifre"]; ?>"></td>
              </tr>
              <tr>
                <td class="uyeol_tablo_name"><span class="zorunlu">*</span> Şifre Tekrar</td>
              </tr>
              <tr>
                <td><input type="password" name="uye_tekrar_sifre" class="uyeol_tablo_text_mob" value="<?php echo $yaz["uye_tekrar_sifre"]; ?>"></td>
              </tr>
              <tr>
                <td>

                  <?php

                    if($yaz["uye_cinsiyet"] == 1){

                      echo '

                  <label class="example-radio">
                      Kadın
                      <input type="radio" checked="checked" name="uye_cinsiyet" value="1" id="kadın">
                      <span class="checkmark-radio"></span>
                  </label>
                  <label class="example-radio">
                      Erkek
                      <input type="radio" name="uye_cinsiyet" value="2" id="erkek">
                      <span class="checkmark-radio"></span>
                  </label>


                      ';



                    }else{


                      echo '

                  <label class="example-radio">
                      Kadın
                      <input type="radio" name="uye_cinsiyet" value="1" id="kadın">
                      <span class="checkmark-radio"></span>
                  </label>
                  <label class="example-radio">
                      Erkek
                      <input type="radio" checked="checked" name="uye_cinsiyet" value="2" id="erkek">
                      <span class="checkmark-radio"></span>
                  </label>


                      ';

                    }

                   ?>
                  

                </td>
              </tr>


              <tr>
                
                <td>

                    <button type="submit" name="kaydet" class="uyeol_kaydet">Kaydet</button>                
                    

                 
                </td>
              </tr>

            </table>

          </form>  

        </div>

      </div>       


    </div>

    

  </div>

</div>




<?php
include "footer.php";

 ?>