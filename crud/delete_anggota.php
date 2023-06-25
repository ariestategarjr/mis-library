<?php

include "../koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($koneksi, 
        "DELETE FROM tb_anggota
        WHERE id_anggota='$id'")
        or die(mysqli_error($koneksi));

if($query) {
    header("location: ../anggota.php");
}
?>