<?php
require_once "PdoM.php";

 class CatalogM {
     public function getCatalog() {
         $query = "SELECT * FROM `goods` WHERE id>0 and id<10";
         return PdoM::Instance()->Select($query);
     }
 }