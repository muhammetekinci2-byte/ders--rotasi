<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Öğrencilerim - Öğretmen Paneli</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="login-page">

    <nav class="navbar">
        <div class="navbar-left">
            <a href="ogretmen_paneli.html" class="logo">ÖZELDERSALANI</a>
            <ul class="nav-links">
                <li><a href="ogretmen_paneli.html">Panelim</a></li>
                <li><a href="#">Ders Programım</a></li>
                <li><a href="ogretmen_ogrencilerim.html" style="color: white; font-weight: bold;">Öğrencilerim</a></li>
                <li><a href="#">Gelir Takibi</a></li>
            </ul>
        </div>
        <div class="navbar-right">
            <a href="ogretmen_profil.html" class="login-btn" style="background-color: #3a3285; color: white; border:none;">
                <i class="fa-solid fa-user-tie"></i> Profilim
            </a>
            <a href="index.html" class="register-btn" style="background-color: #d90429; color: white;">Çıkış Yap</a>
        </div>
    </nav>

    <div class="dashboard-container">
        
        <div class="dashboard-header">
            <h1>Öğrencilerim 🎓</h1>
            <p>Aktif olarak ders verdiğiniz öğrencilerin listesi ve ders detayları.</p>
        </div>

        <div class="request-section">
            
            <div class="request-card">
                <div class="req-left">
                    <div class="student-avatar" style="background-color: #e0eaff; color: #3a3285;">EY</div>
                    <div class="req-info">
                        <h3>Ece Yılmaz <span>(8. Sınıf)</span></h3>
                        <p style="font-size: 16px; color: #333;"><strong>Verilen Ders:</strong> Matematik (LGS Hazırlık)</p>
                        <p class="req-loc"><i class="fa-solid fa-video"></i> Online Ders</p>
                        <p class="req-date"><i class="fa-regular fa-calendar"></i> Program: Her Salı, 16:00</p>
                    </div>
                </div>
                <div class="req-actions">
                    <button class="btn-accept" style="background-color: #3a3285;"><i class="fa-solid fa-message"></i> Mesaj At</button>
                    <button class="btn-reject" style="background-color: #eee; color: #333;"><i class="fa-solid fa-ellipsis"></i> Detay</button>
                </div>
            </div>

            <div class="request-card">
                <div class="req-left">
                    <div class="student-avatar" style="background-color: #ffccd5; color: #d90429;">MK</div>
                    <div class="req-info">
                        <h3>Mehmet Kaya <span>(11. Sınıf)</span></h3>
                        <p style="font-size: 16px; color: #333;"><strong>Verilen Ders:</strong> Fizik (TYT/AYT)</p>
                        <p class="req-loc"><i class="fa-solid fa-location-dot"></i> Yüz Yüze (Öğrenci Evi)</p>
                        <p class="req-date"><i class="fa-regular fa-calendar"></i> Program: Çarşamba & Cuma, 18:30</p>
                    </div>
                </div>
                <div class="req-actions">
                    <button class="btn-accept" style="background-color: #3a3285;"><i class="fa-solid fa-message"></i> Mesaj At</button>
                    <button class="btn-reject" style="background-color: #eee; color: #333;"><i class="fa-solid fa-ellipsis"></i> Detay</button>
                </div>
            </div>

            <div class="request-card">
                <div class="req-left">
                    <div class="student-avatar" style="background-color: #d4edda; color: #155724;">AS</div>
                    <div class="req-info">
                        <h3>Ayşe Solmaz <span>(Üniversite 1. Sınıf)</span></h3>
                        <p style="font-size: 16px; color: #333;"><strong>Verilen Ders:</strong> İstatistik (Vize Hazırlık)</p>
                        <p class="req-loc"><i class="fa-solid fa-video"></i> Online Ders</p>
                        <p class="req-date"><i class="fa-regular fa-calendar"></i> Program: Esnek Saatler</p>
                    </div>
                </div>
                <div class="req-actions">
                    <button class="btn-accept" style="background-color: #3a3285;"><i class="fa-solid fa-message"></i> Mesaj At</button>
                    <button class="btn-reject" style="background-color: #eee; color: #333;"><i class="fa-solid fa-ellipsis"></i> Detay</button>
                </div>
            </div>

        </div>
    </div>

</body>
</html>