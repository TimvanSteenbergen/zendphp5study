<?php
/**
 *
 * Created by PhpStorm.
 * User: Tim
 * Date: 6-6-2015
 * Time: 12:32
 */
include_once('index.php');

echo '<h2>Array Basics</h2>';
showcode(<<<'CODE'
$a = array(10, 20, 30);print_r($a);
$a = array(a' => 10, 'b' => 20, 'cee' => 30);print_r($a);
$a = array(5 => 1, 3 => 2, 1 => 3,);print_r($a);
$a = array();print_r($a);
CODE
);
echo ' A second method of accessing arrays is by means of the array operator ([]):';
showcode(<<<'CODE'
$x[] = 10;
$x['aa'] = 11;
echo $x[0];
CODE
);
echo 'With PHP 5.4, a new short array syntax was introduced: a simple shorthand';
showcode(<<<'CODE'
$a = [10, 20, 30];print_r($a);
$a = ['a' => 10, 'b' => 20, 'cee' => 30];print_r($a);
$a = [5 => 1, 3 => 2, 1 => 3,];print_r($a);
$a = [];print_r($a);
CODE
);

echo 'When an element is added to an array without specifying a key, PHP
automatically assigns a numeric one that is equal to the greatest numeric key
already in existence in the array, plus one:';
showcode(<<<'CODE'
$a = array(2 => 5);
$a[] = 'a'; print_r($a); // This will have a key of 3
echo 'Note that this is true even if the array contains a mix of numerical and string keys:';
$a = array('4' => 5, 'a' => 'b');
$a[] = 44; print_r($a);// This will have a key of 5
CODE
);
echo '<h3>Array definitions</h3>';
showcode(<<<'CODE'
$c = [0,1,2,3,'a'=>4,'b'=>5,6=>6,4=>8,
    10=>'int10', '10'=>'string10singelquotes', "10"=>'string10doublequotes',
    '10.0'=>'string10.0', '10,0'=>'string10,0'];
var_dump($c);
CODE
);
echo '<h3>The language construct list</h3>';
showcode(<<<'CODE'
$b=['one', 'two', 'three'];
list($one,$two,$three)=$b;
echo "variable two is now: $two";

$two='';
$d = ['a' => 10, 'b' => 20, 'cee' => 30];
list($one,$three,$two)=$d;
echo "variable two is now: $two";

list(,,$two)=$a;
echo "variable two is now: $two";
CODE
);

showcode(<<<'CODE'
//union
echo "//Array-union with +:<br/>";
$union = $a + $b; echo '$union = $a + $b;<br/>';
var_dump($union);

//unset
$d = ['a'=>NULL,'b'=>2];
unset($d['b']);
var_dump($d);

CODE
);



