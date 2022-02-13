<?php

class GoodC extends Controller {

    public function index() {
        $product = new ProductM();
        $id = $_GET['id'];
        $good = $product->getGood($id);
        $page = $this->Template('view/product.php', array('good' => $good));
        echo $page;
    }
}