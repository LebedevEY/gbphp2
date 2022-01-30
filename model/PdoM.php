<?php

include_once "../config.php";

class PdoM {
    private static $instance;
    private PDO $db;

    public static function Instance() {
        if(self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct() {
        setlocale(LC_ALL, 'ru_RU.UTF8');
        $this->db = new PDO(DRIVER.':host='.SERVER.';dbname='.DB, LOGIN, PASSWORD);
        $this->db->exec('SET NAMES UTF8');
        $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }


    public function Select($query) {
        $q = $this->db->prepare($query);
        $q->execute();

        if ($q -> errorCode() != PDO::ERR_NONE) {
            $info = $q -> errorInfo();
            die($info[2]);
        }

        return $q->fetchAll();
    }

    public function Insert($table, $columns, $values) {
        $columns_str = implode(',', $columns);
        $values_str = implode(',', $values);
        $query = "INSERT INTO `$table` ($columns_str) VALUES ($values_str)";
        $q = $this->db->prepare($query);
        $q->execute();

        if ($q -> errorCode() != PDO::ERR_NONE) {
            $info = $q -> errorInfo();
            die($info[2]);
        }

        return $this->db->lastInsertId();
    }

    public function Update($table, $object, $where) {
        foreach ($object as $key => $value) {
            $values[] = "$key='$value'";
        }
        $values_str = implode(',', $values);
        $query = "UPDATE $table SET $values_str WHERE $where";
        $q = $this->db->prepare($query);
        $q->execute($object);

        if ($q -> errorCode() != PDO::ERR_NONE) {
            $info = $q -> errorInfo();
            die($info[2]);
        }

        return $q->rowCount();
    }

    public function Delete($table, $where) {
        $query = "DELETE FROM $table WHERE $where";
        $q = $this->db->prepare($query);
        $q->execute();

        if ($q -> errorCode() != PDO::ERR_NONE) {
            $info = $q -> errorInfo();
            die($info[2]);
        }

        return $q->rowCount();
    }
}

//function getAll ($connect, $table): array
//{
//    $sql = "select * from {$table}";
//    $res = mysqli_query($connect, $sql);
//    $result = [];
//    for ($i = 0; $i < mysqli_num_rows($res); $i++) {
//        $result[] = mysqli_fetch_assoc($res);
//    }
//
//    return $result;
//}
//
//function getGoods ($connect, $table, $start_point, $end_point)
//{
//    $sql = "select * from {$table} where id>{$start_point} and id<{$end_point}";
//    $res = mysqli_query($connect, $sql);
//    if (mysqli_num_rows($res) != 0) {
//        for ($i = 0; $i < mysqli_num_rows($res); $i++) {
//            $result[] = mysqli_fetch_assoc($res);
//        }
//        return $result;
//    }
//}
//
//function getOne($connect, $id, $table) {
//    $sql = sprintf("select * from {$table} where id=%d", (int)$id);
//    $res = mysqli_query($connect, $sql);
//    return mysqli_fetch_assoc($res);
//}
//
//function cartCounter ($connect, $id, $count) {
//    $id = (int)$id;
//    $sql = "UPDATE `cart` SET `count` = '%d' WHERE `good_id` = '%d'";
//    $res = sprintf($sql, mysqli_real_escape_string($connect, $count), $id);
//    return mysqli_query($connect, $res);
//}
//
//function getSum ($connect, $column, $count, $table) {
//    $sql = "SELECT SUM(`{$column}` * `{$count}`) FROM `{$table}`";
//    $res = mysqli_query($connect, $sql);
//    return mysqli_fetch_row($res);
//}