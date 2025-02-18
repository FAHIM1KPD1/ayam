<?php

include('config.php');

if(isset($_GET['id'])){
   $id = $_GET['id'];
}
else{
    echo "Tiada Data yang dipindahkan";
    $id="";
}

$query = mysqli_query($sambungan ,
"SELECT * FROM  dorm_asrama WHERE id='".$id."'");

if(mysqli_num_rows($query) >0){
    while($row = mysqli_fetch_assoc($query)) {
        $nama_dorm = $row['nama_dorm'];
        $nama_blok = $row['nama_blok'];
        $kapasiti = $row['kapasiti'];
    }
}
?>
<html>
    <head>
        <title>Sistem Maklumat KVPJB</title>
        <style>
            body{
                text-align: center;
                background-color: brown;
            }
            body>h1{
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>Kemaskini</h1>
        <form action="" method="post">
            Dorm:
            <input type="text" name="nama_dorm"
              placeholder="Masukkan Nama Dorm"
              value="<?php echo $nama_dorm;?>">
              <br>
              <br>
              &nbsp;Blok:
            <input type="text" name="nama_blok"
              placeholder="Masukkan Nama Blok"
              value="<?php echo $nama_blok;?>">
              <br>
              <br>
              Kapasiti:
            <input type="number" name="kapasiti"
              placeholder="Masukkan Kapasiti"
              value="<?php echo $kapasiti;?>">&nbsp;&nbsp;&nbsp;
              <br>
              <br>
            <input type="submit" name="submit"
              value="Simpan">
        </form>
    </body>
</html>

    <?php
        if(isset($_POST['submit'])){
            $nama_dorm = $_POST['nama_dorm'];
            $nama_blok = $_POST['nama_blok'];
            $kapasiti = $_POST['kapasiti'];

            $query = mysqli_query($sambungan,
            "UPDATE dorm_asrama SET
            nama_dorm='".$nama_dorm."',
            nama_blok='".$nama_blok."',
            kapasiti='".$kapasiti."'
            WHERE id = '".$id."'");
            
            header("location:paparan.php");
        }
    ?>
