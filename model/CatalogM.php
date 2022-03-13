<?php

require_once 'PdoM.php';

 class CatalogM {
     //Обращение к БД может привести к ошибкам, на пример если БД недоступна. Без обработки ошибок PDO была бы "слепая вера"
     public function getCatalog() {
         $query = "SELECT * FROM `goods` WHERE id>0 AND id<10";
         return PdoM::Instance()->Select($query);
     }

     public function getIndexCatalog() {
         $query = "SELECT * FROM `goods` WHERE id<7";
         return PdoM::Instance()->Select($query);
     }

     public function getMore($start, $end) {
         $query = "SELECT * FROM `goods` WHERE id>$start AND id<$end";
         return PdoM::Instance()->Select($query);
     }
 }