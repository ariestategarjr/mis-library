<?php include "templates/header.php"; ?>
    <?php include "templates/menu.php"; ?>

    <div class="container">
        <h1>Form Pengembalian Buku</h1>
        <br>
        <?php
        include "koneksi.php";
        
        // $anggota = mysqli_query($koneksi, "SELECT * FROM tb_anggota");
        // $buku = mysqli_query($koneksi, "SELECT * FROM tb_buku");
        $transaksi_all = mysqli_query($koneksi, "SELECT * FROM tb_transaksi");

        if(@$_GET['id']) {
            $id = $_GET['id'];
            $query = mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE id_transaksi='$id'");
            $transaksi = mysqli_fetch_array($query);
        }
        ?>
         <form action="crud/update_transaksi.php" method="post">
            <!-- <div class="form-group row">
                <label for="idTransaksiKembali" class="col-sm-2 col-form-label">Id Transaksi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="idTransaksiKembali" name="id_transaksi" value="<?= $transaksi['id_transaksi'] ?>" autocomplete="off">
                </div>
            </div> -->
            <div class="form-group row">
                <label for="idAnggotaKembali" class="col-sm-2 col-form-label">Id Anggota</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="idAnggotaKembali" name="id_anggota" value="<?= $transaksi['id_anggota'] ?>" autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="idBukuKembali" class="col-sm-2 col-form-label">Id Buku</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="idBukuKembali" name="id_buku" value="<?= $transaksi['id_buku'] ?>" autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="tglPinjamKembali" class="col-sm-2 col-form-label">Tanggal Pinjam</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tglPinjamKembali" name="tgl_pinjam" value="<?= $transaksi['tgl_pinjam'] ?>" autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="tglKembaliKembali" class="col-sm-2 col-form-label">Tanggal Kembali</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tglKembaliKembali" name="tgl_kembali" value="<?= $transaksi['tgl_kembali'] ?>" autocomplete="off">
                </div>
            </div>

            <!-- <div class="form-group row">
                <label for="idBukuTambah" class="col-sm-2 col-form-label">Anggota</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="idBukuTambah" name="id_buku" autocomplete="off">
                </div>
            </div> -->

            <!-- <div class="form-group row">
                <label for="anggotaTransaksiTambah" class="col-sm-2 control-label">Id Anggota</label>
                <div class="col-sm-3">
                <select class="form-control inputstl" id="anggotaTransaksiTambah" name="id_anggota">
                    <option value="<?= $transaksi['id_anggota'] ?>"><?= $transaksi['id_anggota'] ?></option>
                    <?php foreach($transaksi_all as $key => $value) { ?>
                    
                        <option value="<?= $value['id_anggota'] ?>"><?= $value['id_anggota'] ?></option>
                    <?php } ?>
                </select>
                </div>
            </div> -->

            <!-- <div class="form-group row">
                <label for="bukuTransaksiTambah" class="col-sm-2 control-label">Id Buku</label>
                <div class="col-sm-3">
                <select class="form-control inputstl" id="bukuTransaksiTambah" name="id_buku">
                    <?php foreach($buku as $key => $value) { ?>
                    <option value="<?= $value['id_buku'] ?>"><?= $value['id_buku'] ?></option>
                    <?php } ?>
                </select> 
                </div>
            </div> -->

            <!-- <div class="form-group row">
                <label for="tglPinjamTambah" class="col-sm-2 col-form-label">Tanggal Pinjam</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tglPinjamTambah" name="tgl_pinjam" value="<?= @$transaksi['tgl_pinjam'] ?>" autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label for="tglKembaliTambah" class="col-sm-2 col-form-label">Tanggal Kembali</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tglKembaliTambah" name="tgl_kembali" value="<?= @$transaksi['tgl_kembali'] ?>" autocomplete="off">
                </div>
            </div> -->

            <div class="form-group row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <input type="hidden" class="form-control" id="idTransaksiKembali" name="id_transaksi" value="<?= $transaksi['id_transaksi'] ?>" autocomplete="off">

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </div>
          </form>
    </div>

<?php include "templates/footer.php" ?>