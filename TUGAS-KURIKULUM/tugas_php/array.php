<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Data Json</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Alamat</th>
      <th scope="col">Kelas</th>
      <th scope="col">Nilai</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $array = file_get_contents('data.json');
    $data = json_decode($array);
    
    $start = 0;
    foreach ($data as $value) {
    $start++;
    ?>
            <tr>
                <td width="80px"><?php echo $start ?></td>
                <td><?php echo $value->nama ?></td>
                <td><?php echo $value->tanggal_lahir ?></td>
                <td><?php echo $value->alamat ?></td>
                <td><?php echo $value->kelas ?></td>
                <td><?php echo $value->nilai ?></td>
            </tr>
    <?php
        }
    ?>
  </tbody>
</table>
</body>
</html>
