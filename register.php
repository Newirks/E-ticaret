<?php include "header_main.php"; ?>

  <div class="container-fluid uyeol">
    
    <div class="container">
      
      <div class="row uyeol_baslik">
        
        <div class="col-md-12">
          
          <h3>Yeni Üyelik</h3>

        </div>

      </div>

      <div class="row hidden-xs hidden-sm">
        
        <div class="col-md-12">

          <form action="register_work.php" method="post" name="uyelik_form" id="uyelik_form">

            <table class="uyeol_tablo">
              <tr>
                <td class="uyeol_tablo_name">Adı</td>
                <td class="uyeol_tablo_input"><input type="text" name="uye_adi" class="uyeol_tablo_text" required/><span class="zorunlu">*</span></td>
              </tr>
              <tr>
                <td class="uyeol_tablo_name">Soyadı</td>
                <td class="uyeol_tablo_input"><input type="text" name="uye_soyadi" class="uyeol_tablo_text" required/><span class="zorunlu">*</span></td>
              </tr>
              <tr>
                <td class="uyeol_tablo_name">Email</td>
                <td class="uyeol_tablo_input"><input type="email" name="uye_email" class="uyeol_tablo_text" required/><span class="zorunlu">*</span></td>
              </tr>
              <tr>
                <td class="uyeol_tablo_name">Telefon</td>
                <td class="uyeol_tablo_input"><input type="text" pattern="\d{11}" name="uye_tel" class="uyeol_tablo_text" required/><span class="zorunlu">*</span></td>
              </tr>
              <tr>
                <td class="uyeol_tablo_name">Şifre</td>
                <td class="uyeol_tablo_input"><input type="password" name="uye_sifre" class="uyeol_tablo_text" required/><span class="zorunlu">*</span></td>
              </tr>
              <tr>
                <td class="uyeol_tablo_name">Şifre Tekrar</td>
                <td class="uyeol_tablo_input"><input type="password" name="uye_tekrar_sifre" class="uyeol_tablo_text" required/><span class="zorunlu">*</span></td>
              </tr>
              <tr>
                <td class="uyeol_tablo_name">Cinsiyet</td>
                <td class="uyeol_tablo_input">
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
   

                </td>
              </tr>
              <tr>
                <td></td>
                <td class="uyeol_tablo_input">
                  <label class="uyeol_sozlesme">
                    <input type="checkbox" >
                    <span class="checkmark_checkbox"></span>
                    <span class="checkmark_checkbox_text">Aydınlatma Metninde belirtilen ilkeler nezdinde Elektronik Ticaret İletisi almak istiyorum.</span>
                  </label>

                  <label class="uyeol_sozlesme">
                    <input type="checkbox" name="sozlesme" >
                    <span class="checkmark_checkbox"></span>
                    <u><a class="checkmark_checkbox_text" href="">Üyelik sözleşmesini kabul ediyorum.</a></u>
                  </label>

                  <label class="uyeol_sozlesme">
                    <input type="checkbox" name="veriler">
                    <span class="checkmark_checkbox"></span>
                    <u><a class="checkmark_checkbox_text" href="">Kişisel verilerin işlenmesine ilişkin Aydınlatma Metnini okudum.</a></u>
                  </label>
                  

                </td>
              </tr>

              <tr>
                <td></td>
                <td>

                    <button type="submit" name="kaydet" class="uyeol_kaydet">Kaydet</button>                
                    <button type="submit" name="iptal" class="uyeol_iptal">İptal</button>

                 
                </td>
              </tr>

            </table>
          </form>

        </div>

      </div>


      <div class="row hidden-md hidden-lg">
        
        <div class="col-md-12">
          
          <form action="register_work.php" method="post" name="uyelik_form_mob" id="uyelik_form_mob">

            <table class="uyeol_tablo">
              <tr>
                <td class="uyeol_tablo_name"><span class="zorunlu">*</span> Adı</td>
              </tr>
              <tr>
                <td><input type="text" name="uye_adi" class="uyeol_tablo_text_mob"></td>
              </tr>
              <tr>
                <td class="uyeol_tablo_name"><span class="zorunlu">*</span> Soyadı</td>              
              </tr>
              <tr>
                <td><input type="text" name="uye_soyadi" class="uyeol_tablo_text_mob"></td>
              </tr>
              <tr>
                <td class="uyeol_tablo_name"><span class="zorunlu">*</span> Email</td>
              </tr>
              <tr>              
                <td><input type="text" name="uye_email" class="uyeol_tablo_text_mob"></td>
              </tr>
              <tr>
                <td class="uyeol_tablo_name"><span class="zorunlu">*</span> Telefon</td>
              </tr>
              <tr>
                <td><input type="text" name="uye_tel" class="uyeol_tablo_text_mob"></td>
              </tr>
              <tr>
                <td class="uyeol_tablo_name"><span class="zorunlu">*</span> Şifre</td>
              </tr>
              <tr>
                <td><input type="password" name="uye_sifre" class="uyeol_tablo_text_mob"></td>
              </tr>
              <tr>
                <td class="uyeol_tablo_name"><span class="zorunlu">*</span> Şifre Tekrar</td>
              </tr>
              <tr>
                <td><input type="password" name="uye_tekrar_sifre" class="uyeol_tablo_text_mob"></td>
              </tr>
              <tr>
                <td>

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
                  

                </td>
              </tr>
              <tr>
                
                <td>
                  <label class="uyeol_sozlesme">
                    <input type="checkbox" >
                    <span class="checkmark_checkbox"></span>
                    <span class="checkmark_checkbox_text">Aydınlatma Metninde belirtilen ilkeler nezdinde Elektronik Ticaret İletisi almak istiyorum.</span>
                  </label>

                  <label class="uyeol_sozlesme">
                    <input type="checkbox" >
                    <span class="checkmark_checkbox"></span>
                    <u><a class="checkmark_checkbox_text" href="">Üyelik sözleşmesini kabul ediyorum.</a></u>
                  </label>

                  <label class="uyeol_sozlesme">
                    <input type="checkbox" >
                    <span class="checkmark_checkbox"></span>
                    <u><a class="checkmark_checkbox_text" href="">Kişisel verilerin işlenmesine ilişkin Aydınlatma Metnini okudum.</a></u>
                  </label>
                  

                </td>
              </tr>

              <tr>
                
                <td>

                    <button type="submit" name="kaydet" class="uyeol_kaydet">Kaydet</button>                
                    <button type="submit" name="iptal" class="uyeol_iptal">İptal</button>

                 
                </td>
              </tr>

            </table>

          </form>  

        </div>

      </div>      

    </div>

  </div>

<?php include "footer.php"; ?>