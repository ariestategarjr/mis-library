<?php include "templates/header.php"; ?>
<?php include "templates/menu.php"; ?>

<div class="container">
  <h1>Form Tambah Buku</h1>
  <br>
  <form action="crud/insert_buku" method="post">
    <div class="form-group row">
      <label for="idBukuTambah" class="col-sm-2 col-form-label">Id Buku</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="idBukuTambah" name="id_buku" autocomplete="off">
      </div>
    </div>

    <div class="form-group row">
      <label for="namaBukuTambah" class="col-sm-2 col-form-label">Judul Buku</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="namaBukuTambah" name="judul">
      </div>
    </div>

    <div class="form-group row">
      <label for="kategoriBukuTambah" class="col-sm-2 control-label">Kategori</label>
      <div class="col-sm-3">
        <select class="form-control inputstl" id="kategoriBukuTambah" name="kategori">
          <option>Fiksi</option>
          <option>Non-fiksi</option>
          <option>Pelajaran</option>
        </select>
      </div>
    </div>

    <div class="form-group row">
      <label for="pengarangBukuTambah" class="col-sm-2 col-form-label">Pengarang Buku</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pengarangBukuTambah">
      </div>
    </div>

    <div class="form-group row">
      <label for="penerbitBukuTambah" class="col-sm-2 col-form-label">Penerbit Buku</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="penerbitBukuTambah">
      </div>
    </div>

    <div class="form-group row">
      <label for="stokBukuTambah" class="col-sm-2 col-form-label">Stok</label>
      <div class="col-sm-4">
        <input type="number" class="form-control" id="penerbitBukuTambah">
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