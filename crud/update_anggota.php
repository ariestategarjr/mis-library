<?php

include "../koneksi.php";

$id_anggota = $_POST['id_anggota'];
$nama_anggota = $_POST['nama_anggota'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

$query = mysqli_query($koneksi, 
        "UPDATE tb_anggota SET 
        nama_anggota='$nama_anggota',
        jenis_kelamin='$jenis_kelamin', 
        alamat='$alamat', 
        no_telp='$no_telp'
        WHERE id_anggota='$id_anggota'")
        or die(mysqli_error($koneksi));

if($query) {
    header("location: ../anggota.php");
}
?>