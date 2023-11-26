<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Luas Bangun Datar</title>
</head>
<body>
    <h2>Kalkulator Luas Bangun Datar</h2>

    <?php
  
    $luas_persegi_panjang = $luas_segitiga = $luas_lingkaran = $luas_trapesium = $luas_jajar_genjang = 0;
    
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Perhitungan luas persegi panjang
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];
        $luas_persegi_panjang = $panjang * $lebar;

      
        $alas = $_POST["alas_segitiga"];
        $tinggi_segitiga = $_POST["tinggi_segitiga"];
        $luas_segitiga = 0.5 * $alas * $tinggi_segitiga;

      
        $jari_jari = $_POST["jari_jari"];
        $luas_lingkaran = M_PI * $jari_jari * $jari_jari;

      
        $sisi_atas = $_POST["sisi_atas"];
        $sisi_bawah = $_POST["sisi_bawah"];
        $tinggi_trapesium = $_POST["tinggi_trapesium"];
        $luas_trapesium = 0.5 * ($sisi_atas + $sisi_bawah) * $tinggi_trapesium;

      
        $alas_jajar_genjang = $_POST["alas_jajar_genjang"];
        $tinggi_jajar_genjang = $_POST["tinggi_jajar_genjang"];
        $luas_jajar_genjang = $alas_jajar_genjang * $tinggi_jajar_genjang;
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
     
        <label for="panjang">Panjang Persegi Panjang:</label>
        <input type="number" name="panjang" required>
        <label for="lebar">Lebar Persegi Panjang:</label>
        <input type="number" name="lebar" required>
        <input type="submit" value="Hitung Luas Persegi Panjang">
        <p>Luas Persegi Panjang: <?php echo $luas_persegi_panjang; ?></p>

        
        <label for="alas_segitiga">Alas Segitiga:</label>
        <input type="number" name="alas_segitiga" required>
        <label for="tinggi_segitiga">Tinggi Segitiga:</label>
        <input type="number" name="tinggi_segitiga" required>
        <input type="submit" value="Hitung Luas Segitiga">
        <p>Luas Segitiga: <?php echo $luas_segitiga; ?></p>

        <label for="jari_jari">Jari-jari Lingkaran:</label>
        <input type="number" name="jari_jari" required>
        <input type="submit" value="Hitung Luas Lingkaran">
        <p>Luas Lingkaran: <?php echo $luas_lingkaran; ?></p>

        
        <label for="sisi_atas">Panjang Sisi Atas:</label>
        <input type="number" name="sisi_atas" required>
        <label for="sisi_bawah">Panjang Sisi Bawah:</label>
        <input type="number" name="sisi_bawah" required>
        <label for="tinggi_trapesium">Tinggi Trapesium:</label>
        <input type="number" name="tinggi_trapesium" required>
        <input type="submit" value="Hitung Luas Trapesium">
        <p>Luas Trapesium: <?php echo $luas_trapesium; ?></p>

        <label for="alas_jajar_genjang">Alas Jajar Genjang:</label>
        <input type="number" name="alas_jajar_genjang" required>
        <label for="tinggi_jajar_genjang">Tinggi Jajar Genjang:</label>
        <input type="number" name="tinggi_jajar_genjang" required>
        <input type="submit" value="Hitung Luas Jajar Genjang">
        <p>Luas Jajar Genjang: <?php echo $luas_jajar_genjang; ?></p>
    </form>

</body>
</html>
