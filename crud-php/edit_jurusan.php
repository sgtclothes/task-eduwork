<html>
<head>
    <title>Tampil Data Jurusan</title>
</head>
<body>

<center>
<?php include ('koneksi.php'); ?>
    <?php if (isset($_GET['id_jurusan'])){
        $id=$_GET['id_jurusan'];
        $sql_edit= "SELECT * from tb_jurusan where id_jurusan='$id'";
        $result = $conn->query($sql_edit);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $ed_id_jurusan=$row['id_jurusan'];
                $ed_nama_jurusan=$row['nama_jurusan'];
            }
        }
    }
?>
    <form action="edit_jurusan.php?id_jurusan=1" method="POST">
    <input type="hidden" name="id_jurusan" value="<?php echo $ed_id_jurusan ?>">
    Nama Jurusan :
    <input type="text" name="nama_jurusan" value="<?php echo $ed_nama_jurusan ?>">
    <br><br>
    <input type="submit" name="update" value="Update">
    <a href='edit_jurusan.php?id_jurusan=1'><input type="button" name="batal" value="Batal"> </a>
    </form>
    <br>
<?php
/*Perintah untuk memastikan apakah tombol update di tekan*/
if (isset($_POST['update'])){
$id_jurusan=$_POST['id_jurusan'];
$nama_jurusan=($_POST['nama_jurusan']);
$ubah=mysqli_query($conn, "UPDATE tb_jurusan SET  nama_jurusan='$nama_jurusan' where id_jurusan='$id_jurusan'")or die(mysqli_error($conn));
} ?>
<table cellpadding="2" cellspacing="0" border="1">
    <thead>
        <th>No</th>
        <th width='150'>Nama Jurusan</th>
        <th>Aksi</th>
    </thead>
    <tbody>
    <?php
	//*********** Perintah menampilkan data jurusan ***********//
	$sql=mysqli_query($conn, "select * from tb_jurusan order by id_jurusan ASC");
	$no=1;
                  while ($row=mysqli_fetch_array($sql)){
                  $id_jurusan=$row['id_jurusan'];
                  $nama_jurusan=$row['nama_jurusan'];
                  echo "
                      <tr>
	            <td>".$no."</td>
                              <td width='150'>".$row['nama_jurusan']."</td>
                              <td><a href='edit_jurusan.php?id_jurusan=".$row['id_jurusan']."'>Edit </a></td>
                      </tr>
                   ";
	$no++;
              };
    ?>
    </tbody>
    </table>
</center>
</body>
</html>