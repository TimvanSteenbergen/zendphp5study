<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 6-6-2015
 * Time: 12:32
 */
include_once('indexfooter.html');

showcode (<<<'CODE'
$a = array('zero', 'one', 'two');
echo '<br/>Running foreach by reference<br/>';
foreach ($a as &$v) {
    echo $v . "<br/>";
}
echo '<br/>Running foreach by value<br/>';
foreach ($a as $v) {
    echo $v . "<br/>";
}
print_r($a);
CODE
);
