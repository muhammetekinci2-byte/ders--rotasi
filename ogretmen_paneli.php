<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Öğretmen Paneli - Özel Ders Alanı</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="login-page"> <nav class="navbar">
        <div class="navbar-left">
            <a href="ogretmen_paneli.html" class="logo">ÖZELDERSALANI</a>
            <ul class="nav-links">
                <li><a href="ogretmen_paneli.html">Panelim</a></li>
                <li><a href="#">Ders Programım</a></li>
                <li><a href="ogretmen_ogrencilerim.html">Öğrencilerim</a></li>
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
            <h1>Hoşgeldin, Hocam 👋</h1>
            <p>Bekleyen ders taleplerini buradan yönetebilirsin.</p>
        </div>

        <div class="request-section">
            <h2 class="section-title online-title">
                <i class="fa-solid fa-video"></i> Online Ders Talepleri (2)
            </h2>
            
            <div class="request-card">
                <div class="req-left">
                    <div class="student-avatar" style="background-color: #e0eaff; color: #3a3285;">EC</div>
                    <div class="req-info">
                        <h3>Ece Yılmaz <span>(8. Sınıf - LGS Hazırlık)</span></h3>
                        <p><strong>Talep:</strong> Matematik Dersi</p>
                        <p class="req-date"><i class="fa-regular fa-clock"></i> 20 Kasım 2025, 14:00</p>
                    </div>
                </div>
                <div class="req-actions">
                    <button class="btn-accept"><i class="fa-solid fa-check"></i> Kabul Et</button>
                    <button class="btn-reject"><i class="fa-solid fa-xmark"></i> Reddet</button>
                </div>
            </div>

            <div class="request-card">
                <div class="req-left">
                    <div class="student-avatar" style="background-color: #e0eaff; color: #3a3285;">MK</div>
                    <div class="req-info">
                        <h3>Mehmet Kaya <span>(11. Sınıf)</span></h3>
                        <p><strong>Talep:</strong> Geometri Dersi</p>
                        <p class="req-date"><i class="fa-regular fa-clock"></i> 21 Kasım 2025, 16:30</p>
                    </div>
                </div>
                <div class="req-actions">
                    <button class="btn-accept"><i class="fa-solid fa-check"></i> Kabul Et</button>
                    <button class="btn-reject"><i class="fa-solid fa-xmark"></i> Reddet</button>
                </div>
            </div>
        </div>

        <div class="request-section">
            <h2 class="section-title face-title">
                <i class="fa-solid fa-chalkboard-user"></i> Yüzyüze Ders Talepleri (1)
            </h2>

            <div class="request-card">
                <div class="req-left">
                    <div class="student-avatar" style="background-color: #ffccd5; color: #d90429;">AS</div>
                    <div class="req-info">
                        <h3>Ayşe Solmaz <span>(Üniversite Hazırlık)</span></h3>
                        <p><strong>Talep:</strong> Matematik - Limit/Türev</p>
                        <p class="req-loc"><i class="fa-solid fa-location-dot"></i> İstanbul, Kadıköy (Öğrenci Evi)</p>
                        <p class="req-date"><i class="fa-regular fa-clock"></i> 22 Kasım 2025, 10:00</p>
                    </div>
                </div>
                <div class="req-actions">
                    <button class="btn-accept"><i class="fa-solid fa-check"></i> Kabul Et</button>
                    <button class="btn-reject"><i class="fa-solid fa-xmark"></i> Reddet</button>
                </div>
            </div>

        </div>

    </div>

</body>
</html>