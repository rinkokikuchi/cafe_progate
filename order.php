<?php
    require_once "menu.php";

    $juice_num = $_GET["juice"];
    $coffee_num = $_GET["coffee"];
    $curry_num = $_GET["curry"];
    $pasta_num = $_GET["pasta"];

    $juice = new Menu("JUICE", 648, $juice_num);
    $coffee = new Menu("COFFEE", 540, $coffee_num);
    $curry = new Menu("CURRY", 972, $curry_num);
    $pasta = new Menu("PASTA", 1296, $pasta_num);

    $menus = [$juice, $coffee, $curry, $pasta];

    $sum_price = 0;
    foreach($menus as $menu) {
        $sum_price += $menu->get_total_price();
    }
?>

<DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="order.css">
    <title>注文内容確認</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
    <body>
        <div class="all-container">
            <div class = "all">
                <div class = "order-title">
                    <h1>注文内容確認</h1>
                </div>
                <div class = order-container>
                    <?php foreach($menus as $menu) {
                        echo $menu->get_html();
                    } ?>
                </div>
                <div class = "sum_price">
                    <h1>合計金額: <?php echo $sum_price;?>円</h1>
                </div>
            </div>
        </div>
    </body>
</html>
