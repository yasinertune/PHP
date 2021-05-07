<!-- Yasin Ertune - Seo Dostu Url Nasıl Yapılır? -->
<?php 

include("connection.php");  //veritabanımızı bu alana import ediyoruz.

$seo_url = $_GET['seo_url'];    //Url'deki alan adından seo_url olan kısımı get ile çekiyoruz.
$get= $db->query("SELECT * FROM seo_friendly_url where seo_url='{$seo_url}' ")->fetch(PDO::FETCH_ASSOC); //veritabanından get ettiğimiz alan adını karşılaştırıyoruz. Eşleşen kaydı çekiyoruz.

echo $get['title']."<br>";    //Ekranda başlık kısmını gösteriyoruz.
echo $get['content']; //    //Ekranda içerik kısmını gösteriyoruz.