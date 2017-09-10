<DOCTYPE html>
<html>
<h2>Sorting Arrays</h2>

	<?php
		$sepeda = array
		(
		array("Ontel",12,43),
		array("Downhill",49,19),
		array("Balap",55,62)
		);
		
		echo $sepeda[0][0]." In stock: ".$sepeda[0][1].", sold: ".$sepeda[0][2].".<br>";
		echo $sepeda[1][0]." In stock: ".$sepeda[1][1].", sold: ".$sepeda[1][2].".<br>";
		echo $sepeda[2][0]." In stock: ".$sepeda[2][1].", sold: ".$sepeda[2][2].".<br>";
		
		echo "<hr>";
	
		$roko = array("malboro<br>", "rawit", "clasmild <br>");
		sort($roko);
			for ($x=0; $x<3; $x++) {
				echo $roko[$x];
			}

	echo "<hr>";
	
		$huruf = array("A","B, ","C, ","D, ","E, ","F, ");
		rsort($huruf);
			for ($x=0; $x<6; $x++) {
				echo $huruf[$x];
			}
	echo "<hr>";
	echo "<hr>";
	
	echo "<h2>Array Multidimensi</h2>";
		$person = array
		(
			array("Parjo" ,"age :","15"),
			array("Janu" ,"age :","21"),
			array("Abdi" ,"age :","18"),
		);
			for ($row = 0; $row < 3; $row++) {
				echo "<h4>Identitas : $row</h4>";
				echo "<rl>";
			for ($col = 0; $col < 2; $col++) {
				echo "<li>".$person[$row][$col]."</li>";
			}
			echo "</rl>";
			}
	echo "<hr>";
	
		$person = array
		(
			array("Santi" ,"Kelas :","13"),
			array("Ragil" ,"Kelas :","12"),
			array("Danang" ,"Kelas :","11"),
		);
			for ($row = 0; $row < 3; $row++) {
				echo "<h4>Ruang : $row</h4>";
				echo "<rl>";
			for ($col = 0; $col < 2; $col++) {
				echo "<li>".$person[$row][$col]."</li>";
			}
			echo "</rl>";
			}
	echo "<hr>";
	
		$person = array
		(
			array("Kelinci" ,"Harga :","15.000"),
			array("Kuda" ,"Harga :","21.000"),
			array("Sapi" ,"Harga :","11.000"),
		);
			for ($row = 0; $row < 3; $row++) {
				echo "<h4>Hewan : $row</h4>";
				echo "<rl>";
			for ($col = 0; $col < 2; $col++) {
				echo "<li>".$person[$row][$col]."</li>";
			}
			echo "</rl>";
			}
	echo "<hr>";
	echo "<hr>";
	
	?>
	
</html>