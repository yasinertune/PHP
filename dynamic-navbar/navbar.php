<!-- Yasin Ertune - Dinamik MenüBar Tasarımı -->
<div class="wrapper">
    <nav>
        <input type="checkbox" id="show-search">
        <input type="checkbox" id="show-menu">
        <label for="show-menu" class="menu-icon"><i class="fa fa-bars"></i></label>
        <div class="content2">
            <div class="logo"><a href="#"><img src="php.png"></a></div> <!-- Logo kısmı -->
            <?php

            include("connection.php");

            function get_menu_tree($parent_id)
            {
                $label = 1;
                global $conn_mysql;
                $menu = "";
                //Sorgumuzda statüsü yani durumu 1 olanların hepsini çekiyoruz.Bunu yapmamızın sebebi istemediğimiz ana başlıkların statüs'ü 0 olduğu için onlar gelmeyecek.
                $sqlquery = " SELECT * FROM navbar where status='1' and parent_id='" . $parent_id . "' ";
                $res = mysqli_query($conn_mysql, $sqlquery);
                while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) 
                {
                    $menu .= "<li><a href ='" . $_SERVER['REQUEST_URI'] . "' class='desktop-link' >" . $row['menu_name'] . "</a>";
                    $menu .= "<input type='checkbox' id='show-features" . $label . "'>";
                    $menu .= "<label for='show-features" . $label . "'>" . $row['menu_name'] . "</label>";
                    $menu .= "<ul>" . get_menu_tree2($row['menu_id']) . "</ul>";    //Menü id ile uyuşan parent id'leri çekmek functiona gidiyoruz.
                    $menu .= "</li>";
                    $label++;
                }
                return $menu;
            }
            function get_menu_tree2($parent_id)
            {
                global $conn_mysql;
                $menu = "";
                $sqlquery = " SELECT * FROM navbar where status='1' and parent_id='" . $parent_id . "' ";   //parent id'si ana menünün id'si ile uyuşan alt menüleri sorgudan çekiyoruz.
                $res = mysqli_query($conn_mysql, $sqlquery);
                while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                    $menu_id = $row['menu_id'];
                    $menu .= "<li><a href='".$row['link']."'>" . $row['menu_name'] . "</a></li>";
                }
                return $menu;
            }
            ?>

            <ul class="links">
                <!--Alt menüsü olmayan Ana Menüleri Statik olarak ekliyoruz. Alt menüsü olan id'ler veri tabanından geliyor-->
                <li><a href="index.php">Anasayfa</a></li>   <!--Statik olarak ekledik-->
                <?php echo get_menu_tree(0); ?>     <!--Dinamik olarak veritabanındakiler geliyor-->
                <li><a href="#">Hakkımızda</a></li>     <!--Statik olarak ekledik-->
            </ul>
        </div>

        <label for="show-search" class="search-icon"><i class="fa fa-search"></i></label>   <!-- search butonu -->
        <form action="" class="search-box" method="post">
            <input name="search" type="text" placeholder="Bul..." required>
            <button name="submit" type="submit" class="go-icon"><i class="fa fa-long-arrow-right"></i></button>
        </form>
    </nav>
</div>