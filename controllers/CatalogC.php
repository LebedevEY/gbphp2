<?php

class CatalogC extends Controller {

    public function index() {
        $goods = new CatalogM();
        $start = (isset($_POST['start_point'])) ? $_POST['start_point'] : 0;
        $end = (isset($_POST['end_point'])) ? $_POST['end_point'] : 10;
        $catalog = $goods->getMore($start, $end);
        $page = $this->Template('view/catalog.php', array('catalog' => $catalog));
        echo $page;
    }
}
