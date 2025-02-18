<?php
    include("config.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    else{
        $id="";
    }

    mysqli_query($sambungan,
    "DELETE FROM dorm_asrama
    WHERE ID = '".$id."'");

    header("location:paparan.php");
?>