<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Tanggal Lahir</td>
                <td>Umur</td>
                <td>Alamat</td>
                <td>Kelas</td>
                <td>Nilai</td>
                <td>Hasil</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                $j = 1;
                $data = file_get_contents("data.json");
                $data = json_decode($data, true);
                foreach ($data as $key => $value) {
                    $tgl_lahir = $value['tanggal_lahir'];
                    $umur = new DateTime($tgl_lahir);
                    $sekarang = new DateTime();
                    $usia = $sekarang->diff($umur);
                    $nilai = $value['nilai'];
                    if ($nilai > 90) {
                        $grade = "A+";
                    } elseif ($nilai > 80) {
                        $grade = "A";
                    } elseif ($nilai > 70) {
                        $grade = "B+";
                    } elseif ($nilai > 60) {
                        $grade = "B";
                    } elseif ($nilai > 50) {
                        $grade = "C+";
                    } elseif ($nilai > 40) {
                        $grade = "C";
                    } elseif ($nilai > 30) {
                        $grade = "D";
                    } elseif ($nilai > 20) {
                        $grade = "E";
                    } else {
                        $grade = "F";
                    }
                    for ($x = 0; $x < count((array)$value['kelas']); $x++) {
                        echo "<td>" . $j++
                            . "<td>" . $value['nama'] . "<td>" . $value['tanggal_lahir'] . "<td>" . $usia->format('%y Tahun') . "<td>" . $value['alamat'] . "<td>" . $value['kelas'] . "<td>" . $value['nilai'] . "<td>" . $grade . "<tr>";
                    }
                }
                ?>
            </tr>
        </tbody>
    </table>
</body>

</html>