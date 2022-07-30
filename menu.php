<?php
require_once "order.php";

class Menu {
    // インスタンス変数
    public $name, $price, $order_num;

    // コンストラクター
    // メニュが作成されたときに動く
    public function __construct($name, $price, $order_num) {
        $this->name = $name;
        $this->price = $price;
        $this->order_num = (int)$order_num;
    }

    public function get_total_price() {
        return $this->price * $this->order_num;
    }

    public function get_html_hello() {
        return "<h1>Hello</h1>";
    }
    
    public function get_html(){
        return "<div class = 'order'>".
            "<p class='menu'>".$this->name ."×". $this->order_num."個</p>".
            "<p class='price'>".$this->get_total_price()."円</p>".
            "</div>";
    }

    public function get_menus(){
    return "<div class = '$menu_array'>".
    $menu_count = count($menus);

    for($data=0; $data<$menu_count; $data++){
        "<img src = '<?php echo $menus_array[$data][2]; ?>" class = "menu_jpg'">.
        " <h4><?php echo $menus_array[$data][0]; ?></h4>".
        if([$data][4] === 'NULL'){
            <?php for($i=0; $i<$menus_array[2][3]; $i++){echo "<img src = 'img/chilli.png' class='chilli'>" ;} ?>
        }elseif([$data][4] === 0){
            echo "<h6>アイス</h6>";
        }else{echo"<h6>ホット<h6>";}
        <p class = "price">¥<?php echo $menus_array[$data][1]; ?>（税込）</p>
        <div class="quantity">
            <input type ="number" class ="num" value ="0" min="0" name="juice">
    }
        <p >個</p>
    </div>
</div>

    }
}

$data = 0;

2.0.3.1
?>
