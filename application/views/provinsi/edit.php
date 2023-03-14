<div class="container mt-3">
<div class="card border-primary">
  <div class="card-header bg-info">
    <h3>Tambah Data Pengusul</h3> 
  </div>
  <div class="card-body">
    <!-- <form > -->
    <a href="<?= base_url('provinsi') ?>" class="btn btn-info card-title">Kembali <i class='bx bx-arrow-back'></i></a>
    <form action="" method="post">
    <input type="hidden" name="id_provinsi" value="<?= $provinsi['id_provinsi']; ?>">
        <div class="form-group">
            <label for="jumlah_sks">Nama Provinsi</label>
            <input type="text" name="provinsi" class="form-control" id="provinsi" value="<?= $provinsi['provinsi']; ?>">
            <small class="form-text text-danger"><?= form_error('provinsi') ?></small>
        </div>
        <button class="btn btn-primary float-right" name="edit" type="submit">Edit Data</button>
    </form>
  </div>
</div>
</div>