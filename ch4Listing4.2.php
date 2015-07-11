<?php
/**
 *
 * Created by PhpStorm.
 * User: Tim
 * Date: 6-6-2015
 * Time: 12:32
 */
$a = ['a'=>1,2,3];echo '$a = [1,2,3];';
var_dump($a);

$b = ['a'=>1, 'b', 'c'];
$out = <<<'EOD'
$b = ['a'=>1, 'b', 'c'];
EOD;
echo $out;
var_dump($b);

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

include_once('indexfooter.php');