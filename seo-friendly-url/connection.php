<!-- Yasin Ertune - Seo Dostu Url Nasıl Yapılır? -->
<?php 

//pdo kullanımı
try { 
    $db= new PDO("mysql:host=localhost; dbname=seo_friendly_url;charset=utf8", "root",""); 
	$db->setAttribute(PDO::ATTR_ERRMODE, 
				PDO::ERRMODE_EXCEPTION); 
} catch(PDOException $e) { 
    print $e->getMessage();
} 

//mysqli kullanımı
@$conn_mysql = new mysqli('localhost', 'root', '', 'seo_friendly_url'); // Veritabanı bağlantımızı yapıyoruz.
    if(mysqli_connect_error()) //Eğer hata varsa yazdırıyoruz 
    {
        echo mysqli_connect_error();
        exit;
    }
$conn_mysql->set_charset("utf8"); // Türkçe karakter sorunu olmaması için utf8'e çeviriyoruz.

