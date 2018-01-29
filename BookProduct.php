<?php
/**
 * Created by PhpStorm.
 * User: ravib
 * Date: 1/26/2018
 * Time: 12:07 PM
 */

class BookProduct extends ShopProduct
{
    public $numPages;

    public function __construct( string $title, string $producerMainName, string $producerFirstName, float $price, int $numPages ) {
        parent::__construct( $title, $producerMainName, $producerFirstName, $price );
        $this->numPages = $numPages;
    }

    public function getNumberOfPages()
    {
        return $this->numPages;
    }

    public function getSummaryLine()
    {
        $base  =  parent::getSummaryLine();
        $base .= "Page Count: {$this->numPages}";
        return $base;
    }

}