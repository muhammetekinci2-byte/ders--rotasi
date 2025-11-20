<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profilimi Düzenle - Öğretmen</title>
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

    <div class="login-wrapper">
        <div class="login-container" style="max-width: 600px;"> <h1 style="margin-bottom: 10px;">Profil Bilgilerim</h1>
            <p class="login-subtitle">Bilgilerinizi güncel tutarak daha fazla öğrenciye ulaşın.</p>
            
            <form class="login-form" action="#" method="POST">
                
                <div class="form-group-row">
                    <div class="form-group" style="flex:1; margin-right:10px;">
                        <label>ADINIZ</label>
                        <input type="text" name="teacher_name" value="Ahmet" required>
                    </div>
                    <div class="form-group" style="flex:1;">
                        <label>SOYADINIZ</label>
                        <input type="text" name="teacher_surname" value="Yılmaz" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>E-POSTA ADRESİ</label>
                    <input type="email" name="teacher_email" value="ahmet@ornek.com" required>
                </div>

                <div class="form-group">
                    <label>YENİ ŞİFRE BELİRLE (Değiştirmek İstemiyorsan Boş Bırak)</label>
                    <input type="password" name="teacher_new_password" placeholder="Yeni şifreniz...">
                </div>

                <div class="form-group">
                    <label>DENEYİM YILI</label>
                    <select name="teacher_experience">
                        <option value="10" selected>10 Yıl</option> <option value="1">1 Yıl</option><option value="2">2 Yıl</option><option value="3">3 Yıl</option><option value="4">4 Yıl</option><option value="5">5 Yıl</option>
                        <option value="6">6 Yıl</option><option value="7">7 Yıl</option><option value="8">8 Yıl</option><option value="9">9 Yıl</option><option value="10">10 Yıl</option>
                        <option value="11">11 Yıl</option><option value="12">12 Yıl</option><option value="15">15 Yıl</option><option value="20">20 Yıl</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>BRANŞINIZ</label>
                    <select name="teacher_branch">
                        <option value="matematik" selected>Matematik</option>
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
                    <label>ŞEHİR</label>
                    <select name="teacher_city">
                        <option value="istanbul" selected>İstanbul</option>
                        <option value="izmir">İzmir</option>
                        <option value="ankara">Ankara</option>
                        <option value="bursa">Bursa</option>
                        <option value="adana">Adana</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>DERS SAAT ÜCRETİNİZ (TL)</label>
                    <input type="number" name="teacher_price" value="750" placeholder="Örn: 500" required>
                </div>

                <div class="form-group">
                    <label style="margin-bottom: 10px; display:block;">DERSİ NASIL VERMEK İSTİYORSUNUZ?</label>
                    <div class="lesson-mode-container">
                        <label class="checkbox-label">
                            <input type="checkbox" name="mode_online" checked> 
                            <i class="fa-solid fa-video"></i> Online Ders
                        </label>
                        <label class="checkbox-label">
                            <input type="checkbox" name="mode_face" checked> 
                            <i class="fa-solid fa-chalkboard-user"></i> Yüz Yüze Ders
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label>KENDİNİZİ TANITIN (AÇIKLAMA)</label>
                    <textarea name="teacher_bio" rows="5">Boğaziçi Üniversitesi Matematik mezunuyum. 10 yıldır LGS ve YKS sınavlarına öğrenci hazırlıyorum.</textarea>
                </div>
                
                <div class="form-actions" style="display: flex; gap: 15px;">
                    <button type="submit" class="login-submit-btn" style="background-color: #28a745;">Değişiklikleri Kaydet</button>
                    <a href="ogretmen_paneli.html" class="login-submit-btn" style="background-color: #ddd; color: #333; text-align:center; text-decoration:none;">İptal</a>
                </div>

            </form>
        </div>
    </div>

</body>
</html>