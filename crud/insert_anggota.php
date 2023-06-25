<?php

include "../koneksi.php";

$id_anggota = $_POST['id_anggota'];
$nama_anggota = $_POST['nama_anggota'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

$query = mysqli_query(
    $koneksi,
    "INSERT INTO tb_anggota (id_anggota, nama_anggota, jenis_kelamin, alamat, no_telp)
        VALUES('$id_anggota','$nama_anggota','$jenis_kelamin','$alamat','$no_telp')"
)
    or die(mysqli_error($koneksi));

if ($query) {
    header("location: ../anggota.php");
}
