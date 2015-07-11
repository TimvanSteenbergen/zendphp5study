<?php
/**
 *
 * Created by PhpStorm.
 * User: Tim
 * Date: 6-6-2015
 * Time: 12:32
 */

include_once('indexfooter.php');

showcode (<<<'CODE'
$a = array(1, 2, 3);
$b = array(1 => 2, 2 => 3, 0 => 1);
$c = array('a' => 1, 'b' => 2, 'c' => 3);
var_dump($a == $b); // True
var_dump($a === $b); // False
var_dump($a == $c); // False
var_dump($a === $c); // False
CODE
);

