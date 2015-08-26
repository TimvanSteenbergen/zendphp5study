<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 23-8-2015
 * Time: 11:50
 */

class A {
    const   WORD = "hallo";
    static $word = "hello";
     function hello() {
        echo get_called_class();
         print $this->WORD;
//         print static::$word;
     }
}
class B extends A {
    const   WORD = "tot ziens";
    static $word = "bye";
}
B::hello();