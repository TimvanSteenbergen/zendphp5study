<?php
/**
 *
 * Created by PhpStorm.
 * User: Tim
 * Date: 6-6-2015
 * Time: 12:32
 */
include_once('index.php');

showcode(<<<'CODE'
$x[] = 10;
$x['aa'] = 11;
echo $x[0];
CODE
);
showcode(<<<'CODE'
$a = [10, 20, 30];print_r($a);
$a = ['a' => 10, 'b' => 20, 'cee' => 30];print_r($a);
$a = [5 => 1, 3 => 2, 1 => 3,];print_r($a);
$a = [];print_r($a);
CODE
);;
showcode(<<<'CODE'
$a = array(2 => 5);
$a[] = 'a'; print_r($a); // This will have a key of 3
echo 'Note that this is true even if the array contains a mix of numerical and string keys:'
$a = array('4' => 5, 'a' => 'b');
$a[] = 44; print_r($a);// This will have a key of 5
CODE
);
showcode(<<<'CODE'
CODE
);

//array definitions
echo '//array definitions';
$c = [0,1,2,3,'a'=>4,'b'=>5,6=>6,4=>8,
    10=>'int10', '10'=>'string10singelquotes', "10"=>'string10doublequotes',
    '10.0'=>'string10.0', '10,0'=>'string10,0'];
echo <<<'DO'
$c = [0,1,2,3,'a'=>4,'b'=>5,6=>6,4=>8,
    10=>'int10', '10'=>'string10singelquotes', "10"=>'string10doublequotes', '10.0'=>'string10.0', '10,0'=>'string10,0'];
DO;
var_dump($c);

//list
echo '//The language construct list<br/>';
list($one,$two,$three)=$b;
echo 'list($one,$two,$three)=$b;<br/>';
echo "variable two is now: $two<br/>";

list($one,$three,$two)=$a;
echo 'list($one,$three,$two)=$a;<br/>';
echo "variable two is now: $two<br/>";

list(,,$two)=$a;
echo 'list(,,$two)=$a;<br/>';
echo "variable two is now: $two<br/>";

//union
echo "//Array-union with +:<br/>";
$union = $a + $b; echo '$union = $a + $b;<br/>';
var_dump($union);

//unset
$d = ['a'=>NULL,'b'=>2];
unset($d['b']);
var_dump($d);

