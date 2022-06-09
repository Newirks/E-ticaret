<?php 

include "header_main.php";

?>

  <div class="container-fluid sepetim">
    
    <div class="container">
      
      <div class="row">
        
        <div class="col-md-9">
          
          <div class="sepet_detay">
            
            <div class="sepet_detay_baslik">SEPET DETAYI</div>

            <div class="sepet_detay_tablo">
                 <?php
                $toplam = 0;

                if($_SESSION["sepet"] > 0){
                foreach($_SESSION["sepet"] as $anahtar => $deger){
                            
                ?>             
              <table class="hidden-sm hidden-xs">

                <tr>
                  <td style="width: 120px;"><img src="<?=$deger['resim'];?>" class="img-responsive"></td>
                  <td style="width: 250px;">
                    <p class="sepet_urun_adi"><?=$deger["ad"];?></p>
                    <p class="sepet_urun_kodu">Ürün Kodu : <?=$deger["kod"];?></p>
                    <p class="sepet_urun_sil"><a href="basket_del.php?islem=sil&id=<?=$deger['id'];?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Ürünü Sepetten Sil</a></p>

                  </td>
                  <td>

                    <div class="sepet_adet">
                    <button type="button" id="btn2" class="quantity-minus2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                    <input name="urun_adet" class="quantity-input2" type="text" value="<?=$deger['adet'];?>" readonly /><span class="sepet_adet_birim">

                      <?php if($deger["birim"] == 1){

                        echo "Adet";
                      }else{

                        echo "Metre";
                      }

                      ?>
                        
                      </span>
                    <button type="button" id="btn1" class="quantity-plus2"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                    </div>

                  </td>
                  <td><p class="sepet_adet_fiyat"><?php echo $deger["fiyat"] * $deger["adet"]; ?>,00 TL</p><p class="sepet_kdv">+ KDV % <?=$deger["kdv"];?></p></td>
                </tr>


              </table>

 
              <table class="hidden-lg hidden-md">
                <tr>
                  <td style="width: 120px;"><img src="img/deneme.jpg" class="img-responsive"></td>
                  <td style="width: 250px;">
                    <p class="sepet_urun_adi"><?=$deger["ad"];?></p>
                    <p class="sepet_urun_kodu">Ürün Kodu : <?=$deger["kod"];?></p>
                    <p class="sepet_urun_sil"><a href="basket_del.php?islem=sil&id=<?=$deger['id'];?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Ürünü Sepetten Sil</a></p>

                  </td>
                </tr>
                  <tr>
                    <td><center><p class="sepet_adet_fiyat"><?php echo $deger["fiyat"] * $deger["adet"]; ?>,00 TL</p><p class="sepet_kdv">+ KDV % <?=$deger["kdv"];?></p></center></td>
                  <td>
                    <center>
                    
                    <div class="sepet_adet">
                    <button class="quantity-minus2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                    <input name="urun_adet" class="quantity-input2" type="text" value="<?=$deger['adet'];?>" readonly /><span class="sepet_adet_birim"><?=$deger["birim"];?></span>
                    <button class="quantity-plus2"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                    </div>
                    
                  </center>
                  </td>                    
                  
                  
                </tr>
              </table>
             <?php 

                
                $toplam = $toplam + ($deger["adet"] * $deger["fiyat"]);



            } 

          }else {


            echo "

            <div class'sepetbos' style='border-bottom:1px solid #d1d1d1;'>
            <p><center><i>Sepetinizde Hiç Ürün Bulunmamakta.</i></center></p>
            </div>

            ";

          }



            ?>
            </div>

          </div>

        </div>

        <div class="col-md-3">
          
          <div class="sepet_ozet">
            
            <div class="sepet_ozet_baslik">SEPET ÖZETİ</div>

            <div class="sepet_ozet_tablo">
              
              <table>
                <tr>
                  <td>Ara Toplam</td>
                  <td style="float: right;"><b><?php echo number_format($toplam); ?>,00 TL</b></td>
                </tr>
                <tr>
                  <td>KDV</td>
                  <td style="float: right;"><b><?php echo (number_format($toplam) / 100) * 8; ?> TL</b></td>
                </tr>
                <tr>
                  <td>KDV Dahil</td>
                  <td style="float: right;"><b><?php echo ((number_format($toplam) / 100) * 8) + number_format($toplam); ?> TL</b></td>
                </tr>
              </table>              

            </div>

            <div class="sepet_ozet_toplam">
              
              <table>
                <tr>
                  <td>Toplam</td>
                  <td style="font-weight: bold; font-size:18px; float: right; "><b><?php echo ((number_format($toplam) / 100) * 8) + number_format($toplam); ?> TL</b></td>
                </tr>
              </table>
              
            </div>

            <div class="sepet_ozet_buton">
              
              <form action="payment_step1.php" method="post">
                <input type="hidden" name="tutar" value="<?php echo number_format($toplam); ?>">
              <?php

                if($_SESSION["sepet"] > 0){

                  echo "<input type='submit' name='tamamla' class='tamamla' value='Alışverişi Tamamla'>";

                }else {

                  echo "<input type='submit' name='tamamla' class='tamamla' value='Sepet Boş' disabled='disabled'>";

                }

               ?>
                
              </form>
              

              <img  src="img/secure.png"  class="img-responsive" style="width: 100px; margin-top: 5px;">

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

<?php

include "footer.php";

 ?>