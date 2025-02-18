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
            body>tr>th{
                font-size: 5mm
            }
            table,tr,td{
                padding: 10px;
                background: burlywood;
            }
        </style>
    </head>
    <body>
        <h1>Senarai Dorm</h1>
        <table border="2" align="center">
            <tr>
                <th>Nama Dorm</th>
                <th>Nama Blok</th>
                <th>Kapasiti</th>
                <th>Kemaskini</th>
                <th>Padam</th>
            </tr>
            <?php
            include ("config.php");

            $query = mysqli_query($sambungan, "SELECT * FROM dorm_asrama");

            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)) {
                    echo "<tr>";//buka row untuk papar datang
                    echo "<td>";//buka column 1
                    echo $row['nama_dorm'];
                    echo "</td>";//tutup column 1
                    echo "<td>";//buka column 2
                    echo $row['nama_blok'];
                    echo "</td>";//tutup column 2
                    echo "<td>";//buka column 3
                    echo $row['kapasiti'];
                    echo "</td>";//tutup column 3
                    echo "<td>";//buka column 4
                    echo "<a href='kemaskini.php?id=";
                    echo $row['id'];
                    echo " '>Kemaskini</a>";
                    echo "</td?>";//tutup column 4
                    echo "<td>";//buka column 5
                    echo "<a href='padam.php?id=";
                    echo $row['id'];
                    echo " '>Padam</a>";
                    echo "</td>";
                    echo "</tr>";//tutup row papar data
                }
            }
        ?>
        </table>
        <br>
        <br>
        <a href="tambah.php">
            <button>
                Tambah Dorm 
            </button>
        </a>
    </body>
</html>