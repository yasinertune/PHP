# Dinamik Menü Bar Oluşturma - Responsive Tasarım 

**Kısa Bilgi:** Bu uygulamada php ile dinamik menü bar oluşturuyoruz. Ana menü ve onun alt menüsü olacak şekilde bir açılır menü yapıyoruz. Tasarım Bootstrap'tan alınmıştır. 
Tasarımda ufak değişiklikler yapılmıştır.Bunu kendi projenize import etmek için gerekli adımları izleyiniz.

Web 1:
![image](https://user-images.githubusercontent.com/82734214/117145512-e8228c80-adbb-11eb-9000-27f7613f9965.png)

Web 2:
![image](https://user-images.githubusercontent.com/82734214/117145655-0d16ff80-adbc-11eb-8756-9958e9724e8b.png)

Mobil:
![image](https://user-images.githubusercontent.com/82734214/117146451-e3aaa380-adbc-11eb-9442-e0499502a984.png)

## İmport Etmek
1. Web kısmında localhost'tan Phpmyadmin'e giriş yapıyoruz. Daha sonra sol panelde bulunan "Yeni" butonuna tıklıyoruz. Sağ üst panelde "İçeri Aktar" butonuna tıklıyoruz. "Dosya Seç" butonundan navbar.sql'i bulup yüklüyoruz.
2. Veritabanımızı import ettik. Tablonun içindeki verileri kendinize göre şekillendirebilirsiniz. 
3. Veritabanımızın mantığı: 
   - Resime baktığımızda Ana başlıkların parent_id'si 0. Çünkü onlar bir alt menü değil. Bu yüzden Ana başlıkların girişini yaparken parent_id'sini 0 veriyoruz.
   - Alt başlık girmek için ilk önce Ana başlığın menu_id'sini buluyoruz ve alt başlığın parent_id'sine Ana başlığın menu_id'sini yazıyoruz. Resimde göründüğü gibi Alt başlıklar, Ana başlıkların menu_id'sini miras alıyor.
   - Veritabanında bulunan link alanı,tıklanıldığında o linke gidilmesini sağlıyor. Parent_id'si 0 olanlara link vermemize gerek yok. Çünkü onlar açılır bir menüye sahip olduğu için verdiğiniz linke gitmeyecektir.
  ![image](https://user-images.githubusercontent.com/82734214/117149844-42bde780-adc0-11eb-9c99-80d5e30d9e49.png)

4. Veritabanı işlemleri bittikten sonra dosyamızı Visual Studio Code veya başka bir platformdan açıyoruz. Bir önemli husus da Alt başlığı olmayan Ana başlıkların girişini statik olarak yani kendimiz navbar.php'de yazıyoruz. Alt başlığa sahip Ana başlıkları da dinamik olarak veritabanından çekiyoruz.  
