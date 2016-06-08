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
echo "<h2 id='numbertypes'>Display an asterisk</h2>";
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
echo "<h2 id='variableinterpolation'>Chapter 3 Strings and Patterns - paragraph Variable interpolation</h2>";
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
echo "<h2 id='heredoc'>Chapter 3 Strings and Patterns - paragraph The Heredoc and Nowdoc Syntax</h2>";
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
echo "<h2 id='escaping'>Chapter 3 Strings and Patterns - paragraph Escaping literal values</h2>";
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

echo "<h2 id='working'>Chapter 3 Strings and Patterns - paragraph Working with Strings</h2>";
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




echo "<h2 id='searching'>Chapter 3 Strings and Patterns - paragraph Searching and Replacing Strings</h2>";
showcode(<<<'CODE'

	
CODE
);

echo "<h2 id='formatting'>Chapter 3 Strings and Patterns - paragraph Formatting Strings</h2>";
showcode(<<<'CODE'
	
CODE
);