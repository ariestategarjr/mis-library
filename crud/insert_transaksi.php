<?php

include "../koneksi.php";

$id_transaksi = $_POST['id_transaksi'];
$id_anggota = $_POST['id_anggota'];
$id_buku = $_POST['id_buku'];
$tgl_pinjam = $_POST['tgl_pinjam'];
// $tgl_kembali = $_POST['tgl_kembali'];

$query = mysqli_query($koneksi, 
        "INSERT INTO tb_transaksi (id_transaksi, id_anggota, id_buku, tgl_pinjam)
        VALUES('$id_transaksi', '$id_anggota','$id_buku','$tgl_pinjam')")
        or die(mysqli_error($koneksi));

if($query) {
    header("location: ../transaksi.php");
}

?>