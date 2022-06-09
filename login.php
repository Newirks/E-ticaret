<?php include "header_main.php"; ?>

  <div class="container-fluid giris_yap">
  
    <div class="container">
      
      <div class="row">
        
        <div class="col-md-12">
          
          <div class="uyegiris">
            <img src="img/giris.png" class="img-responsive">
            <h4>Üye Giriş</h4>

            <form action="login_work.php" method="post" class="form-inline">
              <div class="form-group">
                
                <div class="input-group uyegiris_input">
                  <div class="input-group-addon">@</div>
                  <input type="text" name="email" class="form-control" placeholder="Email">                 
                </div>

                <div class="input-group uyegiris_input">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>
                  <input type="password" name="sifre" class="form-control" placeholder="Şifre">                  
                </div>

              </div>

              <div class="uyegiris_hatirla">
                <label class="uyeol_sozlesme">
                  <input type="checkbox" >
                  <span class="checkmark_checkbox"></span>
                  <span class="checkmark_checkbox_text">Beni Hatırla</span>
                </label>
              </div>

              <div class="uyegiris_unuttum">
                <a href="#">Şifremi Unuttum</a>
              </div>

              <div class="temizle"></div>

              <button type="submit" name="giris_yap" class="uyegiris_buton">Giriş Yap</button>
              <div class="uyegiris_face">
                <button type="button" name="facebook" class="uyegiris_buton_f">facebook İle Bağlan</button>
              </div>
              <div class="uyegiris_google">
                <button type="button" name="google" class="uyegiris_buton_g">Google İle Bağlan</button>
              </div>
              <div class="temizle"></div>
            </form>
            <div class="uyegiris_kayit">
              Hesabınız Yok mu ? <a href="register.php">Hemen Kayıt Olun !</a>
            </div>
          </div>


        </div>

      </div>

    </div>


  </div>

<?php include "footer.php"; ?>