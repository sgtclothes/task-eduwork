<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <style>
        .center {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
  <?php 
  include('/xampp/htdocs/task-eduwork/toko_kelontong/koneksi.php')
  ?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin Toko Kelontong</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
  
<div class="mt-3">
<table class="table table-striped center" style="width: 700px;">
    <thead>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Jenis</th>
        <th style="width: 10px;">Status</th>
        <th style="width: 200px;">Action</th>
    </thead>
    <tbody>
    <?php 
        $sql = "SELECT * FROM barang ORDER BY id_barang ASC";
        $result = $conn->query($sql);
        $no=1;
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        ?>
              <tr>
                  <td><?=$no++?></td>
                  <td><?= $row['nama_barang'] ?></td>
                  <td><?= $row['jenis_barang'] ?></td>
                  <td>
                  <?php
                    if (isset( $row['status'])) {
                      $status = '<span class="badge text-bg-danger">Not Active</span>';
                      if ( $row['status'] == 1) {
                        $status = '<span class="badge text-bg-success">Active</span>';
                      } 
                      echo $status;
                    }
                    ?>
                  </td>
                  <td>
                    <a class="btn btn-primary" href='hapus_jurusan.php?hapus_id_jurusan=<?= $row['id_pengguna']?>'> Update </a>
                    <a class="btn btn-danger" href='hapus_jurusan.php?hapus_id_jurusan=<?= $row['id_pengguna']?>'> Delete </a>
                  </td>
              </tr>
          <?php
            }
          } else {
            echo "0 results";
          }
        ?>
    </tbody>
</table>
</div>

</body>
</html>