<!--memadam rekod mesin basuh-->
<?php
include('config.php'); 
	if(isset($_GET['bil'])) {
	$bil= $_GET['bil'];
	}
	else {
		$bil="";
	}

	mysqli_query($sambungan,
	"DELETE FROM senarai
	WHERE bil = '".$bil."'");

	header("location:index.php");	
?> 


