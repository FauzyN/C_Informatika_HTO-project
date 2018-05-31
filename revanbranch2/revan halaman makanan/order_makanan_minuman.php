<?php
	include("connection.php");
?>
<!DOCTYPE html>
<html>

	<link rel="stylesheet" type="text/css" href="order_makanan_minuman.css">
	<header>
		<meta charset="UTF-8">
		<title>order_makanan</title>
	</header>


	<body>
		<div class="h">ORDER NOW</div>

		<form name="pemesanan" action="order_makanan_minuman.php" method="post">

			<table id="makanan_minuman" cellpadding=10 border=1>
			<tr>
			<th>No.</th>
			<th>Food/Drink</th>
			<th>Harga</th>
			<th>Jumlah Pesan</th>
			</tr>

			<?php

			$result = mysqli_query($link, "select id_menu, nama_menu, harga from menu_makanan ");

			$i=0; $temp=array(); $harga=array();
			while ($data=mysqli_fetch_assoc($result))
			{   $i++;
				echo "<tr>";
				echo "<td> $i.</td>";
				echo "<td>$data[nama_menu]</td>";
				echo "<td>Rp. $data[harga]</td>";
				echo "<td><center><input type=number name=\"$i\" onchange=\"proses()\" size=12 style=\"text-align:center\"></center></td>";
				echo "</tr>";

				$temp[$i]  = "$data[id_menu]";
				$harga[$i] =  $data["harga"];

			}
			?>

			</table>
			<br>
			<input class="button" type="submit" name="submit" value="SELESAI">
			<input class="button" type="submit" name="menu_lain" value="MENU LAIN">
			<input class="button" type="reset" name="batal" value="BATAL">

			<?php
				if(isset($_POST["submit"]))
				{
					for($i=1;$i<14;$i++)
					{
						if($_POST[$i]!=="")
						{mysqli_query($link, "insert into transaksi_pemesanan values (\"$temp[$i]\",3,$harga[$i]*$_POST[$i],$_POST[$i])");
							/*$_POST["noMeja"]*/
						echo $i;
						}
					}
					header ("location: indexhalaman.php");
				}
			?>

			<?php
				if(isset($_POST["menu_lain"]))
				{
					header ("location: pesan.html");
				}
			?>

			<?php
				if(isset($_POST["batal"]))
				{
					header ("location: pesan.html");
				}
			?>

	    </form>
		<br>

	<body>
</html>
