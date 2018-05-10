<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Casablanca Portfolio HTML5 free Template</title>
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
        <link rel="stylesheet" href="<?php echo base_url()?>assets/casablanca/assets/css/responsive.css"/>

        <script src="<?php echo base_url()?>assets/casablanca/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

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
          </main>
        </body>

        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="main_mix_content text-center sections">
                        <div class="head_title text-center wow fadeInUp" data-wow-duration="700ms">
                            <h2>Book A Place</h2>
                            <div class="separator"></div>
                        </div>
                        <div class="main_mix_menu">
                            <ul>
                                <li class="filter" data-filter="all">Semua</li>
                                <li class="filter" data-filter=".cat1">Kosong</li>
                                <li class="filter" data-filter=".cat2">Terisi</li>
                            </ul>
                        </div>

                        <form action="<?php echo base_url(). 'index.php/Meja/tambah_meja'; ?>" method="post">
                        <div id="mixcontent" class="mixcontent">

                          <!--meja1-->
                            <div class="col-sm-4 mix cat1">
                                <div class="single_mixi_portfolio">
                                    <img src="<?php echo base_url()?>assets/casablanca/assets/images/pf1.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text">
                                            <h2>Meja 1</h2>
                                            <p>status : #</p>
                                            <p>Kursi : # Orang</p>
                                              <input class="button" type="submit" name="terisi" value=2 data-hover="CLICK ME"></input>
                                            <div class="separator2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--meja2-->
                            <div class="col-sm-4 mix cat2 ">
                                <div class="single_mixi_portfolio">
                                    <img src="<?php echo base_url()?>assets/casablanca/assets/images/pf2.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text">
                                            <h2>Meja #</h2>
                                            <p>status : #</p>
                                            <p>Kursi : # Orang</p>
                                            <button type="submit" name="terisi" value=10>Pesan</button>
                                            <div class="separator2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--meja3-->
                            <div class="col-sm-4 mix cat1 cat4">
                                <div class="single_mixi_portfolio">
                                    <img src="<?php echo base_url()?>assets/casablanca/assets/images/pf3.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text">
                                            <h2>Meja #</h2>
                                            <p>status : #</p>
                                            <p>Kursi : # Orang</p>
                                            <button type="button" name="button">Pesan</button>
                                            <div class="separator2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--meja4-->
                            <div class="col-sm-4 mix cat3 cat4 ">
                                <div class="single_mixi_portfolio">
                                    <img src="<?php echo base_url()?>assets/casablanca/assets/images/pf4.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text">
                                            <h2>Meja #</h2>
                                            <p>status : #</p>
                                            <p>Kursi : # Orang</p>
                                            <button type="button" name="button">Pesan</button>
                                            <div class="separator2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--meja5-->
                            <div class="col-sm-4 mix cat4 ">
                                <div class="single_mixi_portfolio">
                                    <img src="<?php echo base_url()?>assets/casablanca/assets/images/pf5.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text">
                                            <h2>Meja #</h2>
                                            <p>status : #</p>
                                            <p>Kursi : # Orang</p>
                                            <button type="button" name="button">Pesan</button>
                                            <div class="separator2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--meja6-->
                            <div class="col-sm-4 mix cat1 cat2 ">
                                <div class="single_mixi_portfolio">
                                    <img src="<?php echo base_url()?>assets/casablanca/assets/images/pf6.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text">
                                            <h2>Meja #</h2>
                                            <p>status : #</p>
                                            <p>Kursi : # Orang</p>
                                            <button type="button" name="button">Pesan</button>
                                            <div class="separator2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--meja7-->
                            <div class="col-sm-4 mix cat1 cat2 ">
                                <div class="single_mixi_portfolio">
                                    <img src="<?php echo base_url()?>assets/casablanca/assets/images/pf6.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text">
                                            <h2>Meja #</h2>
                                            <p>status : #</p>
                                            <p>Kursi : # Orang</p>
                                            <button type="button" name="button">Pesan</button>
                                            <div class="separator2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--meja8-->
                            <div class="col-sm-4 mix cat1 cat2 ">
                                <div class="single_mixi_portfolio">
                                    <img src="<?php echo base_url()?>assets/casablanca/assets/images/pf6.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text">
                                            <h2>Meja #</h2>
                                            <p>status : #</p>
                                            <p>Kursi : # Orang</p>
                                            <button type="button" name="button">Pesan</button>
                                            <div class="separator2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--meja9-->
                            <div class="col-sm-4 mix cat1 cat2 ">
                                <div class="single_mixi_portfolio">
                                    <img src="<?php echo base_url()?>assets/casablanca/assets/images/pf6.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text">
                                            <h2>Meja #</h2>
                                            <p>status : #</p>
                                            <p>Kursi : # Orang</p>
                                            <button type="button" name="button">Pesan</button>
                                            <div class="separator2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--meja10-->
                            <div class="col-sm-4 mix cat1 cat2 ">
                                <div class="single_mixi_portfolio">
                                    <img src="<?php echo base_url()?>assets/casablanca/assets/images/pf6.jpg" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <div class="overflow_hover_text">
                                            <h2>Meja #</h2>
                                            <p>status : #</p>
                                            <p>Kursi : # Orang</p>
                                            <button type="button" name="button">Pesan</button>
                                            <div class="separator2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="gap"></div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section> <!-- End of portfolio two Section -->



        <section id="heretohelp" class="heretohelp">
            <div class="creativity_overlay">
                <div class="container">
                    <div class="row">
                        <div class="main_creativity main_heretohelp text-center">
                            <a href="" class="btn btn-larg">We’re here to help.</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer id="footer" class="footer">
            <div class="container">
                <div class="main_footer text-center">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="footer_logo">
                                <a href="#">HTO</a>
                            </div>
                        </div>

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
    =========================================================-->
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
      </main>
    </body>


    <!--========================================================
                              FOOTER
    =========================================================-->
