<?php 


include "header_main.php"; 

$id = $_GET["id"];

$kategori_alt_sorgu = mysqli_query($conn,"SELECT * FROM kategori_alt WHERE kategori_alt_id = '$id'");
$kategori_alt_yaz = $kategori_alt_sorgu->fetch_array();

?>

    <div class="container-fluid kategorilink">
      
      <div class="container">

        <div class="row">
          
          <div class="col-md-12">
            
            <span class="glyphicon glyphicon-home kategori_icon" aria-hidden="true"></span> 

            <span><a href="index.php">Anasayfa</a></span>
            /
            <span><a href="category.php?id=<?php echo $id; ?>"><?php echo $kategori_alt_yaz["kategori_alt_adi"]; ?></a></span>            

          </div>

        </div>
        
      </div>

    </div>

    <div class="container kategori_liste ">
      
      <div class="row kategori_filtre">
        
        <div class="col-md-12">
          
          <?php

            $urunlerisay = mysqli_query($conn,"SELECT * FROM urunler");
            $saydir = mysqli_num_rows($urunlerisay);


           ?>

          <span>Toplam <?php echo $saydir; ?> Ürün Listelniyor</span>

        </div>

      </div>

      <div class="row kategori_urunler">
        <?php

        $urunler = mysqli_query($conn,"SELECT * FROM urunler WHERE urun_kategori_id = '$id'");
        while($urunler_yaz = $urunler->fetch_array()){

         ?>
        <div class="col-md-3 col-sm-6 col-xs-6 kategori_urun">
                      
          <?php

          if($urunler_yaz["urun_stok"] == 0){
            ?>


              <div class="tukendi">
                TÜKENDİ
              </div>        
            <div class="kat_urun_tukendi">

              <center>

                <span class="kat_urun_resim_tukendi"><a href="#"><img src="<?php echo $urunler_yaz["urun_resim"]; ?>" class="img-responsive"></a></span>
                
                <p class="kat_urun_link_tukendi"><a href="#"><?php echo $urunler_yaz["urun_adi"]; ?></a></p>

              </center>
              <div class="kat_alt_tukendi">
                <span class="kat_urun_fiyat_tukendi"><?php echo $urunler_yaz["urun_fiyat"]; ?> TL</span>
                <span class="kat_urun_begen_tukendi"><span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span></span>
              </div>
            </div>



          <?php   
          }else {

            if($urunler_yaz["urun_kampanya_id"] > 0){


            $kamp_id = $urunler_yaz["urun_kampanya_id"];
            $kampanyalar = mysqli_query($conn,"SELECT * FROM kampanya WHERE kampanya_id = '$kamp_id'");
            $kamp_yaz = $kampanyalar->fetch_array();

            echo "

              <div class='firsat'>
                ".$kamp_yaz["kampanya_adi"]."
              </div>  

            "; 


            }else {}

            if($urunler_yaz["urun_yeni"] > 0){

            echo "

              <div class='yeniurun'>
                Yeni Ürün
              </div>  
              <div class='kat_urun_yeni'>
            ";



             }else {

              echo "<div class='kat_urun'>";

             }


           ?>
           

            

              <center>

                <span class="kat_urun_resim"><a href="product.php?id=<?php echo $urunler_yaz["urun_id"]; ?>"><img src="admin/<?php echo $urunler_yaz["urun_resim"]; ?>" class="img-responsive"></a></span>
                
                <p class="kat_urun_link"><a href="product.php?id=<?php echo $urunler_yaz["urun_id"]; ?>"><?php echo $urunler_yaz["urun_adi"]; ?></a></p>

              </center>
              <div class="kat_alt">
                <?php 

                if(isset($kamp_yaz["kampanya_yuzdesi"])){ ?>

                  <span class="kat_urun_fiyat_indirim_o"><?php echo $urunler_yaz["urun_fiyat"]; ?> TL</span> 
                  <span class="kat_urun_fiyat_indirim"><?php echo $urunler_yaz["urun_kampanya_fiyat"]; ?> TL</span>
                  
                <?php
                }else{

                  echo "<span class='kat_urun_fiyat'>".$urunler_yaz['urun_fiyat']." TL</span>";

                }

                 ?>
                

                <span class="kat_urun_begen"><span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span></span>
              </div>
            </div>  

          <?php } ?>

        </div>

          <?php }  ?>




      </div>

    </div>

<?php include "footer.php"; ?>