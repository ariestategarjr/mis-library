<?php include "templates/header.php"; ?>
<?php include "templates/menu.php"; ?>

<div class="container">
    <h1>Form Tambah Anggota</h1>
    <br>
    <form action="crud/insert_anggota.php" method="post">
        <div class="form-group row">
            <label for="idAnggotaTambah" class="col-sm-2 col-form-label">Id Anggota</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="idAnggotaTambah" name="id_anggota" autocomplete="off">
            </div>
        </div>
        <div class="form-group row">
            <label for="namaAnggotaTambah" class="col-sm-2 col-form-label">Nama Anggota</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="namaAnggotaTambah" name="nama_anggota" autocomplete="off">
            </div>
        </div>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jkAnggotaTambahLaki" value="L" checked>
                        <label class="form-check-label" for="jkAnggotaTambahLaki">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jkAnggotaTambahPerempuan" value="P">
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
                <textarea class="form-control" id="alamatAnggotaTambah" rows="3" name="alamat" autocomplete="off"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="telpAnggotaTambah" class="col-sm-2 col-form-label">No Telepon</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="telpAnggotaTambah" name="no_telp" autocomplete="off">
            </div>
        </div>
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