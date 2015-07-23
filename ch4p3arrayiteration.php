<?php
/**
 *
 * Created by PhpStorm.
 * User: Tim
 * Date: 6-6-2015
 * Time: 12:32
 */

include_once('index.php');
echo '<input id="chapter" type="hidden" value="4">';

echo '<h2>Chapter 4 - paragraph Array iterations</h2>';
echo '<h3>The Array Pointer</h3>';
echo 'Listing 4.5: Using the array pointer';
showcode (<<<'CODE'
$array = array('foo' => 'bar', 'baz', 'bat' => 2);
function displayArray(&$array) {
    reset($array);
    while (key($array) !== null) {
        echo key($array) . ": " . current($array) . "<br/>";
        next($array);
    };
}
displayArray($array);
CODE
);
showcode (<<<'CODE'
    $array = array('foo' => 'bar', 'baz', 'bat' => 2);
    reset($array);
    while (key($array) !== null) {
    echo key($array) . ": " . current($array) . "<br/>";
    next($array);
}
CODE
);

echo 'Listing 4.6: Moving pointer backwards';
showcode (<<<'CODE'
    $array = array(1, 2, 3);
    end($array);
    while (key($array) !== null) {
        echo key($array) . ": " . current($array) . "<br/>";
        prev($array);
    }
CODE
);
echo 'Listing 4.7: Modifying array elements by reference';
showcode (<<<'CODE'
$a = array(1, 2, 3);
foreach ($a as $k => &$v) {
    $v += 1;
}
var_dump($a); // $a will contain (2, 3, 4)
CODE
);
echo 'Listing 4.8: Beware when modifying array elements by reference';
showcode (<<<'CODE'
$a = array('zero', 'one', 'two');
foreach ($a as &$v) {
}
foreach ($a as $v) {
}
print_r($a);
CODE
);