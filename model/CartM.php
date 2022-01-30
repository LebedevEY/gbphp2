<?php

include_once "PdoM.php";

class CartM {
    public function addGood($id) {
        $user = $_SESSION['user']['name'];
        $good = PdoM::Instance()->Select("SELECT * FROM goods WHERE id=$id");
        $i = PdoM::Instance()->Select("SELECT * FROM cart WHERE good_id = $id");
        if (count($i) != 0) {
            $count = ['count' => ($i[0]['count'] + 1)];
            return PdoM::Instance()->Update('cart', $count, "good_id = $id");
        } else {
            foreach ($good[0] as $key => $value) {
                if ($key == 'id') {
                    $columns[] = "`good_id`";
                } elseif ($key == 'description') {
                    continue;
                } else {
                    $columns[] = "`$key`";
                }
                $values[] = "'$value'";
            }
            array_push($columns, "`count`", "`user`");
            array_push($values, "'1'", "'$user'");
            return PdoM::Instance()->Insert('cart', $columns, $values);
        }
    }

    public function getCart() {
        $query = "SELECT * FROM `cart` ORDER BY 'good_id'";
        return PdoM::Instance()->Select($query);
    }

    public function getSum() {
        $query = "SELECT SUM(`price` * `count`) FROM `cart`";
        return PdoM::Instance()->Select($query);
    }

    public function setCount($id, $value) {
        $object = ['count' => $value];
        return PdoM::Instance()->Update('cart', $object, "good_id=$id");
    }

    public function delGood($id) {
        return PdoM::Instance()->Delete('cart', "id = $id");
    }

    public function clearCart() {
        return PdoM::Instance()->Delete('cart', "id>0");
    }
}
