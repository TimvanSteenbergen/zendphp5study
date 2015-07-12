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

echo "<a id='variableinterpolation' href='#'><h2>Variable interpolation</h2></a>";
$who = "World";
echo '$who = "World";<br/>';
echo 'echo "Hello $who\n" Shows: '; echo "Hello $who\n followed by a newline (\r\n on Windows, \r on mac) <br/>";
echo 'echo \'Hello $who\n\' Shows: '; echo 'Hello $who\n <br/>';
echo "<br/>";
echo '$me = \'Davey\';<br/>';
echo '$names = array(\'Smith\', \'Jones\', \'Jackson\');<br/>';
echo 'There cannot be more than two {$me}s!;<br/>';
echo 'Citation: {$names[1]}[1987]<br/>';
echo ' Shows: <br/>';
$me = 'Davey';
$names = array('Smith', 'Jones', 'Jackson');
echo "There cannot be more than two {$me}s!<br/>";
echo "Citation: {$names[1]}[1987]";

echo "<a id='heredoc' href='#'><h2>The Heredoc and Nowdoc Syntax</h2></a>";
echo '$who = "World";<br/>';
echo 'echo <<<TEXT;<br/>';
echo 'So I said, "Hello $who";<br/>';
echo 'TEXT;<br/>';
echo 'Shows: <br/>';

$who = "World";
echo <<<TEXT
So I said, "Hello $who"
TEXT;

echo '$who = "World";<br/>';
echo 'echo <<<\'TEXT\';<br/>';
echo 'So I said, "Hello $who";<br/>';
echo 'TEXT;<br/>';
echo 'Shows: <br/>';

$who = "World";
echo <<<'TEXT'
So I said, "Hello $who"
TEXT;

echo "<a id='escaping' href='#'><h2>Escaping literal values</h2></a>";

