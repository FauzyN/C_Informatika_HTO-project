<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
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
        <link rel="apple-touch-icon" href="<?php echo base_url()?>assets/casablanca/apple-touch-icon.png">


        <link rel="stylesheet" href="<?php echo base_url()?>assets/casablanca/assets/css/navmenu.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/casablanca/assets/fonts/stylesheet.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/casablanca/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/casablanca/assets/css/jquery.fancybox.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/casablanca/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/casablanca/assets/css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/casablanca/assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/casablanca/assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/casablanca/assets/css/responsive.css" />

        <script src="<?php echo base_url()?>assets/casablanca/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
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
                            <h2>Pilih Meja</h2>
                            <div class="separator"></div>
                        </div>
                        <!--<div class="main_mix_menu">
                            <ul>
                                <li class="filter" data-filter="promo">Semua</li>
                                <li class="filter" data-filter="makanan">Kosong</li>
                                <li class="filter" data-filter="minuman">Terisi</li>
                            </ul>
                        </div>
                      -->
                        <div id="mixcontent" class="mixcontent">
                            <div class="row box-2">

                              <!--meja1-->
                                  <div class="col-sm-4 mix minuman">
                                    <h2>Meja 1</h2>
                                      <div class="single_mixi_portfolio">
                                          <img src="<?php echo base_url()?>assets/casablanca/assets/images/gray1.jpg" alt="" />
                                          <div class="mixi_portfolio_overlay">
                                              <div class="overflow_hover_text">
                                                  <p>status : terisi</p>
                                                  <p>Kursi : 2 Orang</p>
                                                    <h2 class="klik"><a href="#">Pesan</a></h2>
                                                  <div class="separator2"></div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <!--meja2-->
                                      <div class="col-sm-4 mix minuman">
                                        <h2>Meja 2</h2>
                                          <div class="single_mixi_portfolio">
                                              <img src="<?php echo base_url()?>assets/casablanca/assets/images/gray1.jpg" alt="" />
                                              <div class="mixi_portfolio_overlay">
                                                  <div class="overflow_hover_text">
                                                      <p>status : terisi</p>
                                                      <p>Kursi : 2 Orang</p>
                                                        <h2 class="klik"><a href="#">Pesan</a></h2>
                                                      <div class="separator2"></div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>

                                      <!--meja3-->
                                          <div class="col-sm-4 mix makanan">
                                            <h2>Meja 3</h2>
                                              <div class="single_mixi_portfolio">
                                                  <img src="<?php echo base_url()?>assets/casablanca/assets/images/gray1.jpg" alt="" />
                                                  <div class="mixi_portfolio_overlay">
                                                      <div class="overflow_hover_text">
                                                          <p>status : kosong</p>
                                                          <p>Kursi : 4 Orang</p>
                                                            <h2 class="klik"><a href="#">Pesan</a></h2>
                                                          <div class="separator2"></div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>

                                          <!--meja4-->
                                              <div class="col-sm-4 mix minuman">
                                                <h2>Meja 4</h2>
                                                  <div class="single_mixi_portfolio">
                                                      <img src="<?php echo base_url()?>assets/casablanca/assets/images/gray1.jpg" alt="" />
                                                      <div class="mixi_portfolio_overlay">
                                                          <div class="overflow_hover_text">
                                                              <p>status : terisi</p>
                                                              <p>Kursi : 4 Orang</p>
                                                                <h2 class="klik"><a href="#">Pesan</a></h2>
                                                              <div class="separator2"></div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>

                                              <!--meja5-->
                                                  <div class="col-sm-4 mix minuman">
                                                    <h2>Meja 5</h2>
                                                      <div class="single_mixi_portfolio">
                                                          <img src="<?php echo base_url()?>assets/casablanca/assets/images/gray1.jpg" alt="" />
                                                          <div class="mixi_portfolio_overlay">
                                                              <div class="overflow_hover_text">
                                                                  <p>status : terisi</p>
                                                                  <p>Kursi : 4 Orang</p>
                                                                    <h2 class="klik"><a href="#">Pesan</a></h2>
                                                                  <div class="separator2"></div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>

                                                  <!--meja6-->
                                                      <div class="col-sm-4 mix minuman">
                                                        <h2>Meja 6</h2>
                                                          <div class="single_mixi_portfolio">
                                                              <img src="<?php echo base_url()?>assets/casablanca/assets/images/gray1.jpg" alt="" />
                                                              <div class="mixi_portfolio_overlay">
                                                                  <div class="overflow_hover_text">
                                                                      <p>status : terisi</p>
                                                                      <p>Kursi : 4 Orang</p>
                                                                        <h2 class="klik"><a href="#">Pesan</a></h2>
                                                                      <div class="separator2"></div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>

                                                      <!--meja7-->
                                                          <div class="col-sm-4 mix makanan">
                                                            <h2>Meja 7</h2>
                                                              <div class="single_mixi_portfolio">
                                                                  <img src="<?php echo base_url()?>assets/casablanca/assets/images/gray1.jpg" alt="" />
                                                                  <div class="mixi_portfolio_overlay">
                                                                      <div class="overflow_hover_text">
                                                                          <p>status : kosong</p>
                                                                          <p>Kursi : 2 Orang</p>
                                                                            <h2 class="klik"><a href="#">Pesan</a></h2>
                                                                          <div class="separator2"></div>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>

                                                          <!--meja8-->
                                                              <div class="col-sm-4 mix minuman">
                                                                <h2>Meja 8</h2>
                                                                  <div class="single_mixi_portfolio">
                                                                      <img src="<?php echo base_url()?>assets/casablanca/assets/images/gray1.jpg" alt="" />
                                                                      <div class="mixi_portfolio_overlay">
                                                                          <div class="overflow_hover_text">
                                                                              <p>status : terisi</p>
                                                                              <p>Kursi : 2 Orang</p>
                                                                                <h2 class="klik"><a href="#">Pesan</a></h2>
                                                                              <div class="separator2"></div>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              </div>

                                                              <!--meja9-->
                                                                  <div class="col-sm-4 mix minuman">
                                                                    <h2>Meja 9</h2>
                                                                      <div class="single_mixi_portfolio">
                                                                          <img src="<?php echo base_url()?>assets/casablanca/assets/images/gray1.jpg" alt="" />
                                                                          <div class="mixi_portfolio_overlay">
                                                                              <div class="overflow_hover_text">
                                                                                <p>Kursi : 6 Orang</p>
                                                                                  <p>status : terisi</p>
                                                                                    <h2 class="klik"><a href="#">Pesan</a></h2>
                                                                                  <div class="separator2"></div>
                                                                              </div>
                                                                          </div>
                                                                      </div>
                                                                  </div>

                                                                  <!--meja10-->
                                                                      <div class="col-sm-4 mix minuman">
                                                                        <h2>Meja 10</h2>
                                                                          <div class="single_mixi_portfolio">
                                                                              <img src="<?php echo base_url()?>assets/casablanca/assets/images/gray1.jpg" alt="" />
                                                                              <div class="mixi_portfolio_overlay">
                                                                                  <div class="overflow_hover_text">
                                                                                      <p>status : terisi</p>
                                                                                      <p>Kursi : 6 Orang</p>
                                                                                        <h2 class="klik"><a href="#">Pesan</a></h2>
                                                                                      <div class="separator2"></div>
                                                                                  </div>
                                                                              </div>
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

        <script src="<?php echo base_url()?>assets/casablanca/assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="<?php echo base_url()?>assets/casablanca/assets/js/vendor/bootstrap.min.js"></script>

        <script src="<?php echo base_url()?>assets/casablanca/assets/js/jquery.easypiechart.min.js"></script>
        <script src="<?php echo base_url()?>assets/casablanca/assets/js/jquery.mixitup.min.js"></script>
        <script src="<?php echo base_url()?>assets/casablanca/assets/js/jquery.easing.1.3.js"></script>
        <script src="<?php echo base_url()?>assets/casablanca/assets/js/jquery.magnific-popup.js"></script>
        <script src="<?php echo base_url()?>assets/casablanca/assets/js/jquery.fancybox.pack.js"></script>




        <script src="<?php echo base_url()?>assets/casablanca/assets/js/plugins.js"></script>
        <script src="<?php echo base_url()?>assets/casablanca/assets/js/main.js"></script>

    </body>
