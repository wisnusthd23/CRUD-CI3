<div class="container mt-3">
  <div class="card border-primary">
    <div class="card-header bg-info">
      <h3>Data Pengusul</h3>
    </div>
    <div class="card-body">
      <?php if ($this->session->flashdata('flash')) : ?>
        <div class="alert alert-success alert-dismissible fade show alert1" role="alert">
          Data <strong><?= $this->session->flashdata('flash'); ?></strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php endif; ?>
      <?php if ($this->session->flashdata('hapus')) : ?>
        <div class="alert alert-danger alert-dismissible fade show alert1" role="alert">
          Data <strong><?= $this->session->flashdata('hapus'); ?></strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php endif; ?>
      <a href="<?= base_url('home/tambah') ?>" class="btn btn-success card-title">Tambah data <i class='bx bxs-file-plus'></i></a>


      <table id="example" class="table table-success table-striped text-center">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Pengusul</th>
            <th scope="col">Alamat</th>
            <th scope="col">Provinsi</th>
            <th scope="col">Kabupaten</th>
            <th scope="col">Kecamatan</th>
            <th scope="col">Kelurahan</th>
            <th scope="col">Foto</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1;
          foreach ($pengusul as $s) { ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $s['nama_pengusul']; ?></td>
              <td><?= $s['alamat']; ?></td>
              <td><?= $s['provinsi']; ?></td>
              <td><?= $s['kabupaten']; ?></td>
              <td><?= $s['kecamatan']; ?></td>
              <td><?= $s['kelurahan']; ?></td>
              
              <td><img src="<?= base_url('assetss/img/') . $s['image']; ?>" class="img-thumbnail"></td>
              <td>
                <a href="<?= base_url('home/edit/' . $s['id']) ?>" class="badge badge-success">Edit</a>
                <a href="<?= base_url('home/hapus/' . $s['id']) ?>" class="badge badge-danger" onclick="return confirm('Yakin?');">Delete</a>
              </td>
            </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>