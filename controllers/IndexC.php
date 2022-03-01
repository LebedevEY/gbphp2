<?php


class IndexC extends Controller {

    public function index() {
        $goods = new CatalogM();
        $catalog = $goods->getIndexCatalog();
        $page = $this->Template('view/index.php', array('catalog' => $catalog));
        echo $page;
    }
}