<?php 
include "header_main.php";

$id = $_GET["id"];

$urunler = mysqli_query($conn,"SELECT * FROM urunler WHERE urun_id = '$id' ");
$yaz = $urunler->fetch_array();


$kampanya_id = $yaz["urun_kampanya_id"];

$kampanya = mysqli_query($conn,"SELECT * FROM kampanya WHERE kampanya_id = '$kampanya_id'");
$kampyaz = $kampanya->fetch_array();


$kategori_id = $yaz["urun_kategori_id"];

$kategori = mysqli_query($conn,"SELECT * FROM kategori_alt WHERE kategori_alt_id = '$kategori_id' ");
$kyaz = $kategori->fetch_array();

 


?>

  	<div class="container-fluid kategorilink">
  		
  		<div class="container">

  			<div class="row">
  				
  				<div class="col-md-12">
  					
		  			<span class="glyphicon glyphicon-home kategori_icon" aria-hidden="true"></span> 

		  			<span><a href="index.php">Anasayfa</a></span>
		  			/
		  			<span><a href="category.php?id=<?php echo $kategori_id; ?>"><?php echo $kyaz["kategori_alt_adi"]; ?></a></span>  	
		  			/				
		  			<span><a href="product.php?id=<?php echo $id; ?>"><?php echo $yaz["urun_adi"]; ?></a></span>
  				</div>

  			</div>
  			
  		</div>

  	</div>


  	
  	<div class="container-fluid urunler">
  		
  		<div class="container">
  			
  			<div class="row">
  				<div class="col-md-1">
  					
					  <div class="galeri_resim hidden-xs hidden-sm">
              <div class="w3-col s3">
                <img  src="admin/<?php echo $yaz["urun_resim"]; ?>" onclick="currentDiv(1)">
              </div>
            <?php

              $resimbul = mysqli_query($conn,"SELECT * FROM urunler_resimler WHERE urunler_id = '$id'");
              $resimsay = mysqli_num_rows($resimbul);
              $i = 1;
              while($resimyaz = mysqli_fetch_array($resimbul)){

              $i++;
   
              
                  ?>


              <div class="w3-col s3">
                <img  src="admin/<?php echo $resimyaz["resimler_yol"]; ?>" onclick="currentDiv(<?php echo $i; ?>)">
              </div>


                  <?php

                

         } ?>



					  </div>  					

  				</div>
  				<div class="col-md-5">
  					

					<div class="galeri_resim_buyuk" style="width:100%;">
					  <img class="mySlides" src="admin/<?php echo $yaz["urun_resim"]; ?>" style="width:100%;">
            <?php

              $resimbul2 = mysqli_query($conn,"SELECT * FROM urunler_resimler WHERE urunler_id = '$id'");
              while($resimyaz2 = mysqli_fetch_array($resimbul2)){



             ?>

              <img class="mySlides" src="admin/<?php echo $resimyaz2["resimler_yol"]; ?>" style="width:100%;display:none;">


            <?php }  ?>            
					  

					  <div class="galeri_resim_mobil hidden-lg hidden-md">


					    <div class="w3-col s3">
					      <img  src="admin/<?php echo $yaz["urun_resim"]; ?>" onclick="currentDiv(1)">
					    </div>



            <?php

              $resimbul = mysqli_query($conn,"SELECT * FROM urunler_resimler WHERE urunler_id = '$id'");
              $resimsay = mysqli_num_rows($resimbul);
              $i = 1;
              while($resimyaz = mysqli_fetch_array($resimbul)){

              $i++;
   
              
                  ?>


              <div class="w3-col s3">
                <img  src="admin/<?php echo $resimyaz["resimler_yol"]; ?>" onclick="currentDiv(<?php echo $i; ?>)">
              </div>


                  <?php

                

         } ?>


   


					  </div>
					</div>  					

					<div class="temizle2" style="clear: both;"></div>
  				</div>

  				<div class="col-md-6 urun_bilgi">
                <?php

                  if($yaz["urun_yeni"] > 0){

                 ?>
                <span style="background-color: #f4f3f0; padding: 10px; color:#ee8bb9; font-weight: bold; border-radius:5px; border:1px solid #ee8bb9;">Yeni Ürün</span>

                  <?php }else { } ?>

                <?php

                  if($yaz["urun_kampanya_id"] > 0){

                 ?>
                <span style="background-color: #ee8bb9; padding: 10px; color:white; font-weight: bold; border-radius:5px;"><?php echo $kampyaz["kampanya_adi"]; ?></span>

                  <?php }else { } ?>
  					<h3><?php echo $yaz["urun_adi"]; ?></h3>
  					<p>KOD : <?php echo $yaz["urun_kodu"]; ?></p>

  					<div class="urun_bilgi_alt">
  						
  						<div class="urun_bilgi_alt_1">
                <h2>
                <?php

                  

                  if($yaz["urun_kampanya_fiyat"] > 0){

                    echo "<span style='text-decoration: line-through; font-weight:normal; color:grey;'>". $yaz["urun_fiyat"] ." TL</span> ".$yaz["urun_kampanya_fiyat"]." TL 



                    ";

                  }else{

                    echo "". $yaz["urun_fiyat"] ." TL";
                  }



                 ?>
  							</h2>
                <p>+ %<?php echo $yaz["urun_kdv"] ?> KDV</p>
  						</div>
  						<div class="urun_bilgi_alt_2">
                
  						</div>

  						<div class="urun_bilgi_alt_3">
  							<form action="basket_add.php?id=<?php echo $id; ?>" method="post" name="ekle">
			              <table class="urun_miktar">
			                <tr>
			                  <td rowspan="2"><input name="urun_adet" class="quantity-input" type="text" value="1" readonly />

                          <?php if($yaz["urun_birim"] == 1){

                            echo "Adet";
                            
                          }else{

                            echo "Metre";

                          } 


                          ?></td>
			                  <td style="padding-right: 5px;"><a class="quantity-plus"><span class="glyphicon glyphicon-menu-up" aria-hidden="true"></span></a></td>
			                </tr>
			                <tr>
			                  <td style="padding-right: 5px;"><a class="quantity-minus"><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></td>
			                </tr>

			              </table>



  						</div>
              
  						<div class="urun_bilgi_alt_4">
              
                <input type="hidden" name="urun_adi" value="<?php echo $yaz['urun_adi']; ?>">
                <input type="hidden" name="urun_kodu" value="<?php echo $yaz['urun_kodu']; ?>">
                <input type="hidden" name="urun_birim" value="<?php echo $yaz['urun_birim']; ?>">
                <input type="hidden" name="urun_resim" value="<?php echo $yaz['urun_resim']; ?>">
                <input type="hidden" name="urun_kdv" value="<?php echo $yaz['urun_kdv']; ?>">
                <?php                  

                  if($yaz["urun_kampanya_fiyat"] > 0){

                    echo "<input type='hidden' name='urun_fiyat' value=".$yaz['urun_kampanya_fiyat'].">";

                  }else{

                    echo "<input type='hidden' name='urun_fiyat' value=".$yaz['urun_fiyat'].">";
                  }


                 ?>
  							<button type="submit" name="ekle" class="sepete_ekle">Sepete Ekle <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></button>
              </form>

  						</div>
  						<div class="temizle"></div>
  						<div class="urun_bilgi_alt_5">
  							
  							<h4>Ürün Bilgileri</h4>

  							<p><?php echo $yaz["urun_bilgi_1"]; ?></p>

  							<h4>Ürün Bilgileri</h4>

  							<p><?php echo $yaz["urun_bilgi_2"]; ?></p>
  						</div>

  					</div>

  				</div>

  			</div>

  		</div>

  	</div>

<?php include "footer.php";  ?>