<?php 
$root = "E-Commerce_Project-main";
?>
<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="/<?=$root ?>/Dasboard/index.php">
                                <div class="sb-nav-link-icon"><i class=""></i></div>
                                Welcome 
                            </a>
                            <hr>
                            <a class="nav-link" href="/<?=$root ?>/Dasboard/pakaian/list_pakaian.php">
                                <div class="sb-nav-link-icon"><i class=""></i></div>
                                Produk
                            </a>
                            <hr>
                            <a class="nav-link" href="/<?=$root ?>/Dasboard/tipe_pakaian/list_tipe_pakaian.php">
                                <div class="sb-nav-link-icon"><i class=""></i></div>
                                Jenis Produk
                            </a>
                            <hr>
                            <a class="nav-link" href="/<?=$root ?>/Dasboard/pesanan/list_pesanan.php">
                                <div class="sb-nav-link-icon"><i class=""></i></div>
                                Data Pesanan
                            </a>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                    <a class="btn btn-button btn-l text-uppercase" href="../frontend/index.php" class="get-started-btn scrollto">landing Page</a>
                    
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">