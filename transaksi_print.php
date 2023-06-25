<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Id Transaksi');
$sheet->setCellValue('C1', 'Nama Anggota');
$sheet->setCellValue('D1', 'Nama Buku');
$sheet->setCellValue('E1', 'Tanggal Pinjam');
$sheet->setCellValue('F1', 'Tanggal Kembali');

include "koneksi.php";

$transaksi = mysqli_query($koneksi, 
             "SELECT * FROM tb_transaksi
              JOIN tb_anggota ON tb_anggota.id_anggota = tb_transaksi.id_anggota
              JOIN tb_buku ON tb_buku.id_buku = tb_transaksi.id_buku
             ");

$no = 1;
$row = 2;
foreach ($transaksi as $key => $value) {
    $sheet->setCellValue('A' . $row, $no);
    $sheet->setCellValue('B' . $row, $value['id_transaksi']);
    $sheet->setCellValue('C' . $row, $value['nama_anggota']);
    $sheet->setCellValue('D' . $row, $value['judul']);
    $sheet->setCellValue('E' . $row, $value['tgl_pinjam']);
    $sheet->setCellValue('F' . $row, $value['tgl_kembali']);
    $no++;
    $row++;
}

$writer = new Xlsx($spreadsheet);
$writer->save('transaksi.xlsx');

header('Location: transaksi.xlsx');

?>