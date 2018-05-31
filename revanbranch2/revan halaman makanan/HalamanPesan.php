<?php
if (isset($_POST['submit'])){
	echo "<tr>";
				echo "<td> $i.</td>";
				echo "<td>$data[nama_menu]</td>";
				echo "<td>Rp. $data[harga]</td>";
				echo "<td><center><input type=number name=\"$i\" onchange=\"proses()\" size=12 style=\"text-align:center\"></center></td>";
				echo "</tr>";

				$temp[$i]  = "$data[id_menu]";
				$harga[$i] =  $data["harga"];

}