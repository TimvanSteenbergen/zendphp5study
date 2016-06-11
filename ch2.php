<?php
/**
 *
 * Created by PhpStorm.
 * User: Tim
 * Date: 6-6-2015
 * Time: 12:32
 */
include_once('generalIncludes.php');
echo '<input id="chapter" type="hidden" value="2">';

echo '<h2>Chapter 2 Functions</h2>';

echo '<h3 id="syntax">Basic Syntax</h3>';
echo 'Nothing to fiddle with in this paragraph...';


echo '<h3 id="returningvalues">Returning values</h3>';

echo 'Listing 2.1: Returning a value';
showcode(<<<'CODE'

function helloworld() {
    return "Hello World"; // No output is shown
}
// Assigns the return value "Hello World" to $txt
$txt = helloworld();
echo helloworld(); // Displays "Hello World"
		
CODE
);

echo 'Listing 2.2: Returning and exiting early';
showcode(<<<'CODE'
function hello($who) {
    echo "Hello $who";
    if ($who == "World") {
        return; // Nothing else in the function will be processed
    }
    echo ", how are you";
}
hello("World"); // Displays "Hello World"
hello("Reader"); // Displays "Hello Reader, how are you?"

CODE
);

echo 'Listing 2.3: Returning by reference';
showcode(<<<'CODE'
function &query($sql) {
    $result = mysql_query($sql);
    return $result;
}
// The following is incorrect and will cause PHP
// to emit a notice when called.
function &getHello() {
    return "Hello World";
}
// This will also cause the warning to be
// issued when called
function &test() {
    echo 'This is a test';
}
		
CODE
);

echo "<p>Sandbox</p>";
showcode(<<<'CODE'
// Try it yourself...

CODE
);


echo '<h3 id="variablescope">Variable scope</h3>';

echo 'Listing 2.4: Variable scope';
showcode(<<<'CODE'
$a = "Hello World";
function hi() {
    $a = "Hello Reader";
    $b = "How are you";
}
hi();
echo $a; // Will output Hello World
echo $b; // Will emit a notice
		
CODE
);

echo 'Listing 2.5: Accessing with the global statement';
showcode(<<<'CODE'
$a = "Hello";
$b = "World";
function hiworld() {
    global $a, $b;
    echo "$a $b";
}
hiworld(); // Displays "Hello World"
		
CODE
);

echo 'Listing 2.6: Accessing $GLOBALS array';
showcode(<<<'CODE'
$a = "Hello";
$b = "World";
function greetings() {
    echo $GLOBALS['a'] .' '. $GLOBALS['b'];
}
greetings(); // Displays "Hello World"
		
CODE
);

echo 'Listing 2.7: Passing arguments';
showcode(<<<'CODE'
function hithere($who) {
    echo "Hello $who";
}
hithere("World");
		
CODE
);


echo 'Listing 2.8: Setting argument defaults';
showcode(<<<'CODE'
function heee($who = "World") {
    echo "Hello $who";
}
heee();
/* This time we pass in no argument and $who is assigned "World" by default. */
heee("Reader");
/* This time we override the default argument */
echo '';
		
CODE
);

echo "<p>Sandbox</p>";
showcode(<<<'CODE'
// Try it yourself...

CODE
);

