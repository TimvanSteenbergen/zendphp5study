<?php
/**
 *
 * Created by PhpStorm.
 * User: Tim
 * Date: 6-6-2015
 * Time: 12:32
 */

include_once('indexfooter.html');

echo 'Listing 4.4: Counting array elements';
showcode (<<<'CODE'
$a = array(1, 2, 4);
$b = array();
$c = 10;
echo count($a); // Outputs 3
echo count($b); // Outputs 0
echo count($c); // Outputs 1
CODE
);