</html>


    <!--========================================================
                              CONTENT
    =========================================================
    <body>
      <h2>Pilih Meja</h2>
      <main>
        <div class="main">
        <div id="myBtnContainer">
          <form action="<?php echo base_url(). 'index.php/Meja/tambah_meja'; ?>" method="post">
            <input class="button" type="submit" name="terisi" value=1 data-hover="CLICK ME"><span>1</span></input>
            <input class="button" type="submit" name="terisi" value=2 data-hover="CLICK ME"><span>1</span></input>
            <input class="button" type="submit" name="terisi" value=3 data-hover="CLICK ME"><span>1</span></input>
            <input class="button" type="submit" name="terisi" value=4 data-hover="CLICK ME"><span>1</span></input>
            <input class="button" type="submit" name="terisi" value=5 data-hover="CLICK ME"><span>1</span></input>
            <input class="button" type="submit" name="terisi" value=6 data-hover="CLICK ME"><span>1</span></input>
            <input class="button" type="submit" name="terisi" value=7 data-hover="CLICK ME"><span>1</span></input>
            <input class="button" type="submit" name="terisi" value=8 data-hover="CLICK ME"><span>1</span></input>
            <input class="button" type="submit" name="terisi" value=9 data-hover="CLICK ME"><span>1</span></input>
            <input class="button" type="submit" name="terisi" value=10 data-hover="CLICK ME"><span>1</span></input>
          </form>
          </div>
        </div>

        meja1
            <div class="col-sm-4 mix minuman">
                <div class="single_mixi_portfolio">
                    <img src="<?php echo base_url()?>assets/casablanca/assets/images/gray1.jpg" alt="" />
                    <div class="mixi_portfolio_overlay">
                        <div class="overflow_hover_text">
                            <h2>Meja 1</h2>
                            <p>status : #</p>
                            <p>Kursi : # Orang</p>
                              <input class="button" type="submit" name="terisi" value=1></input>
                            <div class="separator2"></div>
                        </div>
                    </div>
                </div>
            </div>
      </main>
    </body>


    ========================================================
                              FOOTER
    =========================================================-->
