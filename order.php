<?php
    $juice_num = $_GET["juice"];
    $coffee_num = $_GET["coffee"];
    $curry_num = $_GET["curry"];
    $pasta_num = $_GET["pasta"];

    $juice_price = $juice_num*648;
    $coffee_price = $coffee_num*540;
    $curry_price= $curry_num*972;
    $pasta_price = $pasta_num*1296;

    $sum_price = $juice_price+$coffee_price+$curry_price+$pasta_price;
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
                    <div class = "order">
                        <p class = "menu">JUICE×<?php echo $juice_num;?>個</p>
                        <p class= "price"><?php echo $juice_price;?>円</p>
                    </div>
                    <div class = "order">
                        <p class = "menu">COFFEE×<?php echo $coffee_num;?>個</p>
                        <p class= "price"><?php echo $coffee_price;?>円</p>
                    </div>
                    <div class = "order">
                        <p class = "menu">CURRY×<?php echo $curry_num;?>個</p>
                        <p class= "price"><?php echo $curry_price;?>円</p>
                    </div>
                    <div class = "order">
                        <p class = "menu">PASTA×<?php echo $pasta_num;?>個</p>
                        <p class= "price"><?php echo $pasta_price;?>円</p>
                    </div>
                    </div>
                <div class = "sum_price">
                    <h1>合計金額: <?php echo $sum_price;?>円</h1>
                </div>
            </div>
        </div>
    </body>
</html>
