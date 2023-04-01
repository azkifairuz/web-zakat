<?php
include("../koneksi.php");
include("session.php");
$queryHarga = "SELECT * FROM `harga_beras` ";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label for="nama"> nama pembayar</label><br>
        <input name="nama"></input><br>
        <label for="tanggungan"> jumlah tanggungan</label><br>
        <input type="number" name="tanggungan"> </input><br>
        <label for="hb"> harga beras</label><br>
        <select name="hb"> 
            <?php 
             foreach ($db->tampil_Data_Banyak($queryHarga) as $value) {
                ?>
                <option value="<?php echo $value['id'] ?>">Rp.<?php echo number_format($value['harga_beras']);?></option>
                <?php
             }
            ?>
        </select><br>
        </input><br>
        <label for="na"> nama amil</label><br>
        <input type="text" name="na"> </input><br>

        <button type="submit" name="Tambah"> tambah</button><br>
    </form>
    <?php
    if (isset($_POST["Tambah"])) {
        $nama = htmlspecialchars($_POST["nama"]);
        $tanggungan = htmlspecialchars($_POST["tanggungan"]);
        $hb = htmlspecialchars($_POST["hb"]);
        $harga_beras = $db->tampil_Data_Satu("SELECT * FROM `harga_beras`WHERE `id` = $hb ");
        $tb = intval($harga_beras['harga_beras']) * intval($tanggungan) * 4.3;
        $na = htmlspecialchars($_POST["na"]);

        $queryInsert = "`pembayar_zakat`(`nama`, `tanggungan`, `id_beras`, `total_bayar`,`nama_amil`) VALUES ('$nama','$tanggungan','$hb','$tb','$na')";
        $db->Insert($queryInsert);
        echo "berhasil";
    }
    ?>
    <table border=1>
        <thead>
            <th>no</th>
            <th>Nama</th>
            <th>Tanggungan</th>
            <th>harga beras yg biasa dibeli (2kg)</th>
            <th>total harga</th>
            <th>nama amil</th>
            <th>
        </thead>
            <?php
            
            $query = "SELECT *, harga_beras.harga_beras FROM pembayar_zakat INNER JOIN harga_beras ON pembayar_zakat.id_beras=harga_beras.id;";
            $no = 1;
            foreach ($db->tampil_Data_Banyak($query) as  $value) {
                ?>
                   <tr>
                   <td>
                        <?php echo $no?>
                    </td>
                    <td>
                        <?php echo $value['nama'] ?>
                    </td>
                    <td>
                        <?php echo $value['tanggungan'] ?>
                    </td>
                    <td>
                        <?php echo $value['harga_beras'] ?>
                    </td>
                    <td>
                       Rp. <?php echo number_format($value['total_bayar']) ?>
                    </td>
                    <td>
                        <?php echo $value['nama_amil'] ?>
                    </td>
                    </tr
              
                
                <?php
                $no++;
            }
            ?>
        

    </table>
</body>

</html>