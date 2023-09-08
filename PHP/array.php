<form>
    <table border="1">
        <tr>
            <th style="padding: 10px;">NO</th>
            <th  style="padding: 10px;">Nama</th>
            <th  style="padding: 10px;">Tanggal Lahir</th>
            <th  style="padding: 10px;">Umur</th>
            <th style="padding: 10px;">Alamat</th>
            <th style="padding: 10px;">Kelas</th>
            <th style="padding: 10px;">Nilai</th>
            <th style="padding: 10px;">Hasil</th>
        </tr>

        <tr>
            <?php 
            
                $i= 1;
                $data = file_get_contents("data.json");
                $data = json_decode($data, true);
                foreach ($data as $key => $value) {
                    $tgl_lahir = $value['tanggal_lahir'];
                    $umur = new DateTime ($tgl_lahir);
                    $sekarang = new DateTime ();
                    $usia = $sekarang -> diff($umur);
                    $nilai = $value ['nilai'];
                    if ($nilai > 90) {
                        $grade = "A+";
                    } elseif ($nilai > 80){
                        $grade = "A";
                    } elseif ($nilai > 70){
                        $grade = "B+";
                    } elseif ($nilai > 60){
                        $grade = "B";
                    } elseif ($nilai > 50){
                        $grade = "C+";
                    } elseif ($nilai > 40){
                        $grade = "C";
                    } elseif ($nilai > 30){
                        $grade = "D";
                    } elseif ($nilai > 20){
                        $grade = "E";
                    } else {
                        $grade = "F";
                    }
                    for ($x=0; $x < count((array) $value ['kelas']) ; $x++) { 
                        echo "<td>" . $i++
                            . "<td>" . $value ['nama'] . "<td>" . $value['tanggal_lahir']
                            . "<td>" . $usia -> format('%y Tahun') . "<td>" . $value ['alamat'] 
                            . "<td>" . $value ['kelas'] . "<td>" . $value ['nilai'] 
                            . "<td>" . $grade . "<tr>";

                    }
                }
            
            ?>
        </tr>

        
    </table>
</form>
