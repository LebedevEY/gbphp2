<?php
print_r('<a href="hw_1.php">ссылка</a>');

class PriceTag
{
    public $price;
    public $title;
    public $description;
    function __construct($price, $title, $description){
        $this->price = $price;
        $this->title = $title;
        $this->description = $description;
    }

    public function view(){
        echo "<h1>$this->title</h1><br><p>$this->description</p><br><h2>$this->price</h2>";
    }

}

$test = new PriceTag(100, 'some_product', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
$test->view();

class PriceTagDiscount extends PriceTag
{
    public $discount;
    public function __construct($price, $title, $description, $discount){
        parent::__construct($price, $title, $description);
        $this->discount = $discount;
        $this->getPrice();
    }

    public function getPrice(){
        $this->price = $this->price - ($this->price / 100 * $this->discount);
    }

}

$test2 = new PriceTagDiscount(250, 'awesome_product', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 20);
$test2->view();
