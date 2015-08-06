<?php
include_once('index.php');
echo '<input id="chapter" type="hidden" value="10">';
echo '<h2>Chapter 10 - paragraph Callbacks</h2>';
echo '<h3>Listing 10.8: Using arrays to specify callbacks</h3>';
showcode(<<<'CODE'
Class SomeClass
{
   public function method(){}
}
$obj = new SomeClass;
$array = [1,2,3,5,4];
// object method call:
$callback = [$obj, 'method']; // $obj->method() callback
usort($array, $callback);
// or static method:
$callback = ['SomeClass', 'method']; // SomeClass::method()
usort($array, $callback);
CODE
);
echo '<h3>Listing 10.9: Using a class as a callback</h3>';
//@todo sorter needs no (); and usort wants first an array, then the sortes
showcode(<<<'CODE'
class Sorter
{
    public function __invoke($a, $b) {
    // Sort
          return ($a < $b) ? -1 : 1;
    }
}
$sorter = new Sorter();
$array = [1,4,2,3,5];
usort($array, $sorter);
print_r($array);
CODE
);
echo '<h3>Listing 10.10: Userland callbacks</h3>';
//@todo Added two ';' and some variables
showcode(<<<'CODE'
function myFunction(){}
Class SomeOtherClass
{
   public function method(){}
}
$obj = new SomeOtherClass;
$array = [1,2,3,5,4];// Variable Functions
$callback = "myFunction";
$callback();
// object method call:
$callback = [$obj, 'method']; // $obj->method() callback
$callback();
// or static method:
$callback = ['SomeOtherClass', 'method']; // SomeOtherClass::method()
$callback();
// Closures
$callback = function() { };
$callback();
// Objects with Invoke magic method:
class invokeCallback
{
public function __invoke() { }
}
$callback = new invokeCallback();
$callback();
CODE
);
echo '<h3></h3>';
showcode(<<<'CODE'

CODE
);
echo '<h3></h3>';
showcode(<<<'CODE'

CODE
);
