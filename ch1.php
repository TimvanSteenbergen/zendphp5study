<?php
/**
 *
 * Created by PhpStorm.
 * User: Tim
 * Date: 6-6-2015
 * Time: 12:32
 */
include_once('generalIncludes.php');
echo '<input id="chapter" type="hidden" value="1">';

echo '<h2 id="syntax">Chapter 1 PHP basics - paragraph Syntax</h2>';
echo 'Nothing to fiddle with in this paragraph...';
echo '<h2 id="anatomy">Chapter 1 PHP basics - paragraph Anatomy of a PHP script</h2>';
echo 'Nothing to fiddle with in this paragraph...';
echo '<h2 id="datatypes">Chapter 1 PHP basics - paragraph Datatypes</h2>';
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
echo "<h3>Converting Between Data Types</h3>";
showcode(<<<'CODE'
$x = 10.88;                            echo (int) $x. "\n";
$x = "10.88";                          echo (int) $x. "\n";
$x = "10,88";                          echo (int) $x. "\n";
$x = "10,88";                          echo (float) $x. "\n";
$x = "10.88ssdf234234";                echo (float) $x. "\n";
$x = "10.88";                          echo (string) $x. "\n";
$x = "10.8,8";             var_dump((object)(float) $x). "\n";
CODE
);
echo "<h3>Float's precision issue</h3>";
showcode(<<<'CODE'
var_export(0.1 + 0.7); echo "\n";
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

echo '<h2 id="variables">Chapter 1 PHP basics - Variables</h2>';

echo '<h3>Type Casting</h3>';
echo 'Listing 1.2: Casting to an object';
showcode(<<<'CODE'
    $obj = (object) ["foo" => "bar", "baz" => "bat"];
    var_dump($obj);
CODE
);

echo 'Listing 1.3: Circumventing naming constraints';
showcode(<<<'CODE'
$name = '123'; // 123 as variable name would normally be invalid.
$$name = '456';// Again, you assign a value.
echo ${'123'}; // Finally, using curly braces you can output '456'
CODE
);

echo 'Listing 1.4: Using print_r';
showcode(<<<'CODE'
$array = array(
    'foo',
    'bar',
    'baz',
);
print_r($array);
$obj = new StdClass();
$obj->foo = "bar";
$obj->baz = "bat";
print_r($obj);
CODE
);

echo 'using var_dump';
showcode(<<<'CODE'
var_dump(null, false, "", 1, 2.3,
    array("foo", "bar", "baz" => 1.23, yes, true)
);
CODE
);
showcode(<<<'CODE'
$array = array(
    "foo" => "bar",
    "baz" => "bat"
);
var_export($array);
$obj = new StdClass();
$obj->foo = "bar";
$obj->baz = "bat";
var_export($obj);
CODE
);
echo 'Determining If a Variable Exists';
showcode(<<<'CODE'
echo "x is ", (!isset($x)) ? "not" : "", " set.\n";
$x = 1;
echo (isset($x)) ? "now \$x is $x.\n" : "\$x is still not set";
CODE
);

echo 'Determining If a Variable Empty';
showcode(<<<'CODE'
$variable = "22";
echo ((empty($variable))?"is empty":"is not empty");
CODE
);

echo '<h2 id="constants">Chapter 1 PHP basics - Constants</h2>';
echo 'Listing 1.6: defining constants';
showcode(<<<'CODE'
define('EMAIL', 'davey@php.net'); // Valid name
echo EMAIL; // Displays 'davey@php.net'
define('USE_XML', true);
if (USE_XML) { } // Evaluates to true
define('1CONSTANT', 'some value'); // Invalid name
echo "\n\n\n\n From PHP 5.3 you can also use the const keyword to define constants: \n";
const EMAIL2 = 'davey@php.net';
echo EMAIL2;
echo "\n\n Also, from PHP 5.6 you can use constant scalar expressions to define the value:\n";
const DOMAIN = "php.net";
const EMAIL3 = "davey@" . DOMAIN;
echo EMAIL3;
CODE
);

echo '<h2 id="operators">Chapter 1 PHP basics - Operators</h2>';
echo 'Listing 1.7: Incrementing/decrementing operators';
showcode(<<<'CODE'
$a = 1;    // Assign the integer 1 to $a
echo $a++; // Outputs 1, $a is now equal to 2
echo ++$a; // Outputs 3, $a is now equal to 3
echo --$a; // Outputs 2, $a is now equal to 2
echo $a--; // Outputs 2, $a is now equal to 1

echo "\n\nAnd casting string 'Test' to an integer and ++it gives: ";
$a = (int) 'Test'; // $a == 0
echo ++$a;
CODE
);
echo 'Listing 1.8: Concatenate operators';
showcode(<<<'CODE'
$string = "foo" . "bar";//$string now contains the value 'foobar'
$string2 = "baz";       //$string2 now contains the value 'baz'

//This is shorthand for $string = $string . $string2
$string .= $string2;    //Concatenating them gets 'foobarbaz'.

echo $string;           //Displays 'foobarbaz'
CODE
);
echo 'Listing 1.9: Bitwise multiplication';
showcode(<<<'CODE'
$x = 1;
echo $x << 1, "\n"; // Outputs 2
echo $x << 2, "\n"; // Outputs 4
$x = 8;
echo $x >> 1, "\n"; // Outputs 4
echo $x >> 2, "\n"; // Outputs 2

$x = 1;
echo $x << 32, "\n";
echo $x * pow (2, 32);
CODE
);
echo '<h2 id="controlstructures">Chapter 1 PHP basics - Control Structures</h2>';
echo '<h2 id="namespaces">Chapter 1 PHP basics - Namespaces</h2>';
