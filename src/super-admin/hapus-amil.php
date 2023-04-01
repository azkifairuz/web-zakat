<?php
include("../koneksi.php");
$idAmil = $_GET['p'];
;
$delete = $db->Delete("amil_zakat",$idAmil);
 if ($delete) {
    echo "berhasil hapus";
?>
    <meta http-equiv="refresh" content="1; url=data-amil.php">
<?php
 }else{
    echo "ada kesalahan";
 }
?>