<?php
$host = "localhost";
$kullanici = "root"; // XAMPP varsayılanı
$parola = "";        // XAMPP varsayılanı
$vt = "ders_rotasi"; // Ekran görüntüsündeki veritabanı adı

$baglanti = mysqli_connect($host, $kullanici, $parola, $vt);
mysqli_set_charset($baglanti, "UTF8");

if(!$baglanti){
    die("Bağlantı hatası: " . mysqli_connect_error());
}
?>