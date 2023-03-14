<div class="container mt-3">
<div class="card border-primary">
  <div class="card-header bg-info">
    <h3>Tambah Data kecamatan</h3> 
  </div>
  <div class="card-body">
    <!-- <form > -->
    <a href="<?= base_url('provinsi') ?>" class="btn btn-info card-title">Kembali <i class='bx bx-arrow-back'></i></a>
    <form action="" method="post">
    <input type="hidden" name="id_kecamatan" value="<?= $kecamatan['id_kecamatan']; ?>">
        <div class="form-group">
            <label for="jumlah_sks">Nama kecamatan</label>
            <input type="text" name="kecamatan" class="form-control" id="kecamatan" value="<?= $kecamatan['kecamatan']; ?>">
            <small class="form-text text-danger"><?= form_error('kecamatan') ?></small>
        </div>
        <button class="btn btn-primary float-right" name="edit" type="submit">Edit Data</button>
    </form>
  </div>
</div>
</div>