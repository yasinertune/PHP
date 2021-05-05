<!-- Yasin Ertune - Dinamik MenüBar Tasarımı -->
<?php
@$conn_mysql = new mysqli('localhost', 'root', '', 'navbar'); // Veritabanı bağlantımızı yapıyoruz.,
if (mysqli_connect_error()) //Eğer hata varsa yazdırıyoruz 
{
    echo mysqli_connect_error();
    exit; //eğer bağlantıda hata varsa PHP çalışmasını sonlandırıyoruz.
}
$conn_mysql->set_charset("utf8"); // Türkçe karakter sorunu olmaması için utf8'e çeviriyoruz.