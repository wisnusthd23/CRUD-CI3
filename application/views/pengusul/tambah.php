<div class="container mt-3">
<div class="card border-primary">
  <div class="card-header bg-info">
    <h3>Tambah Data Pengusul</h3> 
  </div>
  <div class="card-body">
    <!-- <form > -->
    <a href="<?= base_url('provinsi') ?>" class="btn btn-info card-title">Kembali <i class='bx bx-arrow-back'></i></a>
    <?= form_open_multipart('home/tambah'); ?>
        <div class="form-group">
            <label for="jumlah_sks">Nama Pengusul</label>
            <input type="text" name="nama_pengusul" class="form-control" id="nama_pengusul" placeholder="Masukkan Nama Pengusul">
            <small class="form-text text-danger"><?= form_error('nama_pengusul') ?></small>
        </div>
        <div class="form-group">
            <label for="jumlah_sks">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat">
            <small class="form-text text-danger"><?= form_error('alamat') ?></small>
        </div>
        <div class="form-group">
            <label for="id_provinsi">Provinsi</label>
            <select class="form-control" id="id_provinsi" name="id_provinsi">
                <option value="">Provinsi</option>
                <?php foreach ($provinsi as $key => $value) { ?>
                        <option value="<?= $value->id_provinsi ?>"><?= $value->provinsi ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="id_provinsi">kabupaten</label>
            <select class="form-control" id="id_kabupaten" name="id_kabupaten">
                <option value="">kabupaten</option>
                <?php foreach ($kabupaten as $key => $value) { ?>
                        <option value="<?= $value->id_kabupaten ?>"><?= $value->kabupaten ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="id_provinsi">kecamatan</label>
            <select class="form-control" id="id_kecamatan" name="id_kecamatan">
                <option value="">kecamatan</option>
                <?php foreach ($kecamatan as $key => $value) { ?>
                        <option value="<?= $value->id_kecamatan ?>"><?= $value->kecamatan ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="id_provinsi">kelurahan</label>
            <select class="form-control" id="id_kelurahan" name="id_kelurahan">
                <option value="">kelurahan</option>
                <?php foreach ($kelurahan as $key => $value) { ?>
                        <option value="<?= $value->id_kelurahan ?>"><?= $value->kelurahan ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="image">Foto</label>
            <input type="file" name="image" class="form-control" id="image" required>
            <!-- <small class="form-text text-danger"><?= form_error('image') ?></small> -->
        </div>
        <button class="btn btn-primary float-right" name="tambah" type="submit">Tambah Data</button>
        <?= form_close() ?>
    <!-- </form> -->
  </div>
</div>
</div>