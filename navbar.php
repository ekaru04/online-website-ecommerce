<?php


include $_SERVER['DOCUMENT_ROOT'].'/Rebellion/connect.php';
$o = mysqli_query($conn, "SELECT * FROM tb_kategori");


?>

<nav class="navbar navbar-expand-lg">
        <div class="container"><a href="index.php" class="navbar-brand home"><img src="img/mesin_cuci.png" width="80px"hight="80px"  class="d-inline-block d-md-none"><span class="sr-only">Obaju - go to homepage</span></a>
          <div class="navbar-buttons">
            <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></button>
          </div>
          <div id="navigation" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                      <div class="col-md-6 col-lg-3">
                        <h5>ANTAR JEMPUT </h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.html" class="nav-link">T-shirts</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Shirts</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Pants</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Accessories</a></li>
                        </ul>
                      </div>
                     
                      <div class="col-md-6 col-lg-3">
                        <h5>TIDAK ANTAR JEMPUT</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Featured</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                        </ul>
                        <h5>Looks and trends</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="nav-item"><a href="index.php" class="nav-link" data-hover>Katalog</a></li>
              <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Kategori Berdasarkan<b class="caret"></b></a>
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row"> 
                      
                        <?php 

                          while($r = mysqli_fetch_array($o)){

                        ?>
                        <div class="col-lg-4">
                          <input class="cariSesuatu" type="checkbox" name="kategori[]" <?php echo "value=".$r['id_kategori'].">".$r['jenis_kategori'].""; ?> >

                            
                        </div>
                        <?php }  ?> 

                      <hr>
                      <button type="submit" class="btn btn-primary" id="btnCari">Filter Kategori<i class="fa fa-send"></i></button>
                      <!-- <button id="btnCari">Filter</button> -->

                    </div>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Urut Berdasarkan<b class="caret"></b></a>
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                      <div class="col-md-6 col-lg-3">                        
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="cari.php?listing=baru" class="nav-link">Laundry Terbaru</a></li>
                          <li class="nav-item"><a href="cari.php?listing=lama" class="nav-link">Laundry Terlama</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
            <div class="navbar-buttons d-flex justify-content-end">
              <div id="search-not-mobile" class="navbar-collapse collapse d-none d-lg-block"><a data-toggle="collapse" href="#search" class="btn btn-primary navbar-btn"><i class="fa fa-search"></i><span>Cari Laundry</span></a></div>
            </div>
          </div>
        </div>
      </nav>
      <div id="search" class="collapse">
        <div class="container">
          <form role="search" class="ml-auto" action="cari.php" method="get">
            <div class="input-group">
              <input type="text" placeholder="Cari nama laundry" name="search" class="form-control" >
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>


<script>
        
        var filter = [];

        $('#btnCari').on('click', function(){ //id btncari diklik melakukan fungsi parameter didalamnya
          filter = [];    
            $('.cariSesuatu').each(function(){ // class cariSesuatu melakukan looping dalam parameter
                if($(this).prop('checked')){ // jika class cariSesuatu tercentang
                  filter.push(this.value);  // filter menambahkan array sesuai class cariSesuatu yang dicentang
                }
            });
            document.location = "http://localhost/Rebellion/cari.php?id="+filter.toString(); 
            // mengarahkan lokasi document ke cari.php
        });

    </script>