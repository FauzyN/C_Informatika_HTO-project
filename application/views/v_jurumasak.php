<!DOCTYPE HTML>
<html>
<head>
<title>Juru Masak</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Ultra Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url()?>assets/admin/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url()?>assets/admin/css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link rel="icon" href="<?php echo base_url()?>assets/admin/favicon.ico" type="image/x-icon" >
<!-- font-awesome icons -->
<link href="<?php echo base_url()?>assets/admin/css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
 <!-- js-->
<script src="<?php echo base_url()?>assets/admin/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url()?>assets/admin/js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Comfortaa:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<!-- Metis Menu -->
<script src="<?php echo base_url()?>assets/admin/js/metisMenu.min.js"></script>
<script src="<?php echo base_url()?>assets/admin/js/custom.js"></script>
<link href="<?php echo base_url()?>assets/admin/css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<style>
.h {
	font-family: American Typewriter, serif;
	font-style: normal;
	font-weight: 500;
	font-variant: small-caps;
	font-stretch: condense;
	text-align: center;
	font-size: 70px;
	
}
#makanan_minuman {
    font-family: Arial;
	font-style: normal;
	font-weight: 600;
	font-variant: small-caps;
	font-stretch: condense;
	font-size:25px;
    border-collapse: collapse;
    width: 85%;
	margin-left:7% ;
	margin-top:55px;
}

#makanan_minuman th{
    border-color: #fff;
    padding: 2px;
}

#makanan_minuman td{
	border-color: #fff;
	padding: 2px;
}


#makanan_minuman th:nth-child(even){
	background-color: #fff;
	}
	
#makanan_minuman td:nth-child(even){
	background-color: #fff;
	}

#makanan_minuman th{
    padding-top: 1px;
    padding-bottom: 2px;
	padding: 10px;
    text-align: center;
    background-color: #fff;
    color: #222;
}

#makanan_minuman td {
    padding-top: 1px;
    padding-bottom: 2px;
	padding: 10px;
    text-align: center;
    background-color: #fff;
    color: #222;
}

