<div class="container mt-3">
<div class="card border-primary">
  <div class="card-header bg-info">
    <h3>Tambah Data kecamatan</h3> 
  </div>
  <div class="card-body">
    <!-- <form > -->
    <?= form_open_multipart('kecamatan/tambah'); ?>
        <div class="form-group">
            <label for="jumlah_sks">Nama kecamatan</label>
            <input type="text" name="kecamatan" class="form-control" id="kecamatan" placeholder="Masukkan Nama kecamatan">
            <small class="form-text text-danger"><?= form_error('kecamatan') ?></small>
        </div>
        <button class="btn btn-primary float-right" name="tambah" type="submit">Tambah Data</button>
        <?= form_close() ?>
    <!-- </form> -->
  </div>
</div>
</div>