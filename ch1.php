<?php
/**
 *
 * Created by PhpStorm.
 * User: Tim
 * Date: 6-6-2015
 * Time: 12:32
 */
include_once('index.php');
echo '<input id="chapter" type="hidden" value="1">';

echo '<h2 id="syntax">Chapter 1 - paragraph Syntax</h2>';
echo '<h2 id="anatomy">Chapter 1 - paragraph Anatomy of a PHP script</h2>';
echo '<h2 id="datatypes">Chapter 1 - paragraph Datatypes</h2>';
//echo 'Numeric Values: Decimal, Octal, Hexadecimal and Binary. And floats with decimal and exponentials';
//showcode(<<<'CODE'
//$a = 10 + 010;
//$a = 0.10 + 0x10;
//$a = 10 + 0b10;
//$b = 2E3 + 0b10;
//$a = 1.2E2 + 0b10;
//$a = 10 + 0b10;
//CODE
//, null, true);
showcode(<<<'CODE'
$a = 10 + 010;                             echo $a . "\n";
$a = 0.10 + 0x10;                          echo $a . "\n";
$a = 10 + 0b10;                            echo $a . "\n";
$a = 2E3 + 0b10;                           echo $a . "\n";
$a = 1.2E2 + 0b10;                         echo $a . "\n";
$a = 10 + 0b10;                            echo $a . "\n";
CODE
);
echo 'Converting Between Data Types';
showcode(<<<'CODE'
$x = 10.88;                            echo (int) $x. "\n";
$x = "10.88";                          echo (int) $x. "\n";
$x = "10,88";                          echo (int) $x. "\n";
$x = "10,88";                          echo (float) $x. "\n";
env(
$x = "10.88ssdf234234";                echo (float) $x. "\n";
$x = "10.88";                          echo (string) $x. "\n";
$x = "10.8,8";             var_dump((object)(float) $x). "\n";
CODE
);
showcode(<<<'CODE'
echo (int) ((0.1 + 0.7) * 10);
CODE
);
showcode(<<<'CODE'
$i = 2;
echo log10($i);
CODE
);
showcode(<<<'CODE'
$i = 2;
echo (log10($i)+1). "\n";

echo 40 -( log10($i)+1 +strlen("@telfort.nl") ). "\n";
echo (log10($i)+1). "\n";
echo strlen(sprintf('%d',$i));
CODE
);

echo '<h2 id="variables">Chapter 1 Variables</h2>';

echo '<h3>Type Casting</h3>';
echo 'Listing 1.2: Casting to an object';
showcode(<<<'CODE'
$obj = (object) ["foo" => "bar", "baz" => "bat"];
var_dump($obj);
CODE
);
echo '<h2 id="constants">Chapter 1 Constants</h2>';
echo '<h2 id="operators">Chapter 1 Operators</h2>';
echo '<h2 id="controlstructures">Chapter 1 Control Structures</h2>';
echo '<h2 id="namespaces">Chapter 1 Namespaces</h2>';
