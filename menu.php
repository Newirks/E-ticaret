    <div class="hidden-xs hidden-sm container-fluid menu_alan">
      

        
        <div class="row">
          
          <div class="col-md-12 menu">
            
            <ul>
              <li >
                <a href="#" class="menu_1">
                  <div><center><img src="img/menu/kumas.png" class="img-responsive"></center></div>
                  <span>KUMAŞLARIMIZ</span>
                </a>
                <div class="menu_2">

                  <div class="container">

                    <div class="row">
                      

                      <?php

                        $kategori0 = mysqli_query($conn,"SELECT * FROM kategori_baslik WHERE ust_id = 0");
                        while($yaz0 = $kategori0->fetch_array()){   
                          $id0 = $yaz0["kategori_baslik_id"]; 
                       ?>
                      <div class="col-md-2">
                        <h5><?php echo $yaz0["kategori_baslik_adi"]; ?></h5>

                        <?php


                          $kategori_alt0 = mysqli_query($conn,"SELECT * FROM kategori_alt WHERE ust_id = '$id0' ");
                          while($yaz_alt0 = $kategori_alt0->fetch_array()){ 

                         ?>

                        <p><a href="category.php?id=<?php echo $yaz_alt0['kategori_alt_id']; ?>"><?php echo $yaz_alt0["kategori_alt_adi"]; ?></a></p>

                        <?php } ?>
                                          
                      </div>

                      <?php

                      }

                       ?>





                    </div>
                    

                  </div>
                  
                </div>
              </li>
              <li >
                <a href="#" class="menu_1">
                  <div><center><img src="img/menu/tuhafiye.png" class="img-responsive"></center></div>
                  <span>TUHAFİYE</span>
                </a>
                <div class="menu_2">

                  <div class="container">

                    <div class="row">
                      

                      <?php

                        $kategori1 = mysqli_query($conn,"SELECT * FROM kategori_baslik WHERE ust_id = 1");
                        while($yaz1 = $kategori1->fetch_array()){   
                          $id1 = $yaz1["kategori_baslik_id"];  
                       ?>
                      <div class="col-md-2">
                        <h5><?php echo $yaz1["kategori_baslik_adi"]; ?></h5>

                        <?php


                          $kategori_alt1 = mysqli_query($conn,"SELECT * FROM kategori_alt WHERE ust_id = '$id1' ");
                          while($yaz_alt1 = $kategori_alt1->fetch_array()){ 

                         ?>

                        <p><a href="category.php?id=<?php echo $yaz_alt1['kategori_alt_id']; ?>"><?php echo $yaz_alt1["kategori_alt_adi"]; ?></a></p>

                        <?php } ?>
                                          
                      </div>

                      <?php

                      }

                       ?>





                    </div>
                    

                  </div>
                  
                </div>

              </li>
              <li >
                <a href="#" class="menu_1">
                  <div><center><img src="img/menu/firsat2.png" class="img-responsive"></center></div>
                  <span>FIRSAT ÜRÜNLERİ</span>
                </a>
                <div class="menu_2">

                  <div class="container">

                    <div class="row">
                      

                      <?php

                        $kategori2 = mysqli_query($conn,"SELECT * FROM kategori_baslik WHERE ust_id = 2");
                        while($yaz2 = $kategori2->fetch_array()){   
                          $id2 = $yaz2["kategori_baslik_id"];  
                       ?>
                      <div class="col-md-2">
                        <h5><?php echo $yaz2["kategori_baslik_adi"]; ?></h5>

                        <?php


                          $kategori_alt2 = mysqli_query($conn,"SELECT * FROM kategori_alt WHERE ust_id = '$id2' ");
                          while($yaz_alt2 = $kategori_alt2->fetch_array()){ 

                         ?>

                        <p><a href="category.php?id=<?php echo $yaz_alt2['kategori_alt_id']; ?>"><?php echo $yaz_alt2["kategori_alt_adi"]; ?></a></p>

                        <?php } ?>
                                          
                      </div>

                      <?php

                      }

                       ?>





                    </div>
                    

                  </div>
                  
                </div>

              </li>
              <li >
                <a href="#" class="menu_1">
                  <div><center><img src="img/menu/giyim.png" class="img-responsive"></center></div>
                  <span>İPLİK</span>
                </a>
                <div class="menu_2">

                  <div class="container">

                    <div class="row">
                      

                      <?php

                        $kategori7 = mysqli_query($conn,"SELECT * FROM kategori_baslik WHERE ust_id = 7");
                        while($yaz7 = $kategori7->fetch_array()){   
                          $id7 = $yaz7["kategori_baslik_id"];  
                       ?>
                      <div class="col-md-2">
                        <h5><?php echo $yaz7["kategori_baslik_adi"]; ?></h5>

                        <?php


                          $kategori_alt7 = mysqli_query($conn,"SELECT * FROM kategori_alt WHERE ust_id = '$id7' ");
                          while($yaz_alt7 = $kategori_alt7->fetch_array()){ 

                         ?>

                        <p><a href="category.php?id=<?php echo $yaz_alt7['kategori_alt_id']; ?>"><?php echo $yaz_alt7["kategori_alt_adi"]; ?></a></p>

                        <?php } ?>
                                          
                      </div>

                      <?php

                      }

                       ?>





                    </div>
                    

                  </div>
                  
                </div>

              </li>
              <li >
                <a href="#" class="menu_1">
                  <div><center><img src="img/menu/hobi.png" class="img-responsive"></center></div>
                  <span>HOBİ</span>
                </a>
                <div class="menu_2">

                  <div class="container">

                    <div class="row">
                      

                      <?php

                        $kategori8 = mysqli_query($conn,"SELECT * FROM kategori_baslik WHERE ust_id = 8");
                        while($yaz8 = $kategori8->fetch_array()){   
                          $id8 = $yaz8["kategori_baslik_id"];  
                       ?>
                      <div class="col-md-2">
                        <h5><?php echo $yaz8["kategori_baslik_adi"]; ?></h5>

                        <?php


                          $kategori_alt8 = mysqli_query($conn,"SELECT * FROM kategori_alt WHERE ust_id = '$id8' ");
                          while($yaz_alt8 = $kategori_alt8->fetch_array()){ 

                         ?>

                        <p><a href="category.php?id=<?php echo $yaz_alt8['kategori_alt_id']; ?>"><?php echo $yaz_alt8["kategori_alt_adi"]; ?></a></p>

                        <?php } ?>
                                          
                      </div>

                      <?php

                      }

                       ?>





                    </div>
                    

                  </div>
                  
                </div>

              </li>









              <li >
                <a href="#" class="menu_1">
                  <div><center><img src="img/menu/perde.png" class="img-responsive"></center></div>
                  <span>PLEKSİ</span>
                </a>
                <div class="menu_2">

                  <div class="container">

                    <div class="row">
                      

                      <?php

                        $kategori4 = mysqli_query($conn,"SELECT * FROM kategori_baslik WHERE ust_id = 4");
                        while($yaz4 = $kategori4->fetch_array()){   
                          $id4 = $yaz4["kategori_baslik_id"];  
                       ?>
                      <div class="col-md-2">
                        <h5><?php echo $yaz4["kategori_baslik_adi"]; ?></h5>

                        <?php


                          $kategori_alt4 = mysqli_query($conn,"SELECT * FROM kategori_alt WHERE ust_id = '$id4' ");
                          while($yaz_alt4 = $kategori_alt4->fetch_array()){ 

                         ?>

                        <p><a href="category.php?id=<?php echo $yaz_alt4['kategori_alt_id']; ?>"><?php echo $yaz_alt4["kategori_alt_adi"]; ?></a></p>

                        <?php } ?>
                                          
                      </div>

                      <?php

                      }

                       ?>





                    </div>
                    

                  </div>
                  
                </div>

              </li>

              <li >
                <a href="#" class="menu_1">
                  <div><center><img src="img/menu/ev2.png" class="img-responsive"></center></div>
                  <span>AHŞAP</span>
                </a>
                <div class="menu_2">

                  <div class="container">

                    <div class="row">
                      

                      <?php

                        $kategori6 = mysqli_query($conn,"SELECT * FROM kategori_baslik WHERE ust_id = 6");
                        while($yaz6 = $kategori6->fetch_array()){   
                          $id6 = $yaz6["kategori_baslik_id"];  
                       ?>
                      <div class="col-md-2">
                        <h5><?php echo $yaz6["kategori_baslik_adi"]; ?></h5>

                        <?php


                          $kategori_alt6 = mysqli_query($conn,"SELECT * FROM kategori_alt WHERE ust_id = '$id6' ");
                          while($yaz_alt6 = $kategori_alt6->fetch_array()){ 

                         ?>

                        <p><a href="category.php?id=<?php echo $yaz_alt6['kategori_alt_id']; ?>"><?php echo $yaz_alt6["kategori_alt_adi"]; ?></a></p>

                        <?php } ?>
                                          
                      </div>

                      <?php

                      }

                       ?>





                    </div>
                    

                  </div>
                  
                </div>

              </li>
              <li >
                <a href="#" class="menu_1">
                  <div><center><img src="img/menu/parca.png" class="img-responsive"></center></div>
                  <span>BOYALI ÜRÜNLER</span>
                </a>
                <div class="menu_2">

                  <div class="container">

                    <div class="row">
                      

                      <?php

                        $kategori5 = mysqli_query($conn,"SELECT * FROM kategori_baslik WHERE ust_id = 5");
                        while($yaz5 = $kategori5->fetch_array()){   
                          $id5 = $yaz5["kategori_baslik_id"];  
                       ?>
                      <div class="col-md-2">
                        <h5><?php echo $yaz5["kategori_baslik_adi"]; ?></h5>

                        <?php


                          $kategori_alt5 = mysqli_query($conn,"SELECT * FROM kategori_alt WHERE ust_id = '$id5' ");
                          while($yaz_alt5 = $kategori_alt5->fetch_array()){ 

                         ?>

                        <p><a href="category.php?id=<?php echo $yaz_alt5['kategori_alt_id']; ?>"><?php echo $yaz_alt5["kategori_alt_adi"]; ?></a></p>

                        <?php } ?>
                                          
                      </div>

                      <?php

                      }

                       ?>





                    </div>
                    

                  </div>
                  
                </div>

              </li>

              <li >
                <a href="#" class="menu_1">
                  <div><center><img src="img/menu/bebek.png" class="img-responsive"></center></div>
                  <span>BEBEK ÜRÜNLER</span>
                </a>
                <div class="menu_2">

                  <div class="container">

                    <div class="row">
                      

                      <?php

                        $kategori3 = mysqli_query($conn,"SELECT * FROM kategori_baslik WHERE ust_id = 3");
                        while($yaz3 = $kategori3->fetch_array()){   
                          $id3 = $yaz3["kategori_baslik_id"];  
                       ?>
                      <div class="col-md-2">
                        <h5><?php echo $yaz3["kategori_baslik_adi"]; ?></h5>

                        <?php


                          $kategori_alt3 = mysqli_query($conn,"SELECT * FROM kategori_alt WHERE ust_id = '$id3' ");
                          while($yaz_alt3 = $kategori_alt3->fetch_array()){ 

                         ?>

                        <p><a href="category.php?id=<?php echo $yaz_alt3['kategori_alt_id']; ?>"><?php echo $yaz_alt3["kategori_alt_adi"]; ?></a></p>

                        <?php } ?>
                                          
                      </div>

                      <?php

                      }

                       ?>





                    </div>
                    

                  </div>
                  
                </div>

              </li>
            </ul>

          </div>

        </div>



    </div>