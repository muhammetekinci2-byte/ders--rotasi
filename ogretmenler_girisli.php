<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Öğretmenler - Özel Ders Alanı</title>
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

    <main class="hero" style="padding-bottom: 40px;">
        <h1>Detaylı Öğretmen Arama</h1>
        <form action="#" method="GET" class="search-container">
            <div class="search-box">
                <div class="search-input">
                    <i class="fa-solid fa-book"></i>
                    <input type="text" name="ders" placeholder="Ders Seçin" autocomplete="off">
                    <div class="dropdown-menu">
                        <a href="#">Matematik</a><a href="#">İngilizce</a><a href="#">Fizik</a><a href="#">Piyano</a>
                    </div>
                </div>
                <div class="search-input">
                    <i class="fa-solid fa-location-dot"></i>
                    <input type="text" name="sehir" placeholder="Şehir" autocomplete="off">
                    <div class="dropdown-menu">
                        <a href="#">İstanbul</a><a href="#">Ankara</a><a href="#">İzmir</a>
                    </div>
                </div>
                <div class="search-input">
                    <i class="fa-solid fa-turkish-lira-sign"></i>
                    <input type="text" name="ucret" placeholder="Ücret Aralığı" autocomplete="off">
                    <div class="dropdown-menu">
                        <a href="#">250 TL - 500 TL</a><a href="#">500 TL - 1000 TL</a><a href="#">1000 TL +</a>
                    </div>
                </div>
                <button type="submit" class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </form>
    </main>

    <div class="centered-list">

        <div class="teacher-list-card">
            <div class="teacher-img">
                <i class="fa-solid fa-user-tie"></i>
            </div>
            <div class="teacher-info">
                <div class="info-header">
                    <h3>Ahmet Yılmaz <span>(Matematik Öğretmeni)</span></h3>
                    <span class="price">750 TL / Saat</span>
                </div>
                <p class="location"><i class="fa-solid fa-location-dot"></i> İstanbul, Kadıköy</p>
                <p class="desc">Boğaziçi Üniversitesi Matematik mezunuyum. 10 yıldır LGS ve YKS sınavlarına öğrenci hazırlıyorum.</p>
                <div class="tags">
                    <span>Online Ders</span>
                    <span>Yüz Yüze</span>
                </div>
            </div>
            <div class="card-action">
                <button>Profili İncele</button>
            </div>
        </div>

        <div class="teacher-list-card">
            <div class="teacher-img" style="background-color: #ffccd5;">
                <i class="fa-solid fa-user-graduate" style="color: #d90429;"></i>
            </div>
            <div class="teacher-info">
                <div class="info-header">
                    <h3>Zeynep Kaya <span>(İngilizce Öğretmeni)</span></h3>
                    <span class="price">600 TL / Saat</span>
                </div>
                <p class="location"><i class="fa-solid fa-location-dot"></i> Ankara, Çankaya</p>
                <p class="desc">ODTÜ İngilizce Öğretmenliği mezunu. Speaking ve IELTS hazırlık dersleri veriyorum.</p>
                <div class="tags">
                    <span>Online Ders</span>
                </div>
            </div>
            <div class="card-action">
                <button>Profili İncele</button>
            </div>
        </div>

        <div class="teacher-list-card">
            <div class="teacher-img" style="background-color: #e0eaff;">
                <i class="fa-solid fa-music" style="color: #3a3285;"></i>
            </div>
            <div class="teacher-info">
                <div class="info-header">
                    <h3>Mehmet Demir <span>(Piyano Eğitmeni)</span></h3>
                    <span class="price">900 TL / Saat</span>
                </div>
                <p class="location"><i class="fa-solid fa-location-dot"></i> İzmir, Karşıyaka</p>
                <p class="desc">Konservatuar mezunu, her yaştan öğrenciye klasik ve popüler piyano dersleri.</p>
                <div class="tags">
                    <span>Yüz Yüze</span>
                    <span>Evinizde Ders</span>
                </div>
            </div>
            <div class="card-action">
                <button>Profili İncele</button>
            </div>
        </div>

    </div>

</body>
</html>