<html>
<head>
    <title>Tampil Data Jurusan</title>
</head>
<body>
    <table cellpadding="2" cellspacing="0" border="1">
        <thead>
            <th>No</th>
            <th width='150'>Nama Jurusan</th>
        </thead>
        <tbody>
<?php
	include ('koneksi.php');
	$sql = "SELECT * FROM tb_jurusan ORDER BY id_jurusan ASC";
    $result = $conn->query($sql);
	$no=1;
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        //   echo "id: " . $row["id_jurusan"]. " - Nama jurusan: " . $row["nama_jurusan"]. "<br>";
          echo "
          <tr>
              <td>".$no."</td>
              <td width='150'>".$row['nama_jurusan']."</td>
          </tr>
                 ";
            $no++;
        }
      } else {
        echo "0 results";
      }
        //           while ($row=mysqli_fetch_array($sql)){
        //           $nama_jurusan=$row['nama_jurusan'];
        //           echo "
        //             <tr>
        //                 <td>".$no."</td>
        //                 <td width='150'>".$row['nama_jurusan']."</td>
        //             </tr>
        //                    ";
	    //   $no++;
        //         };
            ?>
          </tbody>

    </table>
</body>
</html>