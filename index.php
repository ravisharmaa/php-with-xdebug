<?php

class ShopProduct
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

class ShopProductWriter
{
    public function write(ShopProduct $shopProduct)
    {
        $str = "{ $shopProduct->title }: ".
                "{$shopProduct->getProducer()}"
               ."(".$shopProduct->price.")";

        print $str;
    }
}

/*class Wrong
{

}*/

$shopProduct = new ShopProduct('Edelman','ravi','sharma',[]);
$shopProductWriter = new ShopProductWriter;






