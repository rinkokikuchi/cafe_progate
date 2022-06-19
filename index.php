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

        <div class = "main">
            <div class = "menu_juice">
                <img src = "img/juice.jpg" class = "menu_jpg">
                <h4>JUICE</h4>
                <h6>アイス</h6>
                <p class = "price">¥648（税込）</p>
                <div class="quantity">
                    <input type ="text" class ="num" value ="0">
                    <p >個</p>
                </div>
            </div>
            <div class = "menu_coffee">
                <img src = "img/coffee.jpg" class = "menu_jpg">
                <h4>COFFEE</h4>
                <h6>ホット</h6>
                <p class = "price">¥540（税込）</p>
                <div class="quantity">
                    <input type ="text" class ="num" value ="0">
                    <p >個</p>
                </div>
            </div>
            <div class = "menu_curry">
                <img src = "img/curry.jpg" class = "menu_jpg">
                <h4>CURRY</h4>
                <img src = "img/chilli.png" class="chilli">
                <img src = "img/chilli.png" class="chilli">
                <img src = "img/chilli.png" class="chilli">
                <p class = "price">¥972（税込）</p>
                <div class="quantity">
                    <input type ="text" class ="num" value ="0">
                    <p >個</p>
                </div>
            </div>
            <div class = "menu_pasta">
                <img src = "img/pasta.jpg" class = "menu_jpg">
                <h4>PASTA</h4>
                <img src = "img/chilli.png" class="chilli">
                <p class = "price">¥1296（税込）</p>
                <div class="quantity">
                    <input type ="text" class ="num" value ="0">
                    <p >個</p>
                </div>
            </div>
        </div>
        <div class = "menus">
            <div class = "order_btn">
            <button  type = "submit" class = "btn">注文する</button>
        </div>
    </body>
</html>