# Seo Dostu URL yapımı 

**Kısa Bilgi:** Bu uygulamada alan adımızı seo uyumlu olarak tasarlıyoruz.Anahtar kelimeler alan adımızda bulunacaktır. Bu sayede sitemiz sıralama olarak en üstlerde yer alacaktır.

## Veritabanımızı İmport etmek
1. Web kısmında localhost'tan Phpmyadmin'e giriş yapıyoruz. Daha sonra sol panelde bulunan "Yeni" butonuna tıklıyoruz. Sağ üst panelde "İçeri Aktar" butonuna tıklıyoruz. "Dosya Seç" butonundan seo_friendly_url.sql'i bulup yüklüyoruz.

## Kodların açıklanması 
1. .htaccess dosyamızda "RewriteRule ^([0-9a-zA-Z-_]+)$  newpage.php?seo_url=$1 [L,QSA]" komutu kullandık.
    - newpage.php?seo_url=$1 : Bu komut tıkladığımızda gideceği alan adının tamamını kapsar. seo_url kısmı da newpage'de get edeceğimiz alan adıdır. 
    - ([0-9a-zA-Z-_]+)$ : Bu kısımda alan adımızı daha basite indirgiyoruz ve seo uyumlu yapıyoruz. 
    - Farklı bir kullanım olarak alan adımızda hem id hemde seo_url görmek isteseydik "RewriteRule ^([0-9]+)/([0-9a-zA-Z-_]+)$ newpage.php?id=$1&seo_url=$2 [L,QSA]" şeklinde kullanabilirdik. Tabikide index.php'de link verdiğimiz yeri de düzeltmeliyiz. 
    - Eğerki alan adında newpage.php kısmını da görmek isteseydik "RewriteRule ^newpage.php/([0-9a-zA-Z-_]+)$  newpage.php?seo_url=$1 [L,QSA]" şeklinde kullanabilirdik. Tabikide index.php'de link verdiğimiz yeri de düzeltmeliyiz. 

2. İndex.php'de link verdiğimiz kısmı doğru girmezsek linkimiz doğru çalışmayacaktır.

3. Newpage.php'de .htaccess dosyasında tanımladığımız değişkeni get ediyoruz. Yani alan adından o kısmı çekiyoruz ve veritabanında gerekli sütunlarla karşılaştırıyoruz. Get ettiğimiz veriyle uyuşan sütunları ekranda gösteriyoruz.

**NOT: Siteniz ne kadar iyi bir içeriğe sahip olsa da doğru yolları (meta etiket,seo uyumlu url vb) takip etmezseniz Google'da en üstlerde listelenemezsiniz.**

**Görünüm : URL'ye dikkat ediniz.**

![image](https://user-images.githubusercontent.com/82734214/117512991-612b0b00-af99-11eb-8322-e4dc183859c4.png)
