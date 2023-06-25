<?php include "templates/header.php"; ?>
<?php include "templates/menu.php"; ?>

<div class="container">
    <h1>Daftar Anggota</h1>
    <br>
    <a href="anggota_add.php" type="button" class="btn btn-primary">Tambah Anggota Baru</a>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Id Anggota</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";

            $anggota = mysqli_query($koneksi, "SELECT * FROM tb_anggota");

            $no = 1;
            foreach ($anggota as $key => $value) {
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $value['id_anggota'] ?></td>
                    <td><?= $value['nama_anggota'] ?></td>
                    <td><?= $value['jenis_kelamin'] ?></td>
                    <td><?= $value['alamat'] ?></td>
                    <td><?= $value['no_telp'] ?></td>
                    <td>
                        <a href="anggota_edit.php?id=<?= $value['id_anggota']; ?>" type="button" class="btn btn-warning btn-sm">Edit</a>
                        <a href="crud/delete_anggota.php?id=<?= $value['id_anggota']; ?>" type="button" class="btn btn-danger btn-sm">Delete</a>
                        <!-- <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteAddModal">
                            Delete
                        </button>                         -->
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