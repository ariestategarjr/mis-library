<?php include "templates/header.php"; ?>
    <?php include "templates/menu.php"; ?>

    <div class="container">
        <h1>Form Edit Anggota</h1>
        <br>
        <?php
        include "koneksi.php";

        if(@$_GET['id']) {
            $id = $_GET['id']; 
            $query = mysqli_query($koneksi, "SELECT * FROM tb_anggota WHERE id_anggota='$id'");
            $anggota = mysqli_fetch_array($query);
        }
        // while($anggota) {
        // $no = 1;
        // foreach ($anggota as $key => $value) {
        ?>
        <form action="crud/update_anggota.php" method="post">

            <!-- <input type="hidden" class="form-control" id="idAnggotaTambah" name="id_anggota" value="<?= @$anggota['id_anggota']; ?>" autocomplete="off"> -->

            <div class="form-group row">
                <label for="namaAnggotaTambah" class="col-sm-2 col-form-label">Nama Anggota</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="namaAnggotaTambah" name="nama_anggota" value="<?= @$anggota['nama_anggota']; ?>" autocomplete="off">
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jkAnggotaTambahLaki" value="L" <?= (@$anggota['jenis_kelamin'] == 'L') ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="jkAnggotaTambahLaki">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jkAnggotaTambahPerempuan" value="P" <?= (@$anggota['jenis_kelamin'] == 'P') ? 'checked' : '' ?>>
                            <label class="form-check-label" for="jkAnggotaTambahPerempuan">
                                Perempuan
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <label for="alamatAnggotaTambah" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="alamatAnggotaTambah" rows="3" name="alamat" autocomplete="off"><?= @$anggota['alamat']; ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="telpAnggotaTambah" class="col-sm-2 col-form-label">No Telepon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="telpAnggotaTambah" name="no_telp" value="<?= @$anggota['no_telp'] ?>" autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <input type="hidden" class="form-control" id="idAnggotaTambah" name="id_anggota" value="<?= @$anggota['id_anggota']; ?>" autocomplete="off">

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </div>
        </form>

        <!-- <?php // } ?> -->
 
    </div>

<?php include "templates/footer.php" ?>