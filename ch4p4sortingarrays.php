<?php
/**
 *
 * Created by PhpStorm.
 * User: Tim
 * Date: 6-6-2015
 * Time: 12:32
 */

include_once('generalIncludes.php');
echo '<input id="chapter" type="hidden" value="4">';

echo '<h2>Chapter 4 - paragraph Sorting Arrays</h2>';
echo 'sort()';
showcode (<<<'CODE'
$array = array('a' => 'foo', 'b' => 'bar', 'c' => 'baz');
sort($array);
var_dump($array);
CODE
);

echo 'asort()';
showcode (<<<'CODE'
$array = array('a' => 'foo', 'b' => 'bar', 'c' => 'baz');
asort($array);
var_dump($array);
CODE
);
echo 'natsort()';
showcode (<<<'CODE'
$array = array('10t', '2t', '3t');
natsort($array);
var_dump($array);
CODE
);
echo 'ksort()';
showcode (<<<'CODE'
$a = array('a' => 30, 'b' => 10, 'c' => 22);
ksort($a);
var_dump($a);
CODE
);
echo'Listing 4.11: User-defined comparison';
showcode (<<<'CODE'
function myCmp($left, $right) {
// Sort according to the length of the value.
// If the length is the same, sort normally
    $diff = strlen($left) - strlen($right);
    if (!$diff) {
        return strcmp($left, $right);
    }
    return $diff;
}
$a = array(
    'three',
    '2two',
    'one',
    'two'
);
usort($a, 'myCmp');
var_dump($a);
CODE
);

echo'Listing 4.12: Reversing sort order';
showcode (<<<'CODE'
function myCmp($left, $right) {
// Reverse-sort according to the length of the value.
// If the length is the same, sort normally
    $diff = strlen($right) - strlen($left);
    if (!$diff) {
        return strcmp($right, $left);
    }
    return $diff;
}
CODE
);