<html>

	<head>
	<title> Mesin basuh</title>
	<link rel="stylesheet" href="style.css">
	</head>
	    
	<body>
	<h1  id="tulis" onmouseover="papar()" onmouseout="padam()">Kedai Jual Mesin Basuh</h1>
	<div style="width: 75%; margin: 20 auto; text-align: center; ">
	<img src="Imej1.jpg" id="banner" onmouseover="buka()" onmouseout="tutup()" 
	style="border-radius: 0px; width: 624px;height:260px;">
	</div>

	<h2>Maklumat Mesin Basuh </h2>
	<center>
	<table border=1 cellpadding=5 cellspacing=0 bgcolor=white>
		<tr>
		<th>BIL</th>
		<th>MODEL MESIN BASUH</th>
		<th>JENAMA</th>
		<th>JENIS MESIN BASUH</th>
		<th>TARIKH</th>
		<th>PADAM</th>
		</tr>
	<!--memaparkan rekod mesin basuh-->
	     <?php
		 include "config.php";
		 	$display =mysqli_query($sambungan,"SELECT * FROM senarai");
			while($result=mysqli_fetch_array($display)){
				echo"
				<tr>
				<td>".$result['bil']."</td>
				<td>".$result['model']."</td>
				<td>".$result['jenama']."</td>
				<td>".$result['jenis']."</td>
				<td>".$result['tarikh']."</td>
				<td><a href='padam.php?bil=".$result['bil']."'>Padam</a></td>
				";
			}
		 ?>       
	</table>
	<p>
	<a href="tambah.php"><button name='tambah'type="submit">TAMBAH MESIN BASUH</button></a><br>
	<p>	
	<button onmouseup="Up()" onmousedown="Down()">HUBUNGI</button>
	<p id="hubungi"></p>
		
	<!--fungsi-->
	<script>
	function papar(){
		document.getElementById("tulis").style.color="purple";
		document.getElementById("tulis").style.fontFamily="calibri";
	}
	function padam(){
		document.getElementById("tulis").style.color="black";
		document.getElementById("tulis").style.fontFamily="Times New Roman";
	}
	function buka(){
		document.getElementById("banner").src="Imej2.jpg";
	}
	function tutup(){
		document.getElementById("banner").src="Imej1.jpg";
	}
	function Up(){
		document.getElementById("hubungi").innerHTML="Berdoalah";
	}
	function Down(){
		document.getElementById("hubungi").innerHTML="IqNaz@0705";
	}
	</script>
	</center>
	</body>
</html>