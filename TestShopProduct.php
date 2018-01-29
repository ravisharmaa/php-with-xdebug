<?php

class TestShopProduct
{
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    public function __construct(
        string $title,
        string $producerMainName,
        string $producerFirstName,
        float $price
    )
    {
        $this->title = $title;
        $this->producerFirstName = $producerFirstName;
        $this->producerMainName = $producerMainName;
        $this->price = $price;
    }

    public function getProducer()
    {
        return  $this->producerMainName . $this->producerFirstName;
    }


}

class ShopProductWriterTest
{
    public function write(ShopProduct $shopProduct)
    {
        $str = "{ $shopProduct->title }: ".
                "{$shopProduct->getProducer()}"
               ."(".$shopProduct->price.")";

        print $str;
    }
}

class Wrong
{
    public function getValues(array $default= null)
    {
        $values = [0,1,9];
        //merge default params and the values
        $values = array_merge($values, $default);
        return $values;
    }
}

//$shopProduct = new ShopProduct('Edelman','ravi','sharma',"4.22");
//$shopProductWriter = new ShopProductWriter;
$wrong = new Wrong();
var_dump($wrong->getValues([1,2,2,5]));






