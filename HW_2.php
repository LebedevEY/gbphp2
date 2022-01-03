<?php
abstract class Goods {
    abstract function getPrice();
    abstract function getSum();
    abstract function getProfit();
}

class DigitalGoods extends Goods {
    const PRICE = 100;
    private $margin;
    private $count;
    function __construct($margin) {
        $this->margin = $margin;
    }
    public function getPrice()
    {
        return self::PRICE;
    }

    public function setCount($count)
    {
        $this->count = $count;
    }

    public function getSum()
    {
        return (self::PRICE + $this->margin) * $this->count;
    }

    public function getProfit()
    {
        return $this->margin * $this->count;
    }
}

$digitGoods = new DigitalGoods(10);
$digitGoods->setCount(10);
echo $digitGoods->getPrice() . "<br>";
echo $digitGoods->getSum() . "<br>";
echo $digitGoods->getProfit() . "<br>";
echo "<hr>";

class PieceGoods extends Goods {
    private $price;
    private $margin;
    private $count;
    function __construct ($margin) {
        $this->margin = $margin;
        $this->price = DigitalGoods::PRICE * 2;
    }
    public function setCount($count)
    {
        $this->count = $count;
    }
    public function getPrice()
    {
        return $this->price;
    }

    public function getSum()
    {
        return ($this->price + $this->margin) * $this->count;
    }
    public function getProfit()
    {
        return $this->margin * $this->count;
    }

}

$pieceGoods = new PieceGoods(15);
$pieceGoods->setCount(5);
echo $pieceGoods->getPrice() . "<br>";
echo $pieceGoods->getSum() . "<br>";
echo $pieceGoods->getProfit() . "<br>";
echo "<hr>";

class WeightGoods extends Goods {
    private $price;
    private $weight;
    private $margin;
    function __construct($price, $margin) {
        $this->price = $price;
        $this->margin = $margin;
    }
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
    public function getPrice()
    {
        return $this->price;
    }

    public function getSum()
    {
        return $this->weight * $this->price + $this->weight * $this->margin;
    }

    public function getProfit()
    {
        return $this->weight * $this->margin;
    }
}

$weightGoods = new WeightGoods(10, 1);
$weightGoods->setWeight(50);
echo $weightGoods->getPrice() . "<br>";
echo $weightGoods->getSum() . "<br>";
echo $weightGoods->getProfit() . "<br>";