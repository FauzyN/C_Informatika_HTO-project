<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Book A Place</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php base_url();?>assets/cafe/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php base_url();?>assets/cafe/css/grid.css">
    <link rel="stylesheet" href="<?php base_url();?>assets/cafe/css/style.css">
    <link rel="stylesheet" href="<?php base_url();?>assets/cafe/css/stylemeja.css">

    <script src="<?php base_url();?>assets/cafe/js/jquery.js"></script>
    <script src="<?php base_url();?>assets/cafe/js/jquery-migrate-1.2.1.js"></script>

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

    <script src='<?php base_url();?>assets/cafe/js/device.min.js'></script>
</head>

<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>

        <div id="stuck_container" class="stuck_container">
            <div class="container">

                <div class="brand">
                    <h1 class="brand_name">
                        <a href="./">Halftime Order</a>
                    </h1>
                </div>

                <nav class="nav">
                    <ul class="sf-menu">
                        <li>
                            <a href="./">Home</a>
                        </li>
                        <li>
                            <a href="index-1.html">About</a>
                            <ul>
                                <li>
                                    <a href="#">Quisque nulla</a>
                                </li>
                                <li>
                                    <a href="#">Vestibulum libero</a>
                                    <ul>
                                        <li>
                                            <a href="#">Lorem</a>
                                        </li>
                                        <li>
                                            <a href="#">Dolor</a>
                                        </li>
                                        <li>
                                            <a href="#">Sit amet</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Vivamus eget nibh</a>
                                </li>
                            </ul>
                        </li>
                        <li class="active">
                            <a href="index-2.html">Book a Place</a>
                        </li>
                        <li>
                            <a href="index-3.html">Menu</a>
                        </li>
                        <li>
                            <a href="index-4.html">Contacts</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    </header>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <body>
      <h2>Pilih Meja</h2>
      <main>
        <div class="main">
        <div id="myBtnContainer">
          <form action="<?php echo base_url(). 'tambah_meja'; ?>" method="post">
            <input class="button" type="submit" name="data" value="tambah" data-hover="CLICK ME" ><span>1</span></input>
            <input class="button" type="submit" value=tambah data-hover="CLICK ME" ><span>2</span></input>
            <input class="button" type="submit" value=tambah data-hover="CLICK ME" ><span>3</span></input>
            <input class="button" type="submit" value=tambah data-hover="CLICK ME" ><span>4</span></input>
            <input class="button" type="submit" value=tambah data-hover="CLICK ME" ><span>5</span></input>
            <input class="button" type="submit" value=tambah data-hover="CLICK ME" ><span>6</span></input>
            <input class="button" type="submit" value=tambah data-hover="CLICK ME" ><span>7</span></input>
            <input class="button" type="submit" value=tambah data-hover="CLICK ME" ><span>8</span></input>
            <input class="button" type="submit" value=tambah data-hover="CLICK ME" ><span>9</span></input>
            <input class="button" type="submit" value=tambah data-hover="CLICK ME" ><span>10</span></input>
          </form>
          </div>
        </div>
      </main>
    </body>


    <!--========================================================
                              FOOTER
    =========================================================-->
    <footer>
        <div class="container">

            <div class="copyright">© <span id="copyright-year"></span> |
                <a href="#">HTO</a>
            </div>
        </div>

    </footer>
</div>

<script src="<?php base_url();?>assets/cafe/js/script.js"></script>
</body>
</html>
