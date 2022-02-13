<?php
session_start();

abstract class Controller {

    public function request($action) {
        return $this->$action();
    }

    protected function Template($fileName, $vars = array())
    {
        foreach ($vars as $k => $v)
        {
            $$k = $v;
        }

        ob_start();
        include "$fileName";
        return ob_get_clean();
    }
}