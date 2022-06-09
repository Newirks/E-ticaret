<?php

include "header_main.php";

  if($_POST){

  $email = $_POST['email'];
  $sifre = $_POST['sifre'];

  $bul = mysqli_query($conn,"SELECT * FROM uyeler WHERE uye_email='$email' and uye_sifre='$sifre'");
  $say = mysqli_num_rows($bul);
  if($say > 0) {


    $goster = mysqli_fetch_array($bul);
    $_SESSION["oturum"] = true;
    $_SESSION["uye_id"] = $goster["uye_id"];
    $_SESSION["uye_email"] = $email;
    $_SESSION["uye_sifre"] = $sifre;
    $_SESSION["uye_email"] = $goster["uye_email"];

      header("location:index.php");

  }else {

    echo "hata oluştu";

   }
  
 }else {


  if(isset($_SESSION["oturum"])){ ?>


                          <div class="container  bildirim">
              
              <div class="row">
                
                <div class="col-md-12">
                  
                  <img src="img/icon/ok.png">
                  <h3>Başarılı Şekilde Giriş Yaptınız.</h3>

                </div>

              </div>

            </div>


    <?php
  }

  if(!isset($_SESSION["oturum"])){

        header("location:index.php");

  }

 }


 ?>