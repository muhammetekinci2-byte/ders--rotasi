<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap - Özel Ders Alanı</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="login-page">

    <div class="top-banner">
        <span>KASIM AYINA ÖZEL %15'E VARAN İNDİRİMLER</span>
    </div>

    <nav class="navbar">
        <div class="navbar-left">
            <a href="index.html" class="logo">ÖZELDERSALANI</a>
            <ul class="nav-links">
                <li><a href="#">Öğretmen Bul</a></li>
                <li><a href="#">Online Ders</a></li>
                <li><a href="#">Ders Talepleri</a></li>
                <li><a href="#">Online Akademi</a></li>
                <li><a href="#">Ders Alanı</a></li>
                <li><a href="#">Kurumsal Eğitim</a></li>
            </ul>
        </div>
        <div class="navbar-right">
            <a href="giris.html" class="login-btn">Giriş Yap</a>
            <a href="kayit.html" class="register-btn">&amp; Kayıt Oluştur</a>
        </div>
    </nav>

    <div class="login-wrapper">
        <div class="login-container">
            <h1>Giriş Yapın</h1>
            <p class="login-subtitle">Hesabınıza giriş yapmak için seçiminizi yapın.</p>
            
            <input type="radio" name="login_type" id="tab-student" checked>
            <input type="radio" name="login_type" id="tab-teacher">

            <div class="login-tabs">
                <label for="tab-student" class="tab-btn student-label">
                    <i class="fa-solid fa-user-graduate"></i> Öğrenci Girişi
                </label>
                <label for="tab-teacher" class="tab-btn teacher-label">
                    <i class="fa-solid fa-chalkboard-user"></i> Öğretmen Girişi
                </label>
            </div>
            
            <form class="login-form form-student" action="ogrenci_paneli.html">
                
                <div class="form-group">
                    <label for="email-student">ÖĞRENCİ E-POSTA / KULLANICI ADI</label>
                    <input type="text" id="email-student" placeholder="Öğrenci E-Postanız">
                </div>
                
                <div class="form-group">
                    <label for="password-student">ŞİFRENİZ</label>
                    <input type="password" id="password-student" placeholder="******">
                </div>
                
                <div class="form-options">
                    <div class="remember-me">
                        <input type="checkbox" id="remember-student">
                        <label for="remember-student">Beni Hatırla</label>
                    </div>
                    <a href="#" class="forgot-password">Şifremi Unuttum?</a>
                </div>
                
                <button type="submit" class="login-submit-btn">Öğrenci Olarak Giriş Yap</button>
            </form>

        <form class="login-form form-teacher" action="ogretmen_paneli.html">
                
                <div class="form-group">
                    <label for="email-teacher">EĞİTMEN E-POSTA / KULLANICI ADI</label>
                    <input type="text" id="email-teacher" placeholder="Eğitmen E-Postanız">
                </div>
                
                <div class="form-group">
                    <label for="password-teacher">ŞİFRENİZ</label>
                    <input type="password" id="password-teacher" placeholder="******">
                </div>
                
                <div class="form-options">
                    <div class="remember-me">
                        <input type="checkbox" id="remember-teacher">
                        <label for="remember-teacher">Beni Hatırla</label>
                    </div>
                    <a href="#" class="forgot-password">Şifremi Unuttum?</a>
                </div>
                
                <button type="submit" class="login-submit-btn" style="background-color: #d90429; color: white;">Eğitmen Olarak Giriş Yap</button>
            </form>
            
            <div class="signup-link">
                <p>Bir Hesabınız Yok Mu? <a href="kayit.html">Yeni Kayıt Oluşturun</a></p>
            </div>
        </div>
    </div>

</body>
</html>