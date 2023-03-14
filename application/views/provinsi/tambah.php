<div class="container mt-3">
<div class="card border-primary">
  <div class="card-header bg-info">
    <h3>Tambah Data Pengusul</h3> 
  </div>
  <div class="card-body">
    <!-- <form > -->
    <a href="<?= base_url('provinsi') ?>" class="btn btn-info card-title">Kembali <i class='bx bx-arrow-back'></i></a>
    <?= form_open_multipart('provinsi/tambah'); ?>
        <div class="form-group">
            <label for="jumlah_sks">Nama Provinsi</label>
            <input type="text" name="provinsi" class="form-control" id="provinsi" placeholder="Masukkan Nama Provinsi">
            <small class="form-text text-danger"><?= form_error('provinsi') ?></small>
        </div>
        <button class="btn btn-primary float-right" name="tambah" type="submit">Tambah Data</button>
        <?= form_close() ?>
    <!-- </form> -->
  </div>
</div>
</div>