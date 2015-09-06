<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 31-8-2015
 * Time: 21:23
 */
class A
{
    private $value = 10;

    function __construct($var=30)
    {
        $this->value = $var;
    }
}
$obj = new A(20);
echo $obj->value;
new SimpleXMLElement()