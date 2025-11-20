<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Öğrenci Paneli - Özel Ders Alanı</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="home-page">

    <nav class="navbar">
        <div class="navbar-left">
            <a href="ogrenci_paneli.html" class="logo">ÖZELDERSALANI</a>
            <ul class="nav-links">
                <li><a href="ogretmenler_girisli.html">Öğretmen Bul</a></li>
                <li><a href="ogrenci_program.html">Ders Programım</a></li>
                <li><a href="ogrenci_ogretmenlerim.html">Öğretmenlerim</a></li>
                <li><a href="#">Mesajlarım</a></li>
            </ul>
        </div>
        <div class="navbar-right">
            <a href="ogrenci_profil.html" class="login-btn" style="border: none; color: white;">
    <i class="fa-solid fa-user-circle"></i> Profilim
</a>
            <a href="index.html" class="register-btn" style="background-color: #d90429; color: white;">Çıkış Yap</a>
        </div>
    </nav>

    <main class="hero" style="padding-bottom: 20px;">
        <div class="badge">
            <i class="fa-solid fa-location-dot"></i>
            <span>KONUMUNUZ: İSTANBUL</span>
        </div>
        
        <h1>Hangi dersi almak istersin?</h1>
        
        <form action="ogretmenler_girisli.html" method="GET" class="search-container"></form>
            <div class="search-box">
                
                <div class="search-input" style="border-right: none;"> <i class="fa-solid fa-book"></i>
                    <input type="text" name="ders" placeholder="Ders Seçiniz..." autocomplete="off">
                    
                    <div class="dropdown-menu">
                        <a href="#">Matematik</a>
                        <a href="#">İngilizce</a>
                        <a href="#">İlköğretim Takviye</a>
                        <a href="#">Türkçe</a>
                        <a href="#">Fizik</a>
                        <a href="#">Fen Bilgisi</a>
                        <a href="#">Almanca</a>
                        <a href="#">İstatistik</a>
                        <a href="#">Piyano</a>
                    </div>
                </div>

                <button type="submit" class="search-btn">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
        </form>
    </main>