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
          
          <h3>Hesabım</h3>
          <p><span style="color:#ee8bb9;" class="glyphicon glyphicon-heart" aria-hidden="true"></span> Hoşgeldin <b><?php echo $yaz["uye_adi"]; ?></b></p>

        </div>

      </div>

    </div>

    <div class="row uyeprofil_alt">
      <div class="col-md-1"></div>
      <div class="col-md-2">
        
        <div class="uyeprofil_secenek">
          
          <a href="adress.php?id=<?php echo $uyeid; ?>">
            <span class="glyphicon glyphicon-book uyeprofil_secenek_icon" aria-hidden="true"></span> </br>
            <span class="uyeprofil_secenek_name">Adres Defteri</span>
          </a>

        </div>

      </div>

      <div class="col-md-2">
        
        <div class="uyeprofil_secenek">
          
          <a href="basket.php">
            <span class="glyphicon glyphicon-shopping-cart uyeprofil_secenek_icon" aria-hidden="true"></span> </br>
            <span class="uyeprofil_secenek_name">Alışveriş Sepetim</span>
          </a>

        </div>

      </div>

      <div class="col-md-2">
        
        <div class="uyeprofil_secenek">
          
          <a href="order.php?id=<?php echo $uyeid; ?>">
            <span class="glyphicon glyphicon-list-alt uyeprofil_secenek_icon" aria-hidden="true"></span> </br>
            <span class="uyeprofil_secenek_name">Siparişlerim</span>
          </a>

        </div>

      </div>



      <div class="col-md-2">
        
        <div class="uyeprofil_secenek">
          
          <a href="feedback.php?id=<?php echo $uyeid; ?>">
            <span class="glyphicon glyphicon-envelope uyeprofil_secenek_icon" aria-hidden="true"></span> </br>
            <span class="uyeprofil_secenek_name">Bildirim Formu</span>
          </a>

        </div>

      </div>

      <div class="col-md-2">
        
        <div class="uyeprofil_secenek">
          
          <a href="member_info.php?id=<?php echo $uyeid; ?>">
            <span class="glyphicon glyphicon-user uyeprofil_secenek_icon" aria-hidden="true"></span> </br>
            <span class="uyeprofil_secenek_name">Üye Bilgileri</span>
          </a>

        </div>

      </div>
      <div class="col-md-1"></div>

    </div>

  </div>

</div>


<?php
include "footer.php";

 ?>