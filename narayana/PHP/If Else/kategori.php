<?php
$nama = "Narayana";
$tinggi_badan = 170;
$berat_badan = 70;


echo "<p>Nama: <b>$nama</b> </p>";
echo "<p> Tinggi Badan: <b>$tinggi_badan</b> </p>";
echo "<p> Berat Badan: <b>$berat_badan</b> </p>";
if ($berat_badan < 70) {
  echo "<p> Anda Termasuk <b>Kurus</b> </p>";
}
elseif ($berat_badan < 75) {
  echo "<p> Anda Termasuk <b>Sedang</b> </p>";
}
else {
  echo "<p> Anda Termasuk <b>Gemuk</b> </p>";
}

$a = ($tinggi_badan/100);
$b = ($tinggi_badan/100);
$c = $a * $b;
$nilai_bmi = $berat_badan / $c;
echo "<p> Nilai BMI Anda Adalah <b>$nilai_bmi<b> </p>";
?>