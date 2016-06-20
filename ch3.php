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

echo "<p>Sandbox</p>";
showcode(<<<'CODE'
// Try it yourself...

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

echo "<p>Sandbox</p>";
showcode(<<<'CODE'
// Try it yourself...

CODE
);


echo "<h3 id='heredoc'>Heredoc and Nowdoc Syntax</h3>";
echo "<p>Not really useful since HEREDOC and NOWDOC does not work with eval() (yet)</p>";
showcode(<<<'CODE'
$who = "World";
echo <<<TEXT
So I said, "Hello $who"
TEXT;
		
CODE
);

echo "<p>Not really useful since HEREDOC and NOWDOC does not work with eval() (yet)</p>";
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

echo "<p>Sandbox</p>";
showcode(<<<'CODE'
// Try it yourself...

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

echo "<p>Sandbox</p>";
showcode(<<<'CODE'
// Try it yourself...

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

echo "<p>Sandbox</p>";
showcode(<<<'CODE'
// Try it yourself...

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

echo "<p>Sandbox</p>";
showcode(<<<'CODE'
// Try it yourself...

CODE
);


echo "<h3 id='formatting'>Formatting Strings</h3>";
showcode(<<<'CODE'
// number_format() accepts 1, 2 or 4 arguments

echo number_format("100000.698") . "\n"; // Shows 100,001
echo number_format("100000.698", 3, ",", " "); // Shows 100000,698
		
CODE
);

showcode(<<<'CODE'
// printf() examples

$n = 123;
$f = 123.45;
$s = "A string";
		
printf("%d", $n); echo "\n"; // prints 123
printf("%d", $f); echo "\n"; // prints 123
		
// Prints "The string is A string"
printf("The string is %s", $s);  echo "\n";
		
// Example with precision
printf("%3.3f", $f); // prints 123.450

CODE
);

showcode(<<<'CODE'
$name = "Dave Minion";

// Simple match
$regex = "/[a-zA-Z\s]/";

if (preg_match($regex, $name)) {
	// Valid Name
	echo "$name = Valid" . "\n";
}

CODE
);

echo "<p>Sandbox</p>";
showcode(<<<'CODE'
// Try it yourself...

CODE
);

