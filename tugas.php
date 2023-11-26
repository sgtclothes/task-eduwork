<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator BMI</title>
</head>
<body>

<?php

function hitungBMI($tinggi, $berat) {
    // Formula BMI: berat (kg) / (tinggi (m) * tinggi (m))
    $tinggi_m = $tinggi / 100; // Ubah tinggi dari cm ke m
    $bmi = $berat / ($tinggi_m * $tinggi_m);
    return $bmi;
}


function kategoriBMI($bmi) {
    if ($bmi < 18.5) {
        return "Kurus";
    } elseif ($bmi >= 18.5 && $bmi < 24.9) {
        return "Normal";
    } elseif ($bmi >= 25 && $bmi < 29.9) {
        return "Gemuk";
    } else {
        return "Obesitas";
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nama = $_POST["nama"];
    $tinggi_badan = $_POST["tinggi_badan"];
    $berat_badan = $_POST["berat_badan"];

   
    $bmi = hitungBMI($tinggi_badan, $berat_badan);

   
    $kategori = kategoriBMI($bmi);

    
    echo "<p>Halo, $nama. Nilai BMI Anda adalah: $bmi. Anda termasuk dalam kategori: $kategori.</p>";
}
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" required><br>

    <label for="tinggi_badan">Tinggi Badan (cm):</label>
    <input type="number" name="tinggi_badan" required><br>

    <label for="berat_badan">Berat Badan (kg):</label>
    <input type="number" name="berat_badan" required><br>

    <input type="submit" value="Hitung BMI">
</form>

</body>
</html>
