<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 6-6-2015
 * Time: 12:32
 */
$a = array('zero', 'one', 'two');
echo <<<'A'
$a = array('zero', 'one', 'two')
A;

echo '<br/>Running foreach by reference<br/>';
foreach ($a as &$v) {
    echo $v . "\n";
}
echo '<br/>Running foreach by value<br/>';
foreach ($a as $v) {
    echo $v . "\n";
}
print_r($a);
include_once('indexfooter.html');
