<?php
include "header_main.php";
$id = intval($_GET['id']);




    if(isset($_GET["islem"])){
    
    
        if($_GET["islem"] == "sil"){
        
           
            foreach($_SESSION["sepet"] as $anahtar => $deger){
            
                
                if($_GET["id"] == $deger["id"]){
                
                    
                    unset($_SESSION["sepet"][$anahtar]);
                
                      header('Location:basket.php');
                
                }
                
            
            }
        
        
        }
        
    
    } 

		
	
include "footer.php";
 ?>

 