<?php
print_r('<a href="hw_1.php">ссылка</a>');

class PriceTag
{
    private $price;
    private $title;
    private $description;
    function __construct($price, $title, $description){
        $this->price = $price;
        $this->title = $title;
        $this->description = $description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function view(){
        echo "<h1>$this->title</h1>" .
             "<p>$this->description</p>".
             "<h2>$this->price</h2>";
    }

}

$test = new PriceTag(100, 'some_product', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
$test->view();
echo "<hr>";

class PriceTagDiscount extends PriceTag
{
    private $discount;
    private $price;

    public function __construct($price, $title, $description, $discount){
        parent::__construct($price, $title, $description);
        $this->discount = $discount;
        $this->getDiscount();
    }

    public function getDiscount(){
        $this->price = parent::getPrice() - (parent::getPrice() / 100 * $this->discount);
    }
    public function view(){
        echo "<h1>" . parent::getTitle() . "</h1>" .
             "<p>". parent::getDescription() ."</p>" .
             "<h2>$this->price</h2>";
    }

}

$test2 = new PriceTagDiscount(250, 'awesome_product', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 20);
$test2->view();
