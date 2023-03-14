<div class="container mt-3">
<div class="card border-primary">
  <div class="card-header bg-info">
    <h3>Tambah Data kelurahan</h3> 
  </div>
  <div class="card-body">
    <!-- <form > -->
    <a href="<?= base_url('provinsi') ?>" class="btn btn-info card-title">Kembali <i class='bx bx-arrow-back'></i></a>
    <?= form_open_multipart('kelurahan/tambah'); ?>
        <div class="form-group">
            <label for="jumlah_sks">Nama kelurahan</label>
            <input type="text" name="kelurahan" class="form-control" id="kelurahan" placeholder="Masukkan Nama kelurahan">
            <small class="form-text text-danger"><?= form_error('kelurahan') ?></small>
        </div>
        <button class="btn btn-primary float-right" name="tambah" type="submit">Tambah Data</button>
        <?= form_close() ?>
    <!-- </form> -->
  </div>
</div>
</div>