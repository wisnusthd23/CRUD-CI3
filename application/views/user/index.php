<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title><?= $judul ?></title>
</head>

<body style="background-color: #224a4a;">
    <div class="container">
    <div class="container mt-3">
  <div class="card border-primary">
    <div class="card-header bg-info">
      <h3>Data Pengusul</h3>
    </div>

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
            </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
    </div>

    <footer class="mt-3" style="background-color: turquoise;">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col text-center">
                    <h5>Social Media</h5>
                    <a href="https://www.facebook.com/pages/Universitas%20Ahmad%20Dahlan/108010789227187/"><i style="font-size: 30px;" class='bx bxl-facebook-circle'></i></a>
                    <a href="https://www.instagram.com/klik_uad/"><i style="font-size: 30px;" class='bx bxl-instagram-alt'></i></a>
                    <a href="https://www.twitter.com/klik_uad/"><i style="font-size: 30px;" class='bx bxl-twitter'></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col text-center mb-2">
                    <?= "&copy;" . (int)date('Y') . " Created By <i class='bx bxs-heart' style='color:#ff0000'></i> Loved"  ?>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script type="text/javascript">
        var nav = document.querySelector("nav");

        window.addEventListener("scroll", function() {
            if (window.pageYOffset > 250) {
                nav.classList.add("bg-dark", "shadow", "fixed-top");
            } else {
                nav.classList.remove("bg-dark", "shadow", "fixed-top");
            }
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
    <script>
    $(document).ready(function () {
    $('#example').DataTable({
        paging: false,
        ordering: true,
        info: false,
        responsive: true
    });
});
    </script>
</body>

</html>