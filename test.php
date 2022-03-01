<?php

require_once "autoloader.php";
use PHPUnit\Framework\TestCase;

class test extends TestCase {
    public function testCatalog() {
        $model = new CatalogM();
        $catalog = $model->getCatalog();
        $this->assertSame(true, is_array($catalog));
    }
}
