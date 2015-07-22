<?php
/**
 *
 * Created by PhpStorm.
 * User: Tim
 * Date: 6-6-2015
 * Time: 12:32
 */
include_once('index.php');

echo '<h2>Chapter 1 Variables</h2>';

echo '<h3>Type Casting</h3>';
echo 'Listing 1.2: Casting to an object';
showcode(<<<'CODE'
$obj = (object) ["foo" => "bar", "baz" => "bat"];
var_dump($obj);
CODE
);
showcode(<<<'CODE'

CODE
);
