<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>

    <!-- link cdn css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- As a heading -->
    <nav class="navbar bg-warning">
        <div class="container-fluid">
            <span class="navbar-brand m-2 h1">Daftar Nilai</span>
        </div>
    </nav>

    <div class="container">
        <table class="table table-striped table-bordered mt-5 border-black">
            <thead align="center">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">Hasil</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $datas = [
                    [
                        "nama" => "Pelita",
                        "kelas" => "Laravel",
                        "alamat" => "Bandung",
                        "tanggal_lahir" => "1997-12-27",
                        "nilai" => 90
                    ],
                    [
                        "nama" => "Najmina",
                        "kelas" => "Vue JS",
                        "alamat" => "Jakarta",
                        "tanggal_lahir" => "1998-10-07",
                        "nilai" => 55
                    ],
                    [
                        "nama" => "Anita",
                        "kelas" => "Design",
                        "alamat" => "Semarang",
                        "tanggal_lahir" => "1999-08-20",
                        "nilai" => 80
                    ],
                    [
                        "nama" => "Bayu",
                        "kelas" => "Digital Marketing",
                        "alamat" => "Bandung",
                        "tanggal_lahir" => "1990-01-01",
                        "nilai" => 65
                    ],
                    [
                        "nama" => "Nasa",
                        "kelas" => "UI/UX Designer",
                        "alamat" => "Bandung",
                        "tanggal_lahir" => "1995-04-10",
                        "nilai" => 70
                    ],
                    [
                        "nama" => "Rahma",
                        "kelas" => "Node JS",
                        "alamat" => "Yogyakarta",
                        "tanggal_lahir" => "1993-09-15",
                        "nilai" => 85
                    ]
                ];

                ?>

                <?php foreach ($datas as $key => $data) { ; ?>
                <tr>
                    <th scope="row"><?php echo $key + 1; ?></th>
                    <td><?php echo $data["nama"]; ?></td>
                    <td><?php echo date('d F Y', strtotime($data["tanggal_lahir"]) ); ?></td>
                    <td><?php echo date('Y-m-d') - $data["tanggal_lahir"]; ?> Tahun</td>
                    <td><?php echo $data["alamat"]; ?></td>
                    <td><?php echo $data["kelas"]; ?></td>
                    <td><?php echo $data["nilai"]; ?></td>
                    <td>
                        <?php 
                        $grade = $data["nilai"];

                        if($grade >= 90){
                            echo "A";
                        }elseif($grade >= 80){
                            echo "B";
                        }elseif($grade >= 70){
                            echo "C";
                        }elseif($grade >= 50){
                            echo "D";
                        }else{
                            echo "E";
                        }
                    ?>
                    </td>
                </tr>
                <?php }; ?>

            </tbody>
        </table>
    </div>



    <!-- link cdn js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>