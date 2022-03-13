<?php

class AdminC extends Controller
{
    private CatalogM $catalog;

    public function __construct()
    {
        $this->catalog = new CatalogM();
    }

    public function index()
    {
        if (!isset($_SESSION['user'])) {
            $page = $this->Template('view/login.php');
        } else {
            $page = $this->Template('view/admin.php', array('goods' => $this->catalog->getCatalog()));
        }
        echo $page;
    }

    public function exit()
    {
        $profile = new ProfileC();
        $profile->exit();
    }
}