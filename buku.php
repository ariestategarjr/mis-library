<?php include "templates/header.php"; ?>
<?php include "templates/menu.php"; ?>

<div class="container">
    <h1>Daftar Buku</h1>
    <br>
    <a href="buku_add.php" type="button" class="btn btn-primary">Tambah Buku Baru</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Id Buku</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Stok</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";

            $buku = mysqli_query($koneksi, "SELECT * FROM tb_buku");

            $no = 1;
            foreach ($buku as $key => $value) {
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $value['id_buku']; ?></td>
                    <td><?= $value['judul']; ?></td>
                    <td><?= $value['kategori']; ?></td>
                    <td><?= $value['pengarang']; ?></td>
                    <td><?= $value['penerbit']; ?></td>
                    <td><?= $value['stok']; ?></td>
                    <td>
                        <button type="button" class="btn btn-warning btn-sm">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include "templates/footer.php" ?>