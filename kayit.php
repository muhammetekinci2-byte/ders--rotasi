<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol - Özel Ders Alanı</title>
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
            <h1>Kayıt Olun</h1>
            <p class="login-subtitle">Hangi rolde kayıt olmak istediğinizi seçin.</p>
            
            <input type="radio" name="register_type" id="reg-student" checked>
            <input type="radio" name="register_type" id="reg-teacher">

            <div class="login-tabs">
                <label for="reg-student" class="tab-btn student-label">
                    <i class="fa-solid fa-user-graduate"></i> Öğrenci
                </label>
                <label for="reg-teacher" class="tab-btn teacher-label">
                    <i class="fa-solid fa-chalkboard-user"></i> Öğretmen
                </label>
            </div>
            
            <form class="login-form form-student">
                <div class="form-group"><label>ADINIZ</label><input type="text" placeholder="Adınız *"></div>
                <div class="form-group"><label>SOYADINIZ</label><input type="text" placeholder="Soyadınız *"></div>
                <div class="form-group"><label>E-POSTA ADRESİ</label><input type="text" placeholder="E-Posta Adresiniz *"></div>
                <div class="form-group"><label>ŞİFRENİZ</label><input type="password" placeholder="******"></div>
                <div class="form-group">
                    <label>YAŞADIĞINIZ ŞEHİR</label>
                    <select>
                        <option value="" disabled selected>Şehir Seçiniz</option>
                        <option value="istanbul">İstanbul</option>
                        <option value="izmir">İzmir</option>
                        <option value="ankara">Ankara</option>
                        <option value="bursa">Bursa</option>
                        <option value="kutahya">Kütahya</option>
                        <option value="hatay">Hatay</option>
                        <option value="manisa">Manisa</option>
                        <option value="konya">Konya</option>
                        <option value="adana">Adana</option>
                        <option value="trabzon">Trabzon</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>OKUL TÜRÜ</label>
                    <select>
                        <option value="" disabled selected>Okul Türü Seçiniz</option>
                        <option value="ilkokul">İlkokul</option>
                        <option value="ortaokul">Ortaokul</option>
                        <option value="lise">Lise</option>
                        <option value="universite">Üniversite</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>SINIFINIZ</label>
                    <select>
                        <option value="" disabled selected>Sınıf Seçiniz</option>
                        <option value="4">4. Sınıf</option>
                        <option value="5">5. Sınıf</option>
                        <option value="6">6. Sınıf</option>
                        <option value="7">7. Sınıf</option>
                        <option value="8">8. Sınıf</option>
                        <option value="9">9. Sınıf</option>
                        <option value="10">10. Sınıf</option>
                        <option value="11">11. Sınıf</option>
                        <option value="12">12. Sınıf</option>
                        <option value="mezun">Mezun</option>
                        <option value="universite">Üniversite</option>
                    </select>
                </div>
                <button type="submit" class="login-submit-btn">Öğrenci Kaydı Oluştur</button>
            </form>

            <form class="login-form form-teacher">
                <div class="form-group"><label>ADINIZ</label><input type="text" placeholder="Adınız *"></div>
                <div class="form-group"><label>SOYADINIZ</label><input type="text" placeholder="Soyadınız *"></div>
                <div class="form-group"><label>E-POSTA ADRESİ</label><input type="text" placeholder="E-Posta Adresiniz *"></div>
                <div class="form-group"><label>ŞİFRENİZ</label><input type="password" placeholder="******"></div>
                <div class="form-group">
                    <label>YAŞADIĞINIZ ŞEHİR</label>
                    <select>
                        <option value="" disabled selected>Şehir Seçiniz</option>
                        <option value="istanbul">İstanbul</option>
                        <option value="izmir">İzmir</option>
                        <option value="ankara">Ankara</option>
                        <option value="bursa">Bursa</option>
                        <option value="kutahya">Kütahya</option>
                        <option value="hatay">Hatay</option>
                        <option value="manisa">Manisa</option>
                        <option value="konya">Konya</option>
                        <option value="adana">Adana</option>
                        <option value="trabzon">Trabzon</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>BRANŞINIZ</label>
                    <select>
                        <option value="" disabled selected>Ders Seçiniz</option>
                        <option value="matematik">Matematik</option>
                        <option value="ingilizce">İngilizce</option>
                        <option value="ilkogretim">İlköğretim Takviye</option>
                        <option value="turkce">Türkçe</option>
                        <option value="fizik">Fizik</option>
                        <option value="fen">Fen Bilgisi</option>
                        <option value="almanca">Almanca</option>
                        <option value="istatistik">İstatistik</option>
                        <option value="piyano">Piyano</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>DENEYİM YILI</label>
                    <select>
                        <option value="" disabled selected>Yıl Seçiniz</option>
                        <option value="1">1 Yıl</option><option value="2">2 Yıl</option><option value="3">3 Yıl</option><option value="4">4 Yıl</option><option value="5">5 Yıl</option>
                        <option value="6">6 Yıl</option><option value="7">7 Yıl</option><option value="8">8 Yıl</option><option value="9">9 Yıl</option><option value="10">10 Yıl</option>
                        <option value="11">11 Yıl</option><option value="12">12 Yıl</option><option value="13">13 Yıl</option><option value="14">14 Yıl</option><option value="15">15 Yıl</option>
                        <option value="16">16 Yıl</option><option value="17">17 Yıl</option><option value="18">18 Yıl</option><option value="19">19 Yıl</option><option value="20">20 Yıl</option>
                        <option value="21">21 Yıl</option><option value="22">22 Yıl</option><option value="23">23 Yıl</option><option value="24">24 Yıl</option><option value="25">25 Yıl</option>
                        <option value="26">26 Yıl</option><option value="27">27 Yıl</option><option value="28">28 Yıl</option><option value="29">29 Yıl</option><option value="30">30 Yıl</option>
                        <option value="31">31 Yıl</option><option value="32">32 Yıl</option><option value="33">33 Yıl</option><option value="34">34 Yıl</option><option value="35">35 Yıl</option>
                        <option value="36">36 Yıl</option><option value="37">37 Yıl</option><option value="38">38 Yıl</option><option value="39">39 Yıl</option><option value="40">40 Yıl</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>KENDİNİZİ TANITIN (AÇIKLAMA)</label>
                    <textarea rows="4" placeholder="Öğrencilerinizin sizi tanıması için kısa bir açıklama yazınız..."></textarea>
                </div>
                
                <button type="submit" class="login-submit-btn" style="background-color: #d90429; color: white;">Eğitmen Kaydı Oluştur</button>
            </form>
            
            <div class="signup-link">
                <p>Zaten Bir Hesabınız Var Mı? <a href="giris.html">Giriş Yapın</a></p>
            </div>
        </div>
    </div>

</body>
</html>