<?php 
$nama = "badak";

$tinggiBadan = 1.65;

$beratBadan =63;
$BMI =$beratBadan / ($tinggiBadan*$tinggiBadan);
echo"Halo, $nama. Nilai BMI anda adalah $BMI, anda termasuk ";
if($BMI<18.5) {
    echo "Kurus";
}
elseif($BMI>18.5 && $BMI <24.9){
    echo "Normal";
}
else{
    echo "Gemuk";
}
?>