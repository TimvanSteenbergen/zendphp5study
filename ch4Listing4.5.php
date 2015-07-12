<?php
/**
 *
 * Created by PhpStorm.
 * User: Tim
 * Date: 6-6-2015
 * Time: 12:32
 */

include_once('index.php');

echo '<h2>The Array Pointer</h2>';
echo 'Listing 4.5: Using the array pointer';
showcode (<<<'CODE'
    $array = array('foo' => 'bar', 'baz', 'bat' => 2);
    function displayArray(&$array) {
        reset($array);
        while (key($array) !== null) {
        echo key($array) . ": " . current($array) . "<br/>";
        next($array);
    };
    displayArray($array);
}
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
