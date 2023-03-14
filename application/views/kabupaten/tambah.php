<div class="container mt-3">
<div class="card border-primary">
  <div class="card-header bg-info">
    <h3>Tambah Data Kabupaten</h3> 
  </div>
  <div class="card-body">
    <!-- <form > -->
    <a href="<?= base_url('provinsi') ?>" class="btn btn-info card-title">Kembali <i class='bx bx-arrow-back'></i></a>
    <?= form_open_multipart('kabupaten/tambah'); ?>
        <div class="form-group">
            <label for="jumlah_sks">Nama kabupaten</label>
            <input type="text" name="kabupaten" class="form-control" id="kabupaten" placeholder="Masukkan Nama kabupaten">
            <small class="form-text text-danger"><?= form_error('kabupaten') ?></small>
        </div>
        <button class="btn btn-primary float-right" name="tambah" type="submit">Tambah Data</button>
        <?= form_close() ?>
    <!-- </form> -->
  </div>
</div>
</div>