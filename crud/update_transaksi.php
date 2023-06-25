<?php

include "../koneksi.php";

$id_transaksi = $_POST['id_transaksi'];
$id_anggota = $_POST['id_anggota'];
$id_buku = $_POST['id_buku'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali = $_POST['tgl_kembali'];

$query = mysqli_query($koneksi, 
        "UPDATE tb_transaksi SET
        id_anggota='$id_anggota', 
        id_buku='$id_buku', 
        tgl_pinjam='$tgl_pinjam', 
        tgl_kembali='$tgl_kembali'
        WHERE id_transaksi='$id_transaksi'")
        or die(mysqli_error($koneksi));

if($query) {
    header("location: ../transaksi.php");
}

?>