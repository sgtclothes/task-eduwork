<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>  
        h2 {
            background-color: #ffc00a;
            text-align: left;
            font-family: 'Arial';
            border-width: 0;
            margin-top: -10px;
            margin-left: -10px;
            margin-right: -10px;
            padding: 20px;
            font-weight: normal;
        }

        table {
            border-collapse: collapse;
            width: 65%;
            align-items: center;
            justify-content: center;
            margin: auto;
            font-family: 'Arial';
            margin-top: 100px ;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 10px
        }

        th {
            background-color: #ffffff;
        }

        .even {
            background-color: #f9f9f9;
        }

        .odd {
            background-color: #ffffff;
        }
    </style>
    <title>Data Table</title>
</head>
<body>

<h2>Daftar Nilai</h2>

<?php

$json_data = file_get_contents('data.json');
$data = json_decode($json_data, true);


function hitung_umur($tanggal_lahir) {
    $tgl_lahir = new DateTime($tanggal_lahir);
    $sekarang = new DateTime();
    $umur = $sekarang->diff($tgl_lahir);
    return $umur->y;
}

function kategori_nilai($nilai) {
    if ($nilai >= 90) {
        return 'A';
    } elseif ($nilai >= 80) {
        return 'B';
    } elseif ($nilai >= 70) {
        return 'C';
    } else {
        return 'D';
    }
}

echo '<table>';
echo '<tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Tanggal Lahir</th>
        <th>Umur</th>
        <th>Alamat</th>
        <th>Kelas</th>
        <th>Nilai</th>
        <th>Hasil</th>
     </tr>';

foreach ($data as $key => $item) {
    $no_urut = $key + 1;
    $umur = hitung_umur($item['tanggal_lahir']);
    $kategori_nilai = kategori_nilai($item['nilai']);

    echo '<tr class="' . ($key % 2 == 0 ? 'even' : 'odd') . '">';
    echo '<td>' . $no_urut . '</td>';
    echo '<td>' . $item['nama'] . '</td>';
    echo '<td>' . $item['tanggal_lahir'] . '</td>';
    echo '<td>' . $umur . ' tahun</td>';
    echo '<td>' . $item['alamat'] . '</td>';
    echo '<td>' . $item['kelas'] . '</td>';
    echo '<td>' . $item['nilai'] . '</td>';
    echo '<td>' . $kategori_nilai . '</td>';
    echo '</tr>';
}

echo '</table>';
?>
</body>
</html>
