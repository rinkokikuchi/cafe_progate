<DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>cafe_progate</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
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
                <h5>JUICE</h5>
                <h6>アイス</h6>
                <p>¥648（税込）</p>
                <input type ="text" class ="num" value ="0">
                <p>個</p>
            </div>
            <div class = "menu_coffee">
                <img src = "img/coffee.jpg" class = "menu_jpg">
                <h5>COFFEE</h5>
                <h6>ホット</h6>
                <p>¥540（税込）</p>
                <input type ="text" class ="num" value ="0">
                <p>個</p>
            </div>
            <div class = "menu_curry">
                <img src = "img/curry.jpg" class = "menu_jpg">
                <h5>CURRY</h5>
                <img src = "img/chilli.png" class="chilli">
                <img src = "img/chilli.png" class="chilli">
                <img src = "img/chilli.png" class="chilli">
                <p>¥972（税込）</p>
                <input type ="text" class ="num" value ="0">
                <p>個</p>
            </div>
            <div class = "menu_pasta">
                <img src = "img/pasta.jpg" class = "menu_jpg">
                <h5>PASTA</h5>
                <img src = "img/chilli.png" class="chilli">
                <img src = "img/chilli.png" class="chilli">
                <p>¥1296（税込）</p>
                <input type ="text" class ="num" value ="0">
                <p>個</p>
            </div>
        </div>
        <div class = "menus">
            <div class = "order_btn">
            <input type = "submit" value = "注文する" class = "btn">
        </div>
    </body>
</html>