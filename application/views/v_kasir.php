<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Kasir</title>
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
								<a href="#"><i class="fa fa-book nav_icon"></i>Riwayat Pembayaran</a>

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
					<a href="index.html"><h1>Kasir</h1></a>
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
					<div class="four-grids">
						<!--kotak 1-->
						<div class="col-md-3 four-grid">
							<div class="four-grid1">
								<div class="icon">
									<i class="glyphicon belum" aria-hidden="true"></i>
								</div>
								<div class="four-text">
									<h3>Bill</h3>
									<h4>10</h4>

								</div>
								<a href="#" data-toggle="modal" data-target="#myModal1">More</a>
							</div>
						</div>
						<!--kotak 2-->
						<div class="col-md-3 four-grid">
							<div class="four-grid1">
								<div class="icon">
									<i class="glyphicon sudah" aria-hidden="true"></i>
								</div>
								<div class="four-text">
									<h3>Bill</h3>
									<h4>1</h4>
								</div>
								<a href="#" data-toggle="modal" data-target="#myModal1">More</a>
							</div>
						</div>
						<!--kotak 3-->
						<div class="col-md-3 four-grid">
							<div class="four-grid1">
								<div class="icon">
									<i class="glyphicon sudah" aria-hidden="true"></i>
								</div>
								<div class="four-text">
									<h3>Bill</h3>
									<h4>8</h4>
								</div>
								<a href="#" data-toggle="modal" data-target="#myModal1">More</a>
							</div>
						</div>
						<!--kotak 4-->
						<div class="col-md-3 four-grid">
							<div class="four-grid1">
								<div class="icon">
									<i class="glyphicon sudah" aria-hidden="true"></i>
								</div>
								<div class="four-text">
									<h3>Bill</h3>
									<h4>9</h4>
								</div>
								<a href="#" data-toggle="modal" data-target="#myModal1">More</a>
							</div>
						</div>

						<div class="clearfix"></div>
					</div>
				</div>
		</div>
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
								<h3>Pembayaran</h3>
							</div>
							<div class="modal-body">
								<div class="more-grids">


											<table cellspacing='0'>
												<thead>
													<tr>
														<th>id menu.</th>
														<th>nomor meja</th>
														<th>total harga</th>
														<th>jumlah</th>
													</tr>
												</thead>

												<tbody>
								<?php
											foreach($pembayaran->result_array() as $i):
														$id_menu=$i['id_menu'];
														$nomor_meja=$i['nomor_meja'];
														$total_harga=$i['total_harga'];
														$jumlah=$i['jumlah'];
								?>
								<tr>
											<td><?php echo $id_menu;?> </td>
											<td><?php echo $nomor_meja;?> </td>
											<td><?php echo $total_harga;?> </td>
											<td><?php echo $jumlah;?> </td>
								</tr>
								<?php endforeach;?>
					</tbody>

										</table><br><br>
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-default pull-right" data-dismiss="modal">Bayar</button>

								</div>
							</div>
						</div>
					</div>
				</div>
</body>
</html>
