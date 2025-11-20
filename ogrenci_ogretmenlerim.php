<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Öğretmenlerim - Öğrenci Paneli</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="login-page">

    <nav class="navbar">
        <div class="navbar-left">
            <a href="ogrenci_paneli.html" class="logo">ÖZELDERSALANI</a>
            <ul class="nav-links">
                <li><a href="ogretmenler_girisli.html">Öğretmen Bul</a></li>
                <li><a href="ogrenci_program.html">Ders Programım</a></li>
                <li><a href="ogrenci_ogretmenlerim.html" style="color: white; font-weight: bold;">Öğretmenlerim</a></li>
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
            <h1>Öğretmenlerim 📚</h1>
            <p>Aktif olarak ders aldığınız öğretmenler ve ders programınız.</p>
        </div>

        <div class="request-section">
            
            <div class="request-card">
                <div class="req-left">
                    <div class="teacher-img" style="width: 60px; height: 60px; margin-right: 20px; font-size: 24px;">
                        <i class="fa-solid fa-user-tie"></i>
                    </div>
                    <div class="req-info">
                        <h3>Ahmet Yılmaz <span>(Matematik Öğretmeni)</span></h3>
                        <p style="font-size: 16px; color: #333;"><strong>Alınan Ders:</strong> LGS Matematik Takviye</p>
                        <p class="req-loc"><i class="fa-solid fa-video"></i> Online Ders</p>
                        <p class="req-date"><i class="fa-regular fa-calendar"></i> Program: Her Salı, 16:00</p>
                    </div>
                </div>
                <div class="req-actions">
                    <button class="btn-accept" style="background-color: #3a3285;"><i class="fa-solid fa-message"></i> Mesaj At</button>
                    <button class="btn-reject" style="background-color: #eee; color: #333;"><i class="fa-solid fa-star"></i> Değerlendir</button>
                </div>
            </div>

            <div class="request-card">
                <div class="req-left">
                    <div class="teacher-img" style="width: 60px; height: 60px; margin-right: 20px; font-size: 24px; background-color: #ffccd5;">
                        <i class="fa-solid fa-music" style="color: #d90429;"></i>
                    </div>
                    <div class="req-info">
                        <h3>Melis Demir <span>(Piyano Eğitmeni)</span></h3>
                        <p style="font-size: 16px; color: #333;"><strong>Alınan Ders:</strong> Başlangıç Seviye Piyano</p>
                        <p class="req-loc"><i class="fa-solid fa-location-dot"></i> Yüz Yüze (Kadıköy)</p>
                        <p class="req-date"><i class="fa-regular fa-calendar"></i> Program: Her Cuma, 18:00</p>
                    </div>
                </div>
                <div class="req-actions">
                    <button class="btn-accept" style="background-color: #3a3285;"><i class="fa-solid fa-message"></i> Mesaj At</button>
                    <button class="btn-reject" style="background-color: #eee; color: #333;"><i class="fa-solid fa-star"></i> Değerlendir</button>
                </div>
            </div>

        </div>
    </div>

</body>
</html>