<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
        }
    </style>
</head>
<body>

<?php

$json_data = file_get_contents('data.json');
$data_nilai = json_decode($json_data, true);


function hitungUmur($tanggal_lahir) {
    $tanggal_lahir = new DateTime($tanggal_lahir);
    $today = new DateTime('today');
    return $tanggal_lahir->diff($today)->y;
}


function tentukanHasil($nilai) {
    if ($nilai >= 90 && $nilai <= 100) {
        return 'A';
    } elseif ($nilai >= 71 && $nilai <= 85) {
        return 'B';
    } elseif ($nilai >= 66 && $nilai <= 70) {
        return 'C';
    } elseif ($nilai >= 50 && $nilai <= 65) {
        return 'D';
    } else {
        return 'Belum Ditentukan';
    }
}


if ($data_nilai) {
    echo "<h2>Daftar Nilai</h2>";
    echo "<table>";
    echo "<tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Kelas</th>
            <th>Nilai</th>
            <th>Hasil</th>
          </tr>";

    foreach ($data_nilai as $key => &$nilai) {
      
        $nilai['umur'] = hitungUmur($nilai['tanggal_lahir']);
       
        $nilai['hasil'] = tentukanHasil($nilai['nilai']);

        echo "<tr>
                <td>" . ($key + 1) . "</td>
                <td>{$nilai['nama']}</td>
                <td>{$nilai['tanggal_lahir']}</td>
                <td>{$nilai['umur']}</td>
                <td>{$nilai['alamat']}</td>
                <td>{$nilai['kelas']}</td>
                <td>{$nilai['nilai']}</td>
                <td>{$nilai['hasil']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "Gagal membaca data dari file JSON.";
}
?>

</body>
</html>
