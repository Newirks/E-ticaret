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
          
          <h3>Geri Bildirim</h3>

        </div>

      </div>

    </div>

    <div class="row uyeprofil_alt">
      
      <div class="col-md-12">
        

        <p></p>



      </div>



      

    </div>

  </div>

</div>


<?php
include "footer.php";

 ?>