<?php

class CartM {
    public function addGood($id) {
        $user_id = $_SESSION['user'][0]['id'];
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
            array_push($columns, "`count`", "`user_id`");
            array_push($values, "'1'", "'$user_id'");
            $columns_str = implode(',', $values);;
            if ($user_id !== null) {
                return PdoM::Instance()->Insert('cart', $columns, $values);
            } else {
                return false;
            }

        }
    }

    public function getCart() {
        $user_id = $_SESSION['user'][0]['id'];
        if (isset($user_id)) {
            $query = "SELECT * FROM `cart` WHERE user_id = $user_id ORDER BY 'good_id'";
            return PdoM::Instance()->Select($query);
        } else {
            return array();
        }
    }

    public function getSum() {
        $user_id = $_SESSION['user'][0]['id'];
        $query = "SELECT SUM(`price` * `count`) FROM `cart` WHERE user_id = $user_id";
        return PdoM::Instance()->Select($query);
    }

    public function setCount($id, $value) {
        $object = ['`count`' => $value];
        return PdoM::Instance()->Update("`cart`", $object, "good_id=$id");
    }

    public function delGood($id) {
        return PdoM::Instance()->Delete('cart', "id = $id");
    }

    public function clearCart() {
        return PdoM::Instance()->Delete('cart', "id>0");
    }

    public function order($columns, $values) {
        return PdoM::Instance()->Insert('orders', $columns, $values);
    }
}
