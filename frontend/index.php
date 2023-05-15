<?php
require_once "header.php";
require_once "../Dasboard/dbkoneksi.php";
?>
<?php 
   $sql = "SELECT * FROM pakaian";
   $rs = $dbh->query($sql);
?>
    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Product</h2>
          <p>Product</p>
        </div>

        <div class="row">
        <?php foreach($rs as $row){?>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/product/produckgw.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4><?=$row['nama']?></h4>
                <span>$<?=$row['harga']?></span>             
                <a class="btn btn-info btn-l text-uppercase" href="form_pesanan.php" class="get-started-btn scrollto">BUY</a>
              </div>
            </div>
          </div>
        <?php }?>

        </div>

      </div>
    </section><!-- End Team Section -->
<?php
require_once "foother.php";
 ?>
    