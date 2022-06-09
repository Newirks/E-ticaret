<?php
include "header_main.php";

$id = $_GET['id'];


   if($_POST){
        

                 $ekle = array( 
                 
                 
                     
                "id" => $id,
                "kod" => $_POST["urun_kodu"],
                "ad" => $_POST["urun_adi"],
                "fiyat" => $_POST["urun_fiyat"],
                "adet" => $_POST["urun_adet"],
                "resim" => $_POST["urun_resim"], 
                "birim" => $_POST["urun_birim"], 
                "kdv" => $_POST["urun_kdv"]
                
                );
                 
                $_SESSION["sepet"][$id] = $ekle;
           
          
           
               header('Location:'.$_SERVER['HTTP_REFERER']); 



   
   }

 

		
	
include "footer.php";
 ?>

 