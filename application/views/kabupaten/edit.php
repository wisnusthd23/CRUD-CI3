<div class="container mt-3">
<div class="card border-primary">
  <div class="card-header bg-info">
    <h3>Tambah Data Kabupaten</h3> 
  </div>
  <div class="card-body">
    <!-- <form > -->
    <form action="" method="post">
    <input type="hidden" name="id_kabupaten" value="<?= $kabupaten['id_kabupaten']; ?>">
        <div class="form-group">
            <label for="jumlah_sks">Nama kabupaten</label>
            <input type="text" name="kabupaten" class="form-control" id="kabupaten" value="<?= $kabupaten['kabupaten']; ?>">
            <small class="form-text text-danger"><?= form_error('kabupaten') ?></small>
        </div>
        <button class="btn btn-primary float-right" name="edit" type="submit">Edit Data</button>
    </form>
  </div>
</div>
</div>