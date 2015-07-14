<?php
/**
 *
 * Created by PhpStorm.
 * User: Tim
 * Date: 6-6-2015
 * Time: 12:32
 */

include_once('index.php');

echo '<h2>Array operations</h2>';
echo 'Listing 4.3: Comparing arrays';
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
