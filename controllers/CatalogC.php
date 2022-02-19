<?php

class CatalogC extends Controller {

    private $goods;

    public function __construct() {
        $this->goods= new CatalogM();
    }

    public function index() {
        $goods = new CatalogM();
        $start = 0;
        $end = 10;
        $catalog = $goods->getMore($start, $end);
        $page = $this->Template('view/catalog.php', array('catalog' => $catalog));
        echo $page;
    }

    public function getMore() {
        $start = $_GET['start'];
        $end = $_GET['end'];
        $catalog = $this->goods->getMore($start, $end);
        foreach ($catalog as $item) {
            $page = $this->Template('templates/good_card.php', array('item' => $item));
            echo $page;
        }
    }
}
