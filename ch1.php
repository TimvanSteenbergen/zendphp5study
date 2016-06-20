<?php
/**
 *
 * Created by PhpStorm.
 * User: Tim
 * Date: 6-6-2015
 * Time: 12:32
 */
include_once('generalIncludes.php');
echo '';

echo '<input id="chapter" type="hidden" value="1">';

echo '<h2>Chapter 1 PHP basics</h2>';

echo '<h3 id="syntax">Syntax</h3>';
echo 'Nothing to fiddle with in this paragraph...';
echo '<textarea id="Ch1p1ex1"></textarea>einde textarea</br>';


echo '<h3 id="anatomy">Anatomy of a PHP script</h3>';
echo 'Nothing to fiddle with in this paragraph...';


echo '<h3 id="datatypes">Data types</h3>';
showcode(<<<'CODE'
$a = 10 + 010;                             echo $a . "\n";
$a = 0.10 + 0x10;                          echo $a . "\n";
$a = 10 + 0b10;                            echo $a . "\n";
$a = 2E3 + 0b10;                           echo $a . "\n";
$a = 1.2E2 + 0b10;                         echo $a . "\n";
$a = 10 + 0b10;                            echo $a . "\n";
		
CODE
);

echo "<p>Converting Between Data Types</p>";
showcode(<<<'CODE'
$x = 10.88;                            echo (int) $x. "\n";
$x = "10.88";                          echo (int) $x. "\n";
$x = "10,88";                          echo (int) $x. "\n";
$x = "10,88";                          echo (float) $x. "\n";
$x = "10.88ssdf234234";                echo (float) $x. "\n";
$x = "10.88";                          echo (string) $x. "\n";

CODE
);

echo "<p>Float's precision issue</p>";
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

echo "<p>Sandbox</p>";
showcode(<<<'CODE'
// Try it yourself...

CODE
);


echo '<h3 id="variables">Variables</h3>';

echo '<h4>Type Casting</h4>';
echo "Type has lots of unexpected (and incorrect) results, so we better get used to that." . PHP_EOL;
echo '<p>Listing 1.2: Casting to an object</p>';
showcode(<<<'CODE'
//$obj = (object) ["foo" => "bar", "baz" => "bat"];
//var_dump($obj);

// Need to fix, var_dump generates an error!
		
CODE
);
echo '<p>Casting to a boolean: any inputvalue other then 0, "0", "", or NULL is false</p>';
showcode(<<<'CODE'
//var_dump ((boolean)-1);
//var_dump ((boolean)1);
//var_dump ((boolean)5.1);
//var_dump ((boolean)"-1sadfasdfsadf");
//var_dump ((boolean)"0");
//var_dump ((boolean)"");
//var_dump ((boolean)0);
//var_dump ((boolean)NULL);
		
// Need to fix, var_dump generates an error!
		
CODE
);
echo "Expressions cast each value to the most important variabletype present." . PHP_EOL;

echo '<p>Arrayvalues getting casted to an integer</p>';
showcode(<<<'CODE'
//var_dump(in_array('yes', ['No', 0, 'yeah']);

// Need to fix, var_dump generates an error!
		
CODE
);
echo '<p>Arraykeys getting casted to a boolean</p>';
showcode(<<<'CODE'
$array = array (0 => '1', true => '1', '1' => 4);
echo count ($array);
		
CODE
);

echo '<p>Listing 1.3: Circumventing naming constraints</p>';
showcode(<<<'CODE'
$name = '123'; // 123 as variable name would normally be invalid.
$$name = '456';// Again, you assign a value.
echo ${'123'}; // Finally, using curly braces you can output '456'
		
CODE
);

echo '<p>Listing 1.4: Using print_r</p>';
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

