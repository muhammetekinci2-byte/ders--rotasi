<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders Programım - Öğrenci Paneli</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="login-page">

    <nav class="navbar">
        <div class="navbar-left">
            <a href="ogrenci_paneli.html" class="logo">ÖZELDERSALANI</a>
            <ul class="nav-links">
                <li><a href="ogretmenler_girisli.html">Öğretmen Bul</a></li>
                <li><a href="ogrenci_program.html" style="color: white; font-weight: bold;">Ders Programım</a></li>
                <li><a href="ogrenci_ogretmenlerim.html">Öğretmenlerim</a></li>
                <li><a href="#">Mesajlarım</a></li>
            </ul>
        </div>
        <div class="navbar-right">
            <a href="ogrenci_profil.html" class="login-btn" style="border: none; color: #333; font-weight:bold;">
                <i class="fa-solid fa-user-circle"></i> Profilim
            </a>
            <a href="index.html" class="register-btn" style="background-color: #d90429; color: white;">Çıkış Yap</a>
        </div>
    </nav>

    <div class="dashboard-container">
        
        <div class="dashboard-header">
            <h1>Haftalık Ders Programım 📅</h1>
            <p>Ders saatlerini ve günlerini buradan takip edebilirsin.</p>
        </div>

        <div class="schedule-wrapper">

            <div class="schedule-day">
                <h3 class="day-title">Pazartesi</h3>
                <div class="schedule-empty">Bugün için planlanmış dersin yok. 🎉</div>
            </div>

            <div class="schedule-day">
                <h3 class="day-title">Salı</h3>
                <div class="schedule-item">
                    <div class="time-box">
                        <span class="time">16:00</span>
                        <span class="duration">60 dk</span>
                    </div>
                    <div class="lesson-info">
                        <h4>Matematik (LGS Hazırlık)</h4>
                        <p><i class="fa-solid fa-user-tie"></i> Öğretmen: Ahmet Yılmaz</p>
                        <span class="badge-online"><i class="fa-solid fa-video"></i> Online Ders</span>
                    </div>
                </div>
            </div>