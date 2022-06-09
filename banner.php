
  	<div class="container-fluid ust">

  		<img src="img/wpdestek2.png" class="img-responsive wpdestek_logo hidden-sm hidden-xs">
  		<img src="img/wpdestek2.png" class="img-responsive wpdestek_logo2 hidden-md hidden-lg">

  		<div class="container con">
  			<div class="row ust_sira_1">
  				<div class="hidden-sm hidden-xs col-md-3 ust_sol_1">
  					<ul>
  						<li>
  							<a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Anasayfa</a>
  						</li>
  					</ul>
  				</div>
  				<div class="col-sm-12 col-xs-12 col-md-6 ust_orta_1">
  					<p>
  						250TL VE ÜZERİ ALIŞVERİŞLERDE KARGO ÜCRETSİZ
  					</p>
  				</div>
  				<div class="hidden-sm hidden-xs col-md-3 ust_sag_1">
            <?php

            if(isset($_SESSION["oturum"])){ ?>

            <ul>
              <li>
                <a href="profil.php?id=<?php echo $uyeid; ?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profil</a>
              </li>
              <li>
                <a href="logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Çıkış Yap</a>
              </li>
            </ul>


            <?php 

            }else{

             ?>
  					<ul>
  						<li>
  							<a href="register.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Kayıt Ol</a>
  						</li>
  						<li>
  							<a href="login.php"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Giriş Yap</a>
  						</li>
  					</ul>

          <?php } ?>

  				</div>
  			</div>

  			<div class="hidden-sm hidden-xs row ust_sira_2">
  				<div class="hidden-xs hidden-sm col-md-3 ust_sol_2">

  					<a href="index.php"><img src="img/logo.png" class="img-responsive logo"></a>

  				</div>
  				<div class="col-md-6 ust_orta_2">


  					<input class="ust_orta_2_arama" type="text" placeholder="Aradağınız ürün veya barkod....">
  					<button type="button" class="ust_orta_2_arama_buton"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>

  				</div>
  				<div class="hidden-xs hidden-sm col-md-3 ust_sag_2">
  					<ul>
  						<li>
  							<a href="#"><span class="glyphicon glyphicon-heart-empty kalp" aria-hidden="true"></span></a>
  						</li>
  						<li>
  							<a href="basket.php">

                  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>

                  
                  <?php

                    if($_SESSION["sepet"] > 0){

                      echo "<span style='background-color: #333; padding: 1px 7px 1px 7px; position: absolute; font-size: 14px; color:white; border-radius: 10px;'>
                      ".count($_SESSION["sepet"])."</span>"; 

                    }else {

                      
                    }

                   ?>
                </a>
  						</li>
  					</ul>  					
  				</div>
  			</div>

  		</div>  		

  	</div>
  	