echo '<p>Using var_dump</p>';
showcode(<<<'CODE'
//var_dump(null, false, "", 1, 2.3,
//    array("foo", "bar", "baz" => 1.23, 'yes', true)
//);

// Need to fix, var_dump generates an error!
		
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

echo '<p>Determining If a Variable Exists</p>';
showcode(<<<'CODE'
echo "x is ", (!isset($x)) ? "not" : "", " set.\n";
$x = 1;
echo (isset($x)) ? "now \$x is $x.\n" : "\$x is still not set";
CODE
);

echo '<p>Determining If a Variable Empty</p>';
showcode(<<<'CODE'
$variable = "22";
echo ((empty($variable))?"is empty":"is not empty");
CODE
);

echo "<p>Sandbox</p>";
showcode(<<<'CODE'
// Try it yourself...

CODE
);


echo '<h3 id="constants">Constants</h3>';

echo '<p>Listing 1.6: defining constants</p>';
showcode(<<<'CODE'
define('EMAIL', 'davey@php.net'); // Valid name
echo EMAIL; // Displays 'davey@php.net'
		
define('USE_XML', true);
if (USE_XML) { } // Evaluates to true
		
define('1CONSTANT', 'some value'); // Invalid name
echo "\n\nFrom PHP 5.3 you can also use the const keyword to define constants: \n";

const EMAIL2 = 'davey@php.net';
echo EMAIL2;

echo "\n\nAlso, from PHP 5.6 you can use constant scalar expressions to define the value:\n";
const DOMAIN = "php.net";
const EMAIL3 = "davey@" . DOMAIN;
echo EMAIL3;
		
CODE
);

echo "<p>Sandbox</p>";
showcode(<<<'CODE'
// Try it yourself...

CODE
);


echo '<h3 id="operators">Operators</h3>';

echo '<p>Listing 1.7: Incrementing/decrementing operators</p>';
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

echo '<p>Listing 1.8: Concatenate operators</p>';
showcode(<<<'CODE'
$string = "foo" . "bar";//$string now contains the value 'foobar'
$string2 = "baz";       //$string2 now contains the value 'baz'

//This is shorthand for $string = $string . $string2
$string .= $string2;    //Concatenating them gets 'foobarbaz'.

echo $string;           //Displays 'foobarbaz'
		
CODE
);

echo '<p>Listing 1.9: Bitwise multiplication</p>';
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

echo '<p>The bitwise operators: ~ & | and ^</p>';
showcode(<<<'CODE'
echo "~a, a&b, a|b, a^b\n";
echobitwise(1,0);    //001, 000
echobitwise(-1,1);   //
echobitwise(3,4);    //011, 100
echobitwise(100,111);
echobitwise(111,111);
function echobitwise($a, $b){
  echo ~$a, ",", $a & $b, ",", $a | $b, ",", $a ^ $b, "\n";
}
		
CODE
);
echo '<p>Assignment operators</p>';
showcode(<<<'CODE'
$var= 'value'; echo $var,"\n";// string 'value'
$var= 1;       echo $var,"\n";// integer value 1
$var+= 3;      echo $var,"\n";// integer 4
$var++;        echo $var,"\n";// integer 5
$var.='1';     echo $var,"\n";// string 51
		
CODE
);

echo '<p>Referencing variables, Assign by reference</p>';
showcode(<<<'CODE'
$a = 10;  $b = 10;
$va = $a; $vb = &$b; // by reference
$va = 20; $vb = 30;
echo "\$a=$a and \$b=$b because vb is assigned by reference";
		
CODE
);

echo '<p>Comparison operators</p>';
showcode(<<<'CODE'
echo (int) ("ABC" > "ABD") . "\n";
echo (int) ('apple' > 'Apple');
		
CODE
);

echo '<p>Binary operators AND OR XOR (logical operators)</p>';
showcode(<<<'CODE'
echo ((true &&  false)?"T":"F") . "\n";
echo ((true AND false)?"T":"F") . "\n";
echo ((true ||  false)?"T":"F") . "\n";
echo ((true OR  false)?"T":"F") . "\n";
echo ((true XOR false)?"T":"F") . "\n";
echo ((1&1  &&  1|1)?"T":"F") . "\n"; //Both bitwise and binary's
echo ((1&1  &&  1^1)?"T":"F") . "\n"; //Both bitwise and binary's
echo ((1&1  ||  1|1)?"T":"F") . "\n"; //Both bitwise and binary's
		
CODE
);

echo '<p>Other operators</p>';
showcode(<<<'CODE'
$x = @fopen("/tmp/foo"); // @ supresses errormessages
echo `ls -l`;  // ` runs operating system commands
		
CODE
);

echo '<p>Binary operators &&, AND, ||, OR, XOR. (Operator precedence and Associativity)</p>';
showcode(<<<'CODE'
echo (int)((1&1||1^1+1) . '0')*2/5 + -2;       echo "\n";
echo (int)(0 &&  1 ? 23 : 45);                 echo "\n";
echo (int)(0 AND 1 ? 23 : 45);                 echo "\n";
echo 'Preference: && || then ? : then AND OR'; echo "\n";
echo 'hello ' . 1 + 2 . '34';                  echo "\n";
echo 'Concate-ops precede arithmetic ops';     echo "\n";
		
CODE
);

echo "<p>Sandbox</p>";
showcode(<<<'CODE'
// Try it yourself...

CODE
);


echo '<h3 id="controlstructures">Control Structures</h3>';

echo '<p>Listing 1.10: If-then-else and Listing 1.11: Nested If-then-else</p>';
showcode(<<<'CODE'
//if (expression1) {
//    if (expression2) {
//        // Code
//    } else {
//        // More code
//    }
//} elseif (expression2) {
//    // Note that the space between else and if is optional
//} else {
//}
		
// Need to fix, generates an error
		
CODE
);

echo '<p>The ternary operator</p>';
showcode(<<<'CODE'
//$x=10;
//echo 10 == $x ? 'Yes' : 'No';
//$foo = ($bar) ?: $bat;
		
// Need to fix, generates an error
		
CODE
);

echo '<p>Listing 1.12: Multiple matches for if-then-else AND Listing 1.13: Switch statement</p>';
showcode(<<<'CODE'
$a = 0;
if ($a) { // Evaluates to false
} elseif ($a == 0) { // Evaluates to true
} else { // Will only be executed if no other conditions are met
}

$a = 0;
switch ($a) { // In this case, $a is the expression
case true: // Compare to true: Evaluates to false
  break;
case 0:    // Compare to 0: Evaluates to true
  break;
default:   // only if no other conditions are met
  break;
}
CODE
);

echo '<p>Listing 1.15: While and Do loops</p>';
showcode(<<<'CODE'
$i = 0;
while ($i < 10) {
    echo $i . PHP_EOL;
    $i++;
}
$i = 0;
do {
    echo $i . PHP_EOL;
    $i++;
} while ($i < 10);
		
CODE
);

echo "<p>Sandbox</p>";
showcode(<<<'CODE'
// Try it yourself...

CODE
);


echo '<h3 id="namespaces">Namespaces</h3>';

echo '<p>Listing 1.18: A namespaced class</p>';
showcode(<<<'CODE'
namespace Ds\String;
class Unicode
{
    protected $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function strlen()
    {
        if (extension_loaded('iconv')) {
            return \iconv_strlen($this->string);
        } elseif (extension_loaded('mbstring')) {
            return \mb_strlen($this->string);
        }
        return false;
    }
}
		
CODE
);

echo '<p>Listing 1.19: A namespaced function</p>';
showcode(<<<'CODE'
namespace Unicode\Tools;
const CHARSET = 'UTF-8';
function strlen($string) {
    if (extension_loaded('iconv')) {
        return \iconv_strlen($string);
    } elseif (extension_loaded('mbstring')) {
        return \mb_strlen($string);
    }
    return false;
}
		
CODE
);

echo '<p>Listing 1.20: Accessing a namespaced function before 5.6</p>';
showcode(<<<'CODE'
use Unicode\Tools as UT;
$charset = UT\CHARSET;
UT\strlen("Jag �lskar regnb�gar och sk�ldpaddor");
// or, fully-qualified
$charset = \Unicode\Tools\CHARSET;
\Unicode\Tools\strlen("Jag �lskar regnb�gar och sk�ldpaddor");
		
CODE
);

echo '<p>Listing 1.21: Falling back to global scope</p>';
showcode(<<<'CODE'
namespace Ds\String;
// Does't exist, or it would override
//use function Ds\String\iconv_strlen;
// The same as using fully qualified \iconv_strlen()
//echo iconv_strlen("Jag �lskar regnb�gar och sk�ldpaddor"); // outputs 36

CODE
);

echo "<p>Sandbox</p>";
showcode(<<<'CODE'
// Try it yourself...

CODE
);

