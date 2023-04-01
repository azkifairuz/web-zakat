<?php
    include("../koneksi.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembayar Zakat</title>
    <link rel="stylesheet" href="../../dist/output.css">
</head>

<body>
    <table border=1>
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggungan Jiwa</th>
            <th>Harga Beras</th>
            <th>Total Bayar</th>
            <th>Nama Amil</th>
        </thead>
        <?php
            $query = "SELECT *, harga_beras.harga_beras FROM pembayar_zakat INNER JOIN harga_beras ON pembayar_zakat.id_beras=harga_beras.id;";
            $get = $db->tampil_Data_Banyak($query);
            $no = 1;
            foreach ($get as $value) {
        ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $value['nama']?></td>
                <td><?php echo $value['tanggungan']?></td>
                <td><?php echo $value['harga_beras']?></td>
                <td><?php echo $value['total_bayar']?></td>
                <td><?php echo $value['nama_amil']?></td>
            </tr>
        <?php
            $no++;
            }
        ?>
    </table>
</body>

</html>