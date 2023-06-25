<?php include "templates/header.php"; ?>
<?php include "templates/menu.php"; ?>

<div class="container">
    <h1>Form Tambah Transaksi</h1>
    <br>
    <?php
    include "koneksi.php";

    $anggota = mysqli_query($koneksi, "SELECT * FROM tb_anggota");
    $buku = mysqli_query($koneksi, "SELECT * FROM tb_buku");
    ?>
    <form action="crud/insert_transaksi.php" method="post">
        <div class="form-group row">
            <label for="idTransaksiTambah" class="col-sm-2 col-form-label">Id Transaksi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="idTransaksiTambah" name="id_transaksi" autocomplete="off">
            </div>
        </div>
        <!-- <div class="form-group row">
                <label for="idBukuTambah" class="col-sm-2 col-form-label">Anggota</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="idBukuTambah" name="id_buku" autocomplete="off">
                </div>
            </div> -->
        <div class="form-group row">
            <label for="anggotaTransaksiTambah" class="col-sm-2 control-label">Id Anggota</label>
            <div class="col-sm-3">
                <select class="form-control inputstl" id="anggotaTransaksiTambah" name="id_anggota">
                    <?php foreach ($anggota as $key => $value) { ?>
                        <option value="<?= $value['id_anggota'] ?>"><?= $value['id_anggota'] ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="bukuTransaksiTambah" class="col-sm-2 control-label">Id Buku</label>
            <div class="col-sm-3">
                <select class="form-control inputstl" id="bukuTransaksiTambah" name="id_buku">
                    <?php foreach ($buku as $key => $value) { ?>
                        <option value="<?= $value['id_buku'] ?>"><?= $value['id_buku'] ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="tglPinjamTambah" class="col-sm-2 col-form-label">Tanggal Pinjam</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="tglPinjamTambah" name="tgl_pinjam" value="<?= @$transaksi['tgl_pinjam'] ?>" autocomplete="off">
            </div>
        </div>
        <!-- <div class="form-group row">
                <label for="tglKembaliTambah" class="col-sm-2 col-form-label">Tanggal Kembali</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tglKembaliTambah" name="tgl_kembali" value="<?= @$transaksi['tgl_kembali'] ?>" autocomplete="off">
                </div>
            </div> -->
        <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </div>
    </form>
</div>

<?php include "templates/footer.php" ?>