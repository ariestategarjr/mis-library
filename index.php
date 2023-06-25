<?php include "templates/header.php"; ?>
<?php include "templates/menu.php"; ?>

<div class="container">
    <div class="jumbotron text-center">
        <h1 class="display-4">Selamat Datang di Sistem Informasi Perpustakaan</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p>
    </div>
</div>

<?php include "templates/footer.php" ?>

<!-- <table>
        <thead>
            <tr>
                <th>Id Anggota</th>
                <th>Nama Anggota</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No Telepon</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';

            $anggota = mysqli_query($koneksi, "SELECT * FROM tb_anggota");

            foreach ($anggota as $key => $value) { ?>
            <tr>
                <td><?= $value['id_anggota'] ?></td>
                <td><?= $value['nama_anggota'] ?></td>
                <td><?= $value['jenis_kelamin'] ?></td>
                <td><?= $value['alamat'] ?></td>
                <td><?= $value['no_telp'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table> -->