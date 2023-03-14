<div class="container mt-3">
  <div class="card border-primary">
    <div class="card-header bg-info">
      <h3>Data Provinsi</h3>
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

      <a href="<?= base_url('provinsi/tambah') ?>" class="btn btn-success card-title">Tambah data <i class='bx bxs-file-plus'></i></a>

      <table class="table" id="example">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Provinsi</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1;
          foreach ($provinsi as $s) { ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $s['provinsi']; ?></td>
              
              <td>
              <a href="<?= base_url('provinsi/edit/' . $s['id_provinsi']) ?>" class="badge badge-success">Edit</a>
                <a href="<?= base_url('provinsi/hapus/' . $s['id_provinsi']) ?>" class="badge badge-danger" onclick="return confirm('Yakin?');">Delete</a>
              </td>
            </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>