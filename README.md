anti-keylogger-php
==================

Belirlenen bir şifrenin yine belirlenen sayıda rastgele karakterlerini seçer ve giriş formu gibi istenilen herhangi bir yerde kullanıcıya sorar.

Kullanımı
=================
İlk olarak herhangi bir php dosyası oluşturup içerisine class.sifre.php dosyasını include ediyoruz.
Sonrasında $sifre::olustur($sifre,$sayi); şeklinde şifre sınıfımızı çalıştırıyoruz. $sifre parametresi şifreyi, $sayi parametresi ise şifreniz içerisinden kaç karakterin sorulacağını temsil eder. Eğer $sayi parametresi tam ve positif bir sayı değilse veya şifredeki karakter sayısından büyükse sadece bir adet karakter soracaktır.
