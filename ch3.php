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

echo "<h2 id='ch3'>Chapter 3</h2>";
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

echo "<h2 id='variableinterpolation'>Chapter 3 - paragraph Variable interpolation</h2>";
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

echo "<h2 id='heredoc'>Chapter 3 - paragraph The Heredoc and Nowdoc Syntax</h2>";
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


echo "<h2 id='escaping'>Chapter 3 - paragraph Escaping literal values</h2>";
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
echo "Here's a literal brace + dollar sign: {\$";
CODE
);
