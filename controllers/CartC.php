<?php

class CartC extends Controller
{
    private CartM $cart;

    public function __construct() {
        $this->cart = new CartM();
    }

    public function index()
    {
        $goods = $this->cart->getCart();
        $sumArray = $this->cart->getSum();
        if (is_array($sumArray[0])){
            $sum = array_values($sumArray[0]);
        }
        if (!isset($sum)) {
            $sum[0] = 0;
        }
        $page = $this->Template('view/cart.php', array('goods' => $goods, 'sum' => $sum));
        echo $page;

    }

    public function addGood()
    {
        $_SESSION['cart_empty'] = 0;
        return $this->cart->addGood($_GET['id']);
    }

    public function delGood()
    {
        $this->cart->delGood($_GET['id']);
        if (count($this->cart->getCart()) == 0) {
            unset($_SESSION['cart_empty']);
        }
    }

    public function clearCart() {
        unset($_SESSION['cart_empty']);
        return $this->cart->clearCart();
    }

    public function moreQuantity() {
        $value = $_GET['quantity'] + 1;
        $id = $_GET['id'];
        echo $this->cart->setCount($id, $value);
    }

    public function lessQuantity() {
        $value = $_GET['quantity'] - 1;
        $id = $_GET['id'];
        if ($value > 0) {
            echo $this->cart->setCount($id, $value);
        }
    }

    public function order() {
        $goods = $this->cart->getCart();
        $user_id = $_SESSION['user'][0]['id'];
        $query = "SELECT MAX(order_id) FROM `orders` WHERE user_id = $user_id";
        $i = PdoM::Instance()->Select($query);
        $order_id = $i[0]['MAX(order_id)']+1;
        foreach ($goods as $good) {
            $columns = ['`good_id`', '`user_id`', '`count`', '`order_id`'];
            $values = [];
            array_push($values, $good['good_id'], $good['user_id'], $good['count'], "$order_id");
            $this->cart->order($columns, $values);
        }
        $this->clearCart();
    }
}