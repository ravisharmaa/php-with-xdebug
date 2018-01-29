<?php
/**
 * Created by PhpStorm.
 * User: ravib
 * Date: 1/26/2018
 * Time: 12:02 PM
 */

class ProductCd extends ShopProduct
{
    public $playLength;

    public function __construct( string $title, string $producerMainName, string $producerFirstName, float $price, int $playLength )
    {
        parent::__construct( $title, $producerMainName, $producerFirstName, $price );
        $this->playLength = $playLength;
    }

    public function getPlayLength()
    {
        return $this->playLength;
    }

    public function getPrice(  ) {
        return $this->price;
    }
    public function getTitle()
    {
        return $this->title;
    }


    public function getSummaryLine()
    {
        $base = parent::getSummaryLine();
        $base .= "Play Length: {$this->playLength}";
        return $base;
    }

}