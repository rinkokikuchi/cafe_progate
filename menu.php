<?php

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
}

?>
