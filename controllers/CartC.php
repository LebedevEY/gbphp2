<?php

class CartC extends Controller
{
    public function index()
    {
        $cart = new CartM();
        $goods = $cart->getCart();
        $sumArray = $cart->getSum();
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
        $cart = new CartM();
        $_SESSION['cart_empty'] = 0;
        return $cart->addGood($_GET['id']);
    }

    public function delGood()
    {
        $cart = new CartM();
        $cart->delGood($_GET['id']);
        if (count($cart->getCart()) == 0) {
            unset($_SESSION['cart_empty']);
        }
    }

    public function clearCart() {
        $cart = new CartM();
        unset($_SESSION['cart_empty']);
        return $cart->clearCart();
    }

    public function moreQuantity() {
        $cart = new CartM();
        $value = $_GET['quantity'] + 1;
        $id = $_GET['id'];
        echo $cart->setCount($id, $value);
    }

    public function lessQuantity() {
        $cart = new CartM();
        $value = $_GET['quantity'] - 1;
        $id = $_GET['id'];
        if ($value > 0) {
            echo $cart->setCount($id, $value);
        }
    }

    public function order() {
        $cart = new CartM();
        $goods = $cart->getCart();
        $user_id = $_SESSION['user'][0]['id'];
        $query = "SELECT MAX(order_id) FROM `orders` WHERE user_id = $user_id";
        $i = PdoM::Instance()->Select($query);
        $order_id = $i[0]['MAX(order_id)']+1;
        foreach ($goods as $good) {
            $columns = ['`good_id`', '`user_id`', '`count`', '`order_id`'];
            $values = [];
            array_push($values, $good['good_id'], $good['user_id'], $good['count'], "$order_id");
            var_dump($good);
            $cart->order($columns, $values);
        }
        $this->clearCart();
    }
}