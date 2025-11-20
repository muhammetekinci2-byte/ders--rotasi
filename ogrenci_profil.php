<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profilimi Düzenle - Öğrenci</title>
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

    <div class="login-wrapper">
        <div class="login-container" style="max-width: 600px;">
            <h1 style="margin-bottom: 10px;">Öğrenci Bilgilerim</h1>
            <p class="login-subtitle">Bilgilerinizi güncelleyerek size en uygun öğretmenleri bulun.</p>
            
            <form class="login-form" action="#" method="POST">
                
                <div class="form-group-row">
                    <div class="form-group" style="flex:1; margin-right:10px;">
                        <label>ADINIZ</label>
                        <input type="text" name="student_name" value="Ali" required>
                    </div>
                    <div class="form-group" style="flex:1;">
                        <label>SOYADINIZ</label>
                        <input type="text" name="student_surname" value="Yılmaz" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>E-POSTA ADRESİ</label>
                    <input type="email" name="student_email" value="ali@ornek.com" required>
                </div>

                <div class="form-group">
                    <label>YENİ ŞİFRE BELİRLE (Değiştirmek İstemiyorsan Boş Bırak)</label>
                    <input type="password" name="student_new_password" placeholder="Yeni şifreniz...">
                </div>

                <div class="form-group">
                    <label>YAŞADIĞINIZ ŞEHİR</label>
                    <select name="student_city">
                        <option value="istanbul" selected>İstanbul</option>
                        <option value="izmir">İzmir</option>
                        <option value="ankara">Ankara</option>
                        <option value="bursa">Bursa</option>
                        <option value="adana">Adana</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>OKUL TÜRÜ</label>
                    <select name="school_type">
                        <option value="ilkokul">İlkokul</option>
                        <option value="ortaokul" selected>Ortaokul</option>
                        <option value="lise">Lise</option>
                        <option value="universite">Üniversite</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>SINIFINIZ</label>
                    <select name="student_class">
                        <option value="4">4. Sınıf</option>
                        <option value="5">5. Sınıf</option>
                        <option value="6">6. Sınıf</option>
                        <option value="7">7. Sınıf</option>
                        <option value="8" selected>8. Sınıf</option> <option value="9">9. Sınıf</option>
                        <option value="10">10. Sınıf</option>
                        <option value="11">11. Sınıf</option>
                        <option value="12">12. Sınıf</option>
                        <option value="mezun">Mezun</option>
                        <option value="universite">Üniversite</option>
                    </select>
                </div>
                
                <div class="form-actions" style="display: flex; gap: 15px;">
                    <button type="submit" class="login-submit-btn" style="background-color: #28a745;">Değişiklikleri Kaydet</button>
                    <a href="ogrenci_paneli.html" class="login-submit-btn" style="background-color: #ddd; color: #333; text-align:center; text-decoration:none;">İptal</a>
                </div>

            </form>
        </div>
    </div>

</body>
</html>