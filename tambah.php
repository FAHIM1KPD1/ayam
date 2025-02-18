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
        <h1>Borang Dorm</h1>
        <form action="" method="post">
            Dorm:
            <input type="text" name="nama_dorm"
                placeholder="Masukkan Nama Dorm">
                <br>
                <br>
            &nbsp;Blok:
            <input type="text" name="nama_blok"
                placeholder="Masukkan Nama Blok">
                <br>
                <br>
            Kapasiti:
            <input type="number" name="kapasiti"
                placeholder="Masukkan Kapasiti">&nbsp;&nbsp;
                <br>
                <br>
            <input type="submit" name="submit"
                value="Simpan">
        </form>
    </body>
</html>

<?php
    include ("config.php");

    if(isset($_POST['submit'])){
        $nama_dorm = $_POST['nama_dorm'];
        $nama_blok = $_POST['nama_blok'];
        $kapasiti = $_POST['kapasiti'];

            $query = mysqli_query($sambungan , 
                "INSERT INTO dorm_asrama SET 
                nama_dorm='".$nama_dorm."', 
                nama_blok='".$nama_blok."',
                kapasiti='".$kapasiti."'");

            header("location:paparan.php");
    }
?>