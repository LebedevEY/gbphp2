<?php

class CatalogC extends Controller {

    public function index() {
        $goods = new CatalogM();
        $start = 0;
        $end = 10;
        $catalog = $goods->getMore($start, $end);
        $page = $this->Template('view/catalog.php', array('catalog' => $catalog));
        echo $page;
    }

    public function getMore() {
        $goods = new CatalogM();
        $start = $_GET['start'];
        $end = $_GET['end'];
        $catalog = $goods->getMore($start, $end);
        foreach ($catalog as $item) {
            $page = $this->Template('templates/good_card.php', array('item' => $item));
            echo $page;
        }
    }
}
