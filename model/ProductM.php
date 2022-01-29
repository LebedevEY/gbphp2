<?php

include_once "PdoM.php";

class ProductM {
    public function getGood($id) {
        $query = "SELECT * FROM goods WHERE id=$id";
        return PdoM::Instance()->Select($query);
    }
}