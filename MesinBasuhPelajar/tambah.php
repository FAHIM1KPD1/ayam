
<html>
<head>
	<title>MESIN BASUH</title>
	<link rel="stylesheet" href="style.css">
	</head>
	
	<body>
	<h2>TAMBAH MAKLUMAT</h2>
	<center>
	<table border=1 cellpadding=5 cellspacing=0 bgcolor=white>

	<img id="papar" onmouseover="bukak()" onmouseout="tutups()" src="Imej1.jpg" width="624" height="260" /> 
	
	<div style="width: 80%; margin: 50 auto; text-align: center; "></div>
	<table >
	
	<form method="post" action="">
	<tr>
		<td>Bil</td><td>:</td><td> <input type="text" name="bil" required><br><br></td>
	</tr>
	<tr>
		<td>Model Mesin Basuh</td><td>:</td><td> <input type="text" name="model" required><br><br></td>
	</tr>
	<tr>
		<td>Jenama </td><td>:</td><td> <input type="text" name="jenama" required><br><br></td>
	</tr>
	<tr>
		<td>Jenis</td><td>:</td><td> <input type="text" name="jenis" required><br><br></td>
	</tr>
	<tr>
		<td>Tarikh</td><td>:</td><td> <input type="date" name="tarikh" required><br><br></td>
	</tr>
	<tr>
		<td colspan=3><center> <input type="submit" name="submit" value="HANTAR" ><br></td>
	</tr>
	</form>
	<!--menambah rekod mesin basuh-->
	  <?php
	  include("config.php");
	  	if(isset($_POST['submit'])){
			$bil = $_POST['bil'];
			$model = $_POST['model'];
			$jenama = $_POST['jenama'];
			$jenis = $_POST['jenis'];
			$tarikh = $_POST['tarikh'];

			$query = mysqli_query($sambungan ,
			"INSERT INTO senarai SET 
			bil='".$bil."',
			model='".$model."',
			jenama='".$jenama."',
			jenis='".$jenis."',
			tarikh='".$tarikh."'");
	
			header("location: index.php");
		}
	  ?>
	</tr>
	</table>
	
	<!--fungsi-->
	<script>
		function bukak(){
			document.getElementById("papar").src="Imej2.jpg";
		}
		function tutups(){
			document.getElementById("papar").src="Imej1.jpg";
		}
	</script>






	</body>
</html>