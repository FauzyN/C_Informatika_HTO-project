<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Halftime Order</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">


        <link rel="stylesheet" href="<?php echo base_url()?>assets/sat/assets/css/navmenu.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/sat/assets/fonts/stylesheet.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/sat/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/sat/assets/css/jquery.fancybox.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/sat/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/sat/assets/css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/sat/assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/sat/assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/sat/assets/css/responsive.css" />

        <script src="<?php echo base_url()?>assets/sat/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <nav id="main-nav">
            <ul>
                <li><a <?php echo anchor('dashboard','home');?>></a></li>
                <li><a <?php echo anchor('meja','order now'); ?>></a></li>
                <li><a <?php echo anchor('pesan','menu'); ?>></a></li>
                <li><a href="<?php echo base_url()?>assets/Helpview/Hhelp.html"><span>Help</span></a></li>

            </ul>
            <a href="#" class="cd-close-menu">Close<span></span></a>
        </nav>

        <section id="home" class="home">
            <div class="overlay">
                <div class="container">
                    <div class="div-menu">
                        <header class="cd-header">
                            <a class="cd-menu-trigger" href="#main-nav"><span></span></a>
                        </header>
                    </div>
                <div class="row">
                    <div class="col-sm-12 ">
                        <div class="main_home_slider text-center">
                            <div class="single_home_slider">
                                <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                    <h1>Welcome</h1>
                                        <div class="whiseparator"></div>
                                            <p class="subtitle">Click Button atau Scroll untuk Order!</p>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="mouse-scroll" href="#creativity">
                        <span class="mouse">
                            <span class="mouse-movement"></span>
                        </span>
                    </a>
                </div>
            </div>
        </section>

        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="main_mix_content text-center sections">
                        <div class="head_title text-center wow fadeInUp" data-wow-duration="700ms">
                            <h2>MENU</h2>
                            <div class="separator"></div>
                        </div>
                        <div class="main_mix_menu">
                            <ul>
                                <li class="filter" data-filter=".promo">Promo</li>
                                <li class="filter" data-filter=".foods">Foods</li>
                                <li class="filter" data-filter=".drinks">Driks</li>
                            </ul>
                        </div>

                        <div id="mixcontent" class="mixcontent">
                            <div class="row box-2">
                            <div class="col-sm-4 mix promo">
                                <div class="single_mixi_portfolio">
                                    <img src="<?php echo base_url()?>assets/sat/assets/images/pizza.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text">
                                            <h2>Pizza (Promo 50%)</h2>
                                            <p>Rp.15.000</p>
                                            <h2 class="klik"><a href="<?php echo base_url()?>assets/sat/order_promo.php">Pesan</a></h2>
                                            <div class="separator2"></div>
                                        </div>
                                    </div>
                                    <h5>PROMO 50%</h5>
                                    <p>Pizza</p>
                                </div>
                            </div>
                            <div class="col-sm-4 mix promo">
                                <div class="single_mixi_portfolio">
                                    <img src="<?php echo base_url()?>assets/sat/assets/images/Nasi goreng.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text">
                                            <h2>Nasi Goreng (Promo 20%)</h2>
                                            <p>Rp.12.000</p>
                                            <h2 class="klik"><a href="<?php echo base_url()?>assets/sat/order_promo.php">Pesan</a></h2>
                                            <div class="separator2"></div>
                                        </div>
                                    </div>
                                    <h5>PROMO 20%</h5>
                                    <p>Nasi Goreng</p>
                                </div>
                            </div>
                            <div class="col-sm-4 mix promo">
                                <div class="single_mixi_portfolio">
                                    <img src="<?php echo base_url()?>assets/sat/assets/images/rainbow.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text">
                                            <h2>Rainbow Shake (Promo 10%)</h2>
                                            <p>Rp.8.000</p>
                                            <h2 class="klik"><a href="<?php echo base_url()?>assets/sat/order_promo.php">Pesan</a></h2>
                                            <div class="separator2"></div>
                                        </div>
                                    </div>
                                    <h5>PROMO 10%</h5>
                                    <p>Rainbow Shake</p>
                                </div>
                            </div>
                                <br/>
                            <div class="col-sm-4 mix promo">
                                <div class="single_mixi_portfolio">
                                    <img src="<?php echo base_url()?>assets/sat/assets/images/cooltura-pienjeto-topla-voda-reshava-sedum-zdravstveni-problemi-20779.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text">
                                            <h2>Air Hangat (Promo)</h2>
                                            <p>Gratis</p>
                                            <h2 class="klik"><a href="<?php echo base_url()?>assets/sat/order_makanan_minuman.php">Pesan</a></h2>
                                            <div class="separator2"></div>
                                        </div>
                                    </div>
                                    <h5>GRATIS!!!</h5>
                                    <p>Air Hangat</p>
                                </div>
                            </div>
                                <br/>
                            <div class="col-sm-4 mix promo">
                                <div class="single_mixi_portfolio">
                                    <img src="<?php echo base_url()?>assets/sat/assets/images/133651_airdingints.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text">
                                            <h2>Es Kosong (Promo)</h2>
                                            <p>Gratis</p>
                                            <h2 class="klik"><a href="<?php echo base_url()?>assets/sat/order_makanan_minuman.php">Pesan</a></h2>
                                            <div class="separator2"></div>
                                        </div>
                                    </div>

                                    <h5>GRATIS!!!</h5>
                                    <p>Es Kosong</p>
                                </div>
                            </div>
                                <br/>
                            <div class="col-sm-4 mix promo">
                                <div class="single_mixi_portfolio">
                                    <img src="<?php echo base_url()?>assets/sat/assets/images/Gorengan - Copy.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text">
                                            <h2>5 Gorengan (Promo)</h2>
                                            <p>Gratis</p>
                                            <h2 class="klik"><a href="<?php echo base_url()?>assets/sat/order_makanan_minuman.php">Pesan</a></h2>
                                            <div class="separator2"></div>
                                        </div>
                                    </div>
                                    <h5>GRATIS!!!</h5>
                                    <p>Gorengan</p>
                                </div>
                            </div>
                            </div>
                            <div class="row box-2">
                            <div class="col-sm-4 mix foods">
                                <div class="single_mixi_portfolio">
                                    <img src="<?php echo base_url()?>assets/sat/assets/images/mie aceh.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text">
                                            <h2>Mie Tumis</h2>
                                            <p>Rp.12.000</p>
                                            <h2 class="klik"><a href="<?php echo base_url()?>assets/sat/order_makanan_minuman.php">Pesan</a></h2>
                                            <div class="separator2"></div>
                                        </div>
                                    </div>
                                    <h5>Kandungan :</h5>
                                    <p>Mie kuning, Minyak, Bawang merah, Kol, Tauge, Tomat, Tangkai daun bawang, Tangkai seledri, Kaldu ayam, Kecap manis, Kecap asin, Garam, Gula, Lada halus, Siung bawang putih, Buah kemiri</p>
                                </div>
                            </div>
                            <div class="col-sm-4 mix foods">
                                <div class="single_mixi_portfolio">
                                    <img src="<?php echo base_url()?>assets/sat/assets/images/Nasi goreng.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text">
                                            <h2>Nasi Goreng</h2>
                                            <p>Rp.15.000</p>
                                            <h2 class="klik"><a href="<?php echo base_url()?>assets/sat/order_makanan_minuman.php">Pesan</a></h2>
                                            <div class="separator2"></div>
                                        </div>
                                    </div>
                                    <h5>Kandungan :</h5>
                                    <p>Nasi, Bawang merah, Bawang putih, Cabai merah, Daun bawang, Kecap manis, Garam, Merica, Minyak</p>
                                </div>
                            </div>
                            <div class="col-sm-4 mix foods">
                                <div class="single_mixi_portfolio">
                                    <img src="<?php echo base_url()?>assets/sat/assets/images/martabak.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text">
                                            <h2>Martabak</h2>
                                            <p>Rp.7.000</p>
                                            <h2 class="klik"><a href="<?php echo base_url()?>assets/sat/order_makanan_minuman.php">Pesan</a></h2>
                                            <div class="separator2"></div>
                                        </div>
                                    </div>
                                    <h5>Kandungan :</h5>
                                    <p>Telur, Bawang merah, Bawang putih, Garam, Batang seledri, Batang daun bawang</p>
                                </div>
                            </div>
                            </div>
                            <div class="row box-2">
                            <div class="col-sm-4 mix foods">
                                <div class="single_mixi_portfolio">
                                    <img src="<?php echo base_url()?>assets/sat/assets/images/pizza.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text">
                                            <h2>Pizza</h2>
                                            <p>Rp.20.000</p>
                                            <h2 class="klik"><a href="<?php echo base_url()?>assets/sat/order_makanan_minuman.php">Pesan</a></h2>
                                            <div class="separator2"></div>
                                        </div>
                                    </div>
                                    <h5>Kandungan :</h5>
                                    <p>Bahan untuk roti:</p>
                                    <p>Tepung terigu, Fermipan, Minyak sayur, Garam, Gula pasir, Air</p>
                                    <p>Bahan untuk topping :</p>
                                    <p>Saus tomat, Keju mozarella, Bawang bombay, Sosis, Buah blue berry, Jamur, Daging</p>
                                </div>
                            </div>
                            <div class="col-sm-4 mix foods">
                                <div class="single_mixi_portfolio">
                                    <img src="<?php echo base_url()?>assets/sat/assets/images/nasi uduk.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text">
                                            <h2>Nasi Uduk</h2>
                                            <p>Rp.12.000</p>
                                            <h2 class="klik"><a href="<?php echo base_url()?>assets/sat/order_makanan_minuman.php">Pesan</a></h2>
                                            <div class="separator2"></div>
                                        </div>
                                    </div>
                                    <h5>Kandungan :</h5>
                                    <p>Nasi, Terong, Tempe, Ayam penyet, Sambal terasi</p>
                                </div>
                            </div>
                            <div class="col-sm-4 mix foods">
                                <div class="single_mixi_portfolio">
                                    <img src="<?php echo base_url()?>assets/sat/assets/images/kentang.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text">
                                            <h2>Kentang Goreng</h2>
                                            <p>Rp.8.000</p>
                                            <h2 class="klik"><a href="<?php echo base_url()?>assets/sat/order_makanan_minuman.php">Pesan</a></h2>
                                            <div class="separator2"></div>
                                        </div>
                                    </div>
                                    <h5>Kandungan :</h5>
                                    <p>Kentang, Garam, Saus tomat, Saus cabai, Mayonnaise</p>
                                </div>
                            </div>
                            </div>
                            <div class="row box-2">
                            <div class="col-sm-4 mix drinks">
                                <div class="single_mixi_portfolio">
                                    <img src="<?php echo base_url()?>assets/sat/assets/images/sanger.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text">
                                            <h2>Sanger</h2>
                                            <p>Rp.6.000</p>
                                            <h2 class="klik"><a href="<?php echo base_url()?>assets/sat/order_makanan_minuman.php">Pesan</a></h2>
                                            <div class="separator2"></div>
                                        </div>
                                    </div>
                                    <h5>Kandungan :</h5>
                                    <p>Kopi arabica, Susu kental manis, Gula pasir, Air</p>
                                </div>
                            </div>
                            <div class="col-sm-4 mix drinks">
                                <div class="single_mixi_portfolio">
                                    <img src="<?php echo base_url()?>assets/sat/assets/images/es timun.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text">
                                            <h2>Es Timun</h2>
                                            <p>Rp.8.000</p>
                                            <h2 class="klik"><a href="<?php echo base_url()?>assets/sat/order_makanan_minuman.php">Pesan</a></h2>
                                            <div class="separator2"></div>
                                        </div>
                                    </div>
                                    <h5>Kandungan :</h5>
                                    <p>Timun, Gula pasir, Syrup melon, Air, Selasih, Jeruk nipis</p>
                                </div>
                            </div>
                            <div class="col-sm-4 mix drinks">
                                <div class="single_mixi_portfolio">
                                    <img src="<?php echo base_url()?>assets/sat/assets/images/tehdingin.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text">
                                            <h2>Teh Dingin</h2>
                                            <p>Rp.5.000</p>
                                            <h2 class="klik"><a href="<?php echo base_url()?>assets/sat/order_makanan_minuman.php">Pesan</a></h2>
                                            <div class="separator2"></div>
                                        </div>
                                    </div>
                                    <h5>Kandungan :</h5>
                                    <p>Teh Celup Teh Botol, Air, Gula pasir, Es batu</p>
                                </div>
                            </div>
                            </div>
                            <div class="row box-2">
                            <div class="col-sm-4 mix drinks">
                                <div class="single_mixi_portfolio">
                                    <img src="<?php echo base_url()?>assets/sat/assets/images/rainbow.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text">
                                            <h2>Rainbow Shake</h2>
                                            <p>Rp.10.000</p>
                                            <h2 class="klik"><a href="<?php echo base_url()?>assets/sat/order_makanan_minuman.php">Pesan</a></h2>
                                            <div class="separator2"></div>
                                        </div>
                                    </div>
                                    <h5>Kandungan :</h5>
                                    <p>Susu, Ice crem, Pewarna makanan, Springkles warna warni, Whipping cream</p>
                                </div>
                            </div>
                            <div class="col-sm-4 mix drinks">
                                <div class="single_mixi_portfolio">
                                    <img src="<?php echo base_url()?>assets/sat/assets/images/teh hijau.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text">
                                            <h2>Teh Hijau</h2>
                                            <p>Rp.8.000</p>
                                            <h2 class="klik"><a href="<?php echo base_url()?>assets/sat/order_makanan_minuman.php">Pesan</a></h2>
                                            <div class="separator2"></div>
                                        </div>
                                    </div>
                                    <h5>Kandungan :</h5>
                                    <p>Teh celup (teh hijau), Gula pasir, Air, Es batu</p>
                                </div>
                            </div>
                            <div class="col-sm-4 mix drinks">
                                <div class="single_mixi_portfolio">
                                    <img src="<?php echo base_url()?>assets/sat/assets/images/coklat.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text">
                                            <h2>Coklat Dingin</h2>
                                            <p>Rp.10.000</p>
                                            <h2 class="klik"><a href="<?php echo base_url()?>assets/sat/order_makanan_minuman.php">Pesan</a></h2>
                                            <div class="separator2"></div>
                                        </div>
                                    </div>
                                    <h5>Kandungan :</h5>
                                    <p>Susu coklat, Gula pasir, Air, Es batu</p>
                                </div>
                            </div>
                            </div>

                            <div class="gap"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- End of portfolio two Section -->

        <footer id="footer" class="footer">
            <div class="container">
                <div class="main_footer text-center">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="footer_logo"></div>
                        </div>
                        <h1><ab>HTO PROJECT</ab></h1>
                        <h4><ab>- 2018 -</ab></h4>
                    </div>
                </div>
            </div>
        </footer>

        <!-- START SCROLL TO TOP  -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="<?php echo base_url()?>assets/sat/assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="<?php echo base_url()?>assets/sat/assets/js/vendor/bootstrap.min.js"></script>

        <script src="<?php echo base_url()?>assets/sat/assets/js/jquery.easypiechart.min.js"></script>
        <script src="<?php echo base_url()?>assets/sat/assets/js/jquery.mixitup.min.js"></script>
        <script src="<?php echo base_url()?>assets/sat/assets/js/jquery.easing.1.3.js"></script>
        <script src="<?php echo base_url()?>assets/sat/assets/js/jquery.magnific-popup.js"></script>
        <script src="<?php echo base_url()?>assets/sat/assets/js/jquery.fancybox.pack.js"></script>




        <script src="<?php echo base_url()?>assets/sat/assets/js/plugins.js"></script>
        <script src="<?php echo base_url()?>assets/sat/assets/js/main.js"></script>

    </body>
</html>
