<?php
/**
 *
 * Created by PhpStorm.
 * User: Tim
 * Date: 6-6-2015
 * Time: 12:32
 */
include_once('generalIncludes.php');
echo '<input id="chapter" type="hidden" value="3">';
echo "<h2 id='ch3'>Chapter 3 Strings and Patterns</h2>";


echo "<h3 id='numbertypes'>Display an asterisk</h2>";
showcode(<<<'CODE'
echo "\x2a";
		
CODE
);

showcode(<<<'CODE'
echo "\052";
		
CODE
);

showcode(<<<'CODE'
		
CODE
);


echo "<h3 id='variableinterpolation'>Variable interpolation</h3>";
showcode(<<<'CODE'
$who = "World";
echo "Hello $who\n";
echo 'Hello $who\n';
		
CODE
);

showcode(<<<'CODE'
$me = 'Davey';
$names = array('Smith', 'Jones', 'Jackson');
echo "There cannot be more than two {$me}s!";
echo "Citation: {$names[1]}[1987]";
		
CODE
);

showcode(<<<'CODE'
		
CODE
);


echo "<h3 id='heredoc'>The Heredoc and Nowdoc Syntax</h3>";
echo "Not really useful since HEREDOC and NOWDOC does not work with eval() (yet)";
showcode(<<<'CODE'
$who = "World";
echo <<<TEXT
So I said, "Hello $who"
TEXT;
		
CODE
);

echo "Not really useful since HEREDOC and NOWDOC does not work with eval() (yet)";
showcode(<<<'CODE'
$who = "World";
echo <<<'TEXT'
So I said, "Hello $who"
TEXT;
		
CODE
);

showcode(<<<'CODE'
class Hello {
public $greeting = <<<EOT
Hello World
EOT;
}
$hi = new Hello;
echo $hi->greeting;
		
CODE
);

showcode(<<<'CODE'
		
CODE
);


echo "<h3 id='escaping'>Escaping literal values</h3>";
showcode(<<<'CODE'
echo 'This is \'my\' string';
		
CODE
);

showcode(<<<'CODE'
$a = 10;
echo "The value of \$a is \"$a\".";
		
CODE
);

showcode(<<<'CODE'
echo "Here's an escaped backslash: - \\ -";
		
CODE
);

showcode(<<<'CODE'
echo "Here's a literal brace + dollar sign: {\$";
		
CODE
);

showcode(<<<'CODE'
		
CODE
);


echo "<h3 id='working'>Working with Strings</h3>";
showcode(<<<'CODE'
echo strtr('abc', 'a', '1'); // Outputs 1bc		
	
CODE
);

showcode(<<<'CODE'
// Translate multiple-characters
$subst = array(
'1' => 'one',
'2' => 'two',
);
		
echo strtr('123', $subst); // Outputs onetwo3

CODE
);

showcode(<<<'CODE'
$string = 'abcdef';
echo $string[1]; // Outputs 'b'

CODE
);

showcode(<<<'CODE'
// Scan a string one character at a time
$s = 'abcdef';
for ($i = 0; $i < strlen($s); $i++) {
	if ($s[$i] > 'c') {
	echo $s[$i];
	}
}
		
CODE
);

showcode(<<<'CODE'

CODE
);


echo "<h3 id='searching'>Comparing, Searching and Replacing Strings</h3>";
showcode(<<<'CODE'
$string = '123aa';

if ($string == 123) {
	echo "This is True";
}
		
if ($string === 123) {
	echo "This is False!";
}
			
CODE
);

showcode(<<<'CODE'
// strcmp() ,case-sensitive
// strcasecmp() ,case-insensitive
		
$str = "Hello World";

if (strcmp($str, "hello world") === 0) {
	// We won't get here, because of case sensitivity
	echo "This is False";
}

if (strcasecmp($str, "hello world") === 0) {
	// We will get here, because strcasecmp() 
	// is case-insensitive
	echo "This is True";
}
		
CODE
);

showcode(<<<'CODE'
$haystack = "abcdefg";
$needle = 'abc';

if (strpos($haystack, $needle) !== false) {
	echo 'Found';
}
		
CODE
);

showcode(<<<'CODE'
$haystack = '123456123456';
$needle = '123';
		
echo strpos($haystack, $needle) . "\n"; // outputs 0
echo strpos($haystack, $needle, 1); // outputs 6
		
CODE
);

showcode(<<<'CODE'
$haystack = '123456';
$needle = '34';
		
echo strstr($haystack, $needle); // outputs 3456
		
CODE
);

showcode(<<<'CODE'
// Case-insensitive search

echo stripos('Hello World', 'hello') . "\n"; // outputs zero
echo stristr('Hello My World', 'my'); // outputs "My World"
		
CODE
);

showcode(<<<'CODE'
// Reverse search

echo strrpos('123123', '123'); // outputs 3
		
CODE
);

showcode(<<<'CODE'
// Outputs Hello Reader
echo str_replace("World", "Reader", "Hello World") . "\n";
		
// Also outputs Hello Reader
echo str_ireplace("world", "Reader", "Hello World");
		
CODE
);

showcode(<<<'CODE'
// outputs Bonjour Monde
echo str_replace(
	array("Hello", "World"),
	array("Bonjour", "Monde"),
	"Hello World"
) . "\n";

// outputs Bye Bye
echo str_replace(
	array("Hello", "World"),
	"Bye",
	"Hello World"
);
		
CODE
);

showcode(<<<'CODE'
// Combining substr_replace() with strpos()

$user = "michael@example.com";
$name = substr_replace($user, "", strpos($user, '@'));
echo "Hello " . $name;

CODE
);

showcode(<<<'CODE'
// Extracting Substrings

$x = '1234567';
echo substr($x, 0, 3) . "\n"; // outputs 123
echo substr($x, 1, 1) . "\n"; // outputs 2
echo substr($x, -2) . "\n"; // outputs 67
echo substr($x, 1) . "\n"; // outputs 234567
echo substr($x, -2, 1); // outputs 6

CODE
);

showcode(<<<'CODE'


CODE
);


echo "<h3 id='formatting'>Formatting Strings</h3>";
showcode(<<<'CODE'
	
CODE
);