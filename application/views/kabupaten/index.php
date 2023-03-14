<div class="container mt-3">
  <div class="card border-primary">
    <div class="card-header bg-info">
      <h3>Data Kabupaten</h3>
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
      <a href="<?= base_url('kabupaten/tambah') ?>" class="btn btn-success card-title">Tambah data <i class='bx bxs-file-plus'></i></a>


      <table id="example" class="table table-success table-striped text-center">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Kabupaten</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1;
          foreach ($kabupaten as $s) { ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $s['kabupaten']; ?></td>
              
              <td>
              <a href="<?= base_url('kabupaten/edit/' . $s['id_kabupaten']) ?>" class="badge badge-success">Edit</a>
                <a href="<?= base_url('kabupaten/hapus/' . $s['id_kabupaten']) ?>" class="badge badge-danger" onclick="return confirm('Yakin?');">Delete</a>
              </td>
            </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>