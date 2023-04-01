<?php
include("../koneksi.php")
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Admin</title>
</head>

<body>
    <table border=1>
        <thead>
            <th>No</th>
            <th>nama amil</th>
        </thead>
        <?php
            $query = "SELECT * FROM `amil_zakat`";
            $get = $db->tampil_Data_Banyak($query);
            $no = 1;
            foreach ($get as $value) {
        ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $value['nama_amil']?></td>
            </tr>
        <?php
            $no++;
            }
        ?>
    </table>
</body>

</html>