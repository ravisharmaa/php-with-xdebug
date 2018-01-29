<?php
/*
 * Problems of not inheriting
 */
include_once('./ProductCd.php');
include_once('./BookProduct.php');
class ShopProduct
{
    private $title;
    public $producerMainName;
    public $producerFirstName;
    protected $price;

    public $discount = 0;


    public function __construct(
        string $title,
        string $producerMainName,
        string $producerFirstName,
        float $price)
    {
        $this->price = $price;
        $this->title = $title;
        $this->producerMainName = $producerMainName;
        $this->producerFirstName = $producerFirstName;
        $this->price = $price;
    }
    public function getProducer()
    {
        return $this->producerFirstName . " ". $this->producerMainName;
    }

    public function getPrice()
    {
        return  ($this->price - $this->discount);
    }

    public function setDiscount(int $num )
    {
        $this->discount = $num;
    }

    public function getSummaryLine()
    {
        $base  = "{$this->title} : ({$this->producerMainName}";
        $base .= "{$this->producerFirstName})";
        return $base;
    }

}

class ShopProductWriter
{
    private $products = [];

    public function addProduct (ShopProduct $shopProduct)
    {
        $this->products = $shopProduct;
    }

    public function write()
    {
        $str = "";
        foreach ( $this->products as $shopProduct){
            $str .= "{$shopProduct->title}:";
            $str .=  "{$shopProduct->getProducer()}";
            $str  .= "{$shopProduct->getPrice()}";

        }
        print $str;
    }
}



$cdProduct = new ProductCd('Hazir2','Hariharan','Almelu','200','50');
var_dump($cdProduct);
print "artist: {$cdProduct->getProducer()}";
print "product price: {$cdProduct->getPrice()}";
print "product title: {$cdProduct->getTitle()}";
//$shopProductWriter = new ShopProductWriter();
//$shopProductWriter->write($cdProduct);
