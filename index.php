<?php
$client = new mysqli("localhost", "root", "", "cafe_progate");
$sql = "SELECT * FROM menus";
$result = $client->query($sql);
$menus_array = $result->fetch_all();
var_dump($menus_array);
?>


<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>cafe_progate</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Pacifico&display=swap" rel="stylesheet">
        <!-- link relはタイトルフォントのデータ-->
    </head>
    <body>
        <header>
            <div class = "title">
                <h3 class = "title_name">Cafe Progate</h3>
                <h6>メニュー４品</h6>
            </div>

        </header>

        <form action="order.php" method="get">
            <div class = "main">
                <div class = "menu_juice">
                    <img src = "<?php echo $menus_array[0][3]; ?>" class = "menu_jpg">
                    <h4><?php echo $menus_array[0][1]; ?></h4>
                    <h6>アイス</h6>
                    <?php for($i=0; $i<$menus_array[0][4]; $i++){echo "<img src = 'img/chilli.png' class='chilli'>" ;} ?>
                    <p class = "price">¥<?php echo $menus_array[0][2]; ?>（税込）</p>
                    <div class="quantity">
                        <input type ="number" class ="num" value ="0" min="0" name="juice">
                        <p >個</p>
                    </div>
                </div>
                <div class = "menu_coffee">
                    <img src = "<?php echo $menus_array[1][3]; ?>" class = "menu_jpg">
                    <h4><?php echo $menus_array[1][1]; ?></h4>
                    <h6>ホット</h6>
                    <?php for($i=0; $i<$menus_array[1][4]; $i++){echo "<img src = 'img/chilli.png' class='chilli'>" ;} ?>
                    <p class = "price">¥<?php echo $menus_array[1][2]; ?>（税込）</p>
                    <div class="quantity">
                        <input type ="number" class ="num" value ="0" min="0" name="coffee">
                        <p >個</p>
                    </div>
                </div>
                <div class = "menu_curry">
                    <img src = "<?php echo $menus_array[2][3]; ?>" class = "menu_jpg">
                    <h4><?php echo $menus_array[2][1]; ?></h4>
                    <?php for($i=0; $i<$menus_array[2][4]; $i++){echo "<img src = 'img/chilli.png' class='chilli'>" ;} ?>
                    <p class = "price">¥<?php echo $menus_array[2][2]; ?>税込）</p>
                    <div class="quantity">
                        <input type ="number" class ="num" value ="0" min="0" name="curry">
                        <p >個</p>
                    </div>
                </div>
                <div class = "menu_pasta">
                    <img src = "<?php echo $menus_array[3][3]; ?>" class = "menu_jpg">
                    <h4><?php echo $menus_array[3][1]; ?></h4>
                    <?php for($i=0; $i<$menus_array[3][4]; $i++){echo "<img src = 'img/chilli.png' class='chilli'>" ;} ?>
                    <p class = "price">¥<?php echo $menus_array[3][2]; ?>（税込）</p>
                    <div class="quantity">
                        <input type ="number" class ="num" value ="0" min="0" name="pasta">
                        <p >個</p>
                        </div>
                </div>
            </div>
            <div class = "menus">
                <div class = "order_btn">
                <input  type = "submit" class = "btn" value="注文する">
            </div>
        </form>
    </body>
</html>