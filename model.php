<?php

include_once "config.php";

function getAll ($connect, $table): array
{
    $sql = "select * from {$table}";
    $res = mysqli_query($connect, $sql);
    $result = [];
    for ($i = 0; $i < mysqli_num_rows($res); $i++) {
        $result[] = mysqli_fetch_assoc($res);
    }

    return $result;
}

function getGoods ($connect, $table, $point): array
{
    $sql = "select * from {$table} limit {$point}";
    $res = mysqli_query($connect, $sql);
    $result = [];
    for ($i = 0; $i < mysqli_num_rows($res); $i++) {
        $result[] = mysqli_fetch_assoc($res);
    }

    return $result;
}

function getSix ($connect, $table): array
{
    $sql = "select * from {$table} limit 6";
    $res = mysqli_query($connect, $sql);
    $result = [];
    for ($i = 0; $i < mysqli_num_rows($res); $i++) {
        $result[] = mysqli_fetch_assoc($res);
    }

    return $result;
}

function getOne($connect, $id, $table) {
    $sql = sprintf("select * from {$table} where id=%d", (int)$id);
    $res = mysqli_query($connect, $sql);
    return mysqli_fetch_assoc($res);
}

function cartCounter ($connect, $id, $count) {
    $id = (int)$id;
    $sql = "UPDATE `cart` SET `count` = '%d' WHERE `good_id` = '%d'";
    $res = sprintf($sql, mysqli_real_escape_string($connect, $count), $id);
    return mysqli_query($connect, $res);
}

function getSum ($connect, $column, $count, $table) {
    $sql = "SELECT SUM(`{$column}` * `{$count}`) FROM `{$table}`";
    $res = mysqli_query($connect, $sql);
    return mysqli_fetch_row($res);
}