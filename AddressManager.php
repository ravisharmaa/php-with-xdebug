<?php
class AddressManager
{
    private $address = ["192.168.1.1","10.1.1.169"];

    public function outputAddress($resolve)
    {
        foreach ($this->address as $address){
            //print $address;
            //$resolve = preg_match("/^(false|no|off)$/i", $resolve);

            if(is_bool($resolve)){
                echo "(".gethostbyaddr($address). ")";
            }
            echo "\n";
        }
    }
}

$settings = simplexml_load_file('resolver.xml');
$settings->resolvedomains;
$manager = new AddressManager();
$manager->outputAddress((string)$settings->resolvedomains);
