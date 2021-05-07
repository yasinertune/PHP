<!-- Yasin Ertune - Seo Dostu Url Nasıl Yapılır? -->
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
</head>

<body>
    <form method="POST">
        <!-- Add butonunun tetiklenmesi için post metodu oluşturuyoruz. Kullanıcıdan başlık ve içerik alıyoruz.-->
        <label>Title</label><br>
        <td><textarea name="title" class="submit-post"></textarea></td><br>

        <label>Content</label><br>
        <td><textarea name="content" class="submit-post"></textarea></td><br><br>

        <input type="submit" name="add" class="btn btn-primary" value="ADD" style="margin-bottom:5px;margin-left:40px;"><br><br><br><br>
    </form>

    <?php
    include("connection.php"); //Veri tabanı bağlantımızı sağladık.
    include("seo_function.php");    //başlık kısmının seo url'ye çevrilmesi için gerekli fonksiyonu çağırdık.

    if (isset($_POST['add']) == 1) {    //Add butonuna basıldımı diye kontrol ediyoruz.Basıldıysa eğer aşağıdaki şartları gerçekleştirir.
        if ($_POST) {
            $title = $_POST['title'];   //name kısmı title olan textareda'ki veriyi değişkene aktardık.
            $content = $_POST['content'];   //name kısmı content olan textareda'ki veriyi değişkene aktardık.
            $seo_url = seo_function($title);  //başlığı seo url ye çevirdik.

            if ($title <> "" && $content <> "") {   //başlık ve içerik alanı boş değilse veritabanına eklemeye yapılacaktır.
                $conn_mysql->query("INSERT INTO seo_friendly_url (title,content,seo_url) VALUES ('$title','$content','$seo_url')");
            }
        }
    }

    //veritabanından başlıkları çektik ve her birine link verdik. htaccess'deki yazdığımız rewriterule komutuna uygun bir şekilde link veriyoruz. Eğer linki doğru vermezsek çalışmayacaktır.
    $sqlquery = "SELECT * FROM seo_friendly_url";
    $res = mysqli_query($conn_mysql, $sqlquery);
    while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
    ?><li><a class="title" href="<?= $row['seo_url'] ?>"><?php echo $row['title'] ?></a><br></li>
    <?php } ?>
</body>

</html>