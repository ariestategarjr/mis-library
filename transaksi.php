<?php include "templates/header.php"; ?>
    <?php include "templates/menu.php"; ?>

    <div class="container">
        <h1>Daftar Transaksi</h1>
        <br>
        <a href="transaksi_add.php" type="button" class="btn btn-primary">Tambah Transaksi Baru</a>
        <a href="transaksi_print.php" type="button" class="btn btn-secondary">Cetak Transaksi</a>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id Transaksi</th>
                    <th>Nama Anggota</th>
                    <th>Nama Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include "koneksi.php";

                $transaksi = mysqli_query($koneksi, "
                SELECT * FROM tb_transaksi 
                JOIN tb_anggota ON tb_anggota.id_anggota = tb_transaksi.id_anggota
                JOIN tb_buku ON tb_buku.id_buku = tb_transaksi.id_buku 
                ");
                
                $no = 1;
                foreach ($transaksi as $key => $value) { 
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $value['id_transaksi'] ?></td>
                    <td><?= $value['nama_anggota'] ?></td>
                    <td><?= $value['judul'] ?></td>
                    <td><?= $value['tgl_pinjam'] ?></td>
                    <td><?= $value['tgl_kembali'] ?></td>
                    <td>
                        <a href="transaksi_kembali.php?id=<?= $value['id_transaksi']; ?>" type="button" class="btn btn-warning btn-sm">Pengembalian</a>
                        <!-- <a href="crud/delete_transaksi.php?id=<?= $value['id_transaksi']; ?>" type="button" class="btn btn-danger btn-sm">Delete</a> -->
                        <!-- <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteAddModal">
                            Delete
                        </button> -->
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

        <!-- Modal -->
        <div class="modal fade" id="deleteAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Perhatian!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus data ini ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger">OK</button>
            </div>
            </div>
        </div>
        </div>
    </div>

<?php include "templates/footer.php" ?>