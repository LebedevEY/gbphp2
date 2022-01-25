<?php

include_once "PdoM.php";

class CartM {
    public function addGood($id) {
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
            array_push($values, "'1'", "'guest'");
            return PdoM::Instance()->Insert('cart', $columns, $values);
        }
    }

    public function getCart() {
        $query = "SELECT * FROM `cart`";
        return PdoM::Instance()->Select($query);
    }
}
