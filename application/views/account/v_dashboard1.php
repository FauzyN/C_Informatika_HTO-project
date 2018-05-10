<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="<?php echo base_url()?>assets/cafehto/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/cafehto/css/grid.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/cafehto/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/cafehto/css/camera.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/cafehto/css/jquery.fancybox.css">

    <script src="<?php echo base_url()?>assets/cafehto/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/cafehto/js/jquery-migrate-1.2.1.js"></script>

    <!--[if lt IE 9]>
    <html class="lt-ie9">
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

    <script src='<?php echo base_url()?>assets/cafehto/js/device.min.js'></script>
</head>

<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>

        <div class="camera_container">
            <div id="camera" class="camera_wrap">

                <div data-thumb="<?php echo base_url()?>assets/cafehto/images/slide01_thumb.jpg" data-src="<?php echo base_url()?>assets/cafehto/images/slide01.jpg">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
                <div data-thumb="<?php echo base_url()?>assets/cafehto/images/slide02_thumb.jpg" data-src="<?php echo base_url()?>assets/cafehto/images/slide02.jpg">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
                <div data-thumb="<?php echo base_url()?>assets/cafehto/images/slide03_thumb.jpg" data-src="<?php echo base_url()?>assets/cafehto/images/slide03.jpg">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
            </div>

            <div class="brand wow fadeIn">
                <h1 class="brand_name">
                    <a href="./">Halftime</a>
                </h1>
            </div>
        </div>

        <div class="toggle-menu-container">
            <nav class="nav">
                <div class="nav_title"></div>
                <a class="sf-menu-toggle fa fa-bars" href="#"></a>
                <ul class="sf-menu">
                    <li class="active">
                        <a href="./">Home</a>
                    </li>
                    <li>
                        <a href="index.html">About</a>
                        <ul>
                            <li>
                                <a href="#"></a>
                            </li>
                            <li>
                                <a href="#experience">Our Experience</a>
                            </li>
                            <li>
                                <a href="#chef">Our Chefs</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html">Contact Us</a>
                    </li>
                    <li>
                        <a href="index.html">Log In</a>
                    </li>
                </ul>
            </nav>
        </div>

    </header>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>



            <section class="parallax parallax2" data-parallax-speed="-0.4">

            <div class="container">
            <h2><xy>Order Now</xy></h2>


<button class="button button2">Klik here!</button>



            <div class="decoration"><p class="btn">Thank You</p></div>
            </div>
        </section>
        <section id="experience"class="parallax parallax1" data-parallax-speed="-0.4">
            <div  class="container">
                <h2><xy>Our Experience</xy></h2>
                <p class="indents-xy">Cafe ini sudah dibangun sekitar tahun 2016. Dibangun oleh pemiliknya yaitu Muhammad Kautsar. Cafe ini dibangun awalnya hanya sebagai usaha kecil kecilan dan tempatnya juga tidak terlalu besar. Namun seiring berkembangnya kami, Cafe ini akhirnya bisa cukup besar dan dikenal hingga sekarang. </p>
                <div class="decoration"><a href="#" class="btn">Back to Top</a></div>
            </div>
        </section>
        <section id="chef" class="parallax parallax3" data-parallax-speed="-0.4">
            <div class="container">
                <h2><xy>Our Chefs</xy></h2>
                <div class="row row__offset-1">
                    <div class="grid_4">
                        <figure>
                            <div class="img lazy-img" style="padding-bottom: 101.0810810810811%;"><img data-src="<?php echo base_url()?>assets/cafehto/images/page-1_img12a.jpg" alt=""></div>
                            <figcaption>Indra</figcaption>
                        </figure>
                        <h3>Chef paling senior yang ada di cafe ini. Bisa dibilang dia adalah kepala dapur. Semua masalah dapur dia yang bertanggung jawab</h3>
                    </div>
                    <div class="grid_4">
                        <figure>
                            <div class="img lazy-img" style="padding-bottom: 101.0810810810811%;"><img data-src="<?php echo base_url()?>assets/cafehto/images/page-1_img13a.jpg" alt=""></div>
                            <figcaption>Nissa</figcaption>
                        </figure>
                        <h3>Satu satunya chef wanita, dia juga termasuk chef senior namun lebih muda sedikit.</h3>
                    </div>
                    <div class="grid_4">
                        <figure>
                            <div class="img lazy-img" style="padding-bottom: 101.0810810810811%;"><img data-src="<?php echo base_url()?>assets/cafehto/images/page-1_img14a.jpg" alt=""></div>
                            <figcaption>Yaman</figcaption>
                        </figure>
                        <h3>Chef paling muda di cafe.</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="parallax parallax4" data-parallax-speed="-0.4">>
            <div class="container center">
                <h2><hi>Make a Reservation</hi></h2>
                <p class="indents-2">Kalian bisa membooking meja dengan pergi ke tempat langsung dan membooking meja di kasir. Atau kalian juga bisa menelepon nomor di bawah ini untuk membooking. Biaya untuk membooking satu meja yaitu sebesar Rp. 30,000</p>
                <address class="address-1">

                    <p><em>+62812-3456-7890</em></p>
                    <p class="indents-2">untuk alamat kami:</p>
                    <dl><dt>Address:</dt> <dd>Jl. Lampineung, No. 20, Banda Aceh</dd></dl>
                </address>
            </div>
        </section>
    </main>

    <!--========================================================
                              FOOTER
    =========================================================-->
    <footer>
        <div class="container">
            <ul class="socials">
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-tumblr"></a></li>
                <li><a href="#" class="fa fa-google-plus"></a></li>
            </ul>
            <div class="copyright">© <span id="copyright-year"></span> |
                <a href="#">Privacy Policy</a>
            </div>
        </div>

    </footer>
</div>

<script src="<?php echo base_url()?>assets/cafehto/js/script.js"></script>
</body>
</html>