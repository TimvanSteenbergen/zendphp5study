<?php
/**
 *
 * Created by PhpStorm.
 * User: Tim
 * Date: 6-6-2015
 * Time: 12:32
 */

include_once('indexfooter.php');

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

echo 'Array flip';
showcode (<<<'CODE'
$a = array('a', 'b', 'c');
var_dump(array_flip($a));
CODE
);

echo 'Array reverse';
showcode (<<<'CODE'
$a = array('x' => 'a', 10 => 'b', 'c');
var_dump(array_reverse($a));
CODE
);