</style>
</head>
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class="sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right dev-page-sidebar mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar" id="cbp-spmenu-s1">
					<div class="scrollbar scrollbar1">
						<ul class="nav" id="side-menu">
							<li>
								<a href="v_kasir.php"><i class="fa fa-home nav_icon"></i>Dashboard</a>
							</li>

							<li>
								<a href="#" onclick="notifikasi()"><i class="fa fa-book nav_icon"></i>Cek Pesanan Masuk</a>

								<!-- /nav-second-level -->
							</li>

							<li>
								<a href="#"><i class="fa fa-cogs nav_icon"></i>Pengaturan</a>

								<!-- /nav-second-level -->
							</li>
						</ul>
					</div>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--logo -->
				<div class="logo">
					<a href="index.html"><h1>Juru Masak</h1></a>
				</div>
				<!--//logo-->


			</div>

			<div class="header-right">
					<!--toggle button start-->

				<button id="showLeftPush"><i class="fa fa-bars "></i></button>

				<!--toggle button end-->
			</div>

		</div>
		<!-- //header-ends -->
		<!-- //header-ends -->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="blank-page">
					
				</div>
		</div>
		
		<div class="h">Pesanan Pelanggan</div>
		
		<table id="makanan_minuman" cellpadding=10 border=1>
			<tr>
			<th>No. Meja</th>
			<th>Pesanan</th>
			<th>Jumlah</th>
			<th>Catatan</th>
			</tr>
			<tr>
			<th>1</th>
			<th>Sanger</th>
			<th>2</th>
			<th><button href="#" data-toggle="modal" data-target="#myModal1">Lihat</button></th>
			</tr>
			<tr>
			<th>4</th>
			<th>Mie Tumis</th>
			<th>1</th>
			<th><button href="#" data-toggle="modal" data-target="#myModal2">Lihat</button></th>
			</tr>
			<tr>
			<th>4</th>
			<th>Teh Dingin</th>
			<th>1</th>
			<th><button href="#" data-toggle="modal" data-target="#myModal3">Lihat</button></th>
			</tr>
			<tr>
			<th>2</th>
			<th>Nasi Goreng</th>
			<th>1</th>
			<th><button href="#" data-toggle="modal" data-target="#myModal4">Lihat</button></th>
			</tr>
		</table>
		
	</div>
	<!--typo-ends-->

			<div class="copy-section">
		<p>&copy; 2018 HTO</p>
		</div>
	</div>
			<!-- Classie -->
				<script src="<?php echo base_url()?>assets/admin/js/classie.js"></script>
				<script>
					var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
						showLeftPush = document.getElementById( 'showLeftPush' ),
						body = document.body;

					showLeftPush.onclick = function() {
						classie.toggle( this, 'active' );
						classie.toggle( body, 'cbp-spmenu-push-toright' );
						classie.toggle( menuLeft, 'cbp-spmenu-open' );
						disableOther( 'showLeftPush' );
					};


					function disableOther( button ) {
						if( button !== 'showLeftPush' ) {
							classie.toggle( showLeftPush, 'disabled' );
						}
					}
				</script>
			<script>
            $(document).ready(function() {
                  if (Notification.permission !== "granted")
                    Notification.requestPermission();
            });
             
            function notifikasi() {
                if (!Notification) {
                    alert('Browsermu tidak mendukung Web Notification.'); 
                    return;
                }
                if (Notification.permission !== "granted")
                    Notification.requestPermission();
                else {
                    var notifikasi = new Notification('Pesanan Masuk', {
                        icon: 'HTO',
                        body: "Meja 2 memesan nasi goreng dan teh dingin",
                    });
					var notifikasi = new Notification('Pesanan Masuk', {
                        icon: 'HTO',
                        body: "Meja 3 memesan mie tumis dan teh hijau",
                    });
                    notifikasi.onclick = function () {
                        window.open("");      
                    };
                    setTimeout(function(){
                        notifikasi.close();
                    }, 5000);
                }
            };
			</script>
				<!-- Bootstrap Core JavaScript -->

					<script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/bootstrap.min.js"></script>
					<!--scrolling js-->
					<script src="<?php echo base_url()?>assets/admin/js/jquery.nicescroll.js"></script>
					<script src="<?php echo base_url()?>assets/admin/js/scripts.js"></script>
					<link href="<?php echo base_url()?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
						<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/css/stylekasir.css">

					<!--//scrolling js-->
					<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content modal-info">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h3>Catatan</h3>
							</div>
							<div class="modal-body">
								<div class="more-grids">
									<p>Jangan terlalu banyak gula karna saya tidak suka manis</p>
										<button type="button" class="btn btn-default" data-dismiss="modal">Selesai</button>
								</div>
							</div>
						</div>
					</div>
					</div>
					<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content modal-info">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h3>Catatan</h3>
							</div>
							<div class="modal-body">
								<div class="more-grids">
									<p>Jangan terlalu banyak pedas karna sakit asam lambung</p>
										<button type="button" class="btn btn-default" data-dismiss="modal">Selesai</button>
								</div>
							</div>
						</div>
					</div>
					</div>
					<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content modal-info">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h3>Catatan</h3>
							</div>
							<div class="modal-body">
								<div class="more-grids">
									<p></p>
										<button type="button" class="btn btn-default" data-dismiss="modal">Selesai</button>
								</div>
							</div>
						</div>
					</div>
					</div>
					<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content modal-info">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h3>Catatan</h3>
							</div>
							<div class="modal-body">
								<div class="more-grids">
									<p></p>
										<button type="button" class="btn btn-default" data-dismiss="modal">Selesai</button>
								</div>
							</div>
						</div>
					</div>
					</div>
</body>
</html>
