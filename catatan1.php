<?php
	include("koneksi.php");
?>
<!DOCTYPE html>
<html>
	<link rel="stylesheet" type="text/css" href="order_makanan_minuman.css">
<head>
</head>
<body>
	<div class="h">HISTORY PESANAN</div>
	
	<form name="catatan" action="catatan1.php" method="post">

		<table id="makanan_minuman" cellpadding=10 border=1>
			<tr>
			<th>No</th>
			<th>Nomor Meja</th>
			<th>Total Harga Bayar</th>
			<th>Banyaknya Pesanan</th>
			</tr>
				<?php

					$result = mysqli_query($link, "select nomor_meja, total_harga, jumlah from transaksi_pemesanan ");

					$i=0; $temp=array(); $harga=array();
					while ($data=mysqli_fetch_assoc($result))
					{   $i++;
					echo "<tr>";
					echo "<td> $i.</td>";
					echo "<td>$data[nomor_meja]</td>";
					echo "<td>Rp. $data[total_harga]</td>";
					echo "<td>$data[jumlah]</td>";
					echo "</tr>";

					}
				?>
		</table>
		
	</form>
	</body>
	</html>