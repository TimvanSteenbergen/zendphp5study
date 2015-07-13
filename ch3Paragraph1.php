<?php
/**
 *
 * Created by PhpStorm.
 * User: Tim
 * Date: 6-6-2015
 * Time: 12:32
 */
include_once('index.php');

echo "<h2>Display an asterisk</h2>";
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

echo "<a id='variableinterpolation' href='#'><h2>Variable interpolation</h2></a>";
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

echo "<a id='heredoc' href='#'><h2>The Heredoc and Nowdoc Syntax</h2></a>";
showcode(<<<'CODE'
$who = "World";
echo <<<TEXT
So I said, "Hello $who"
TEXT;
CODE
);

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
CODE
);
showcode(<<<'CODE'
CODE
);


echo "<a id='escaping' href='#'><h2>Escaping literal values</h2></a>";
echo '$who = "World";<br/>';
showcode(<<<'CODE'
CODE
);

