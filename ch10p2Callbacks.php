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
showcode(<<<'CODE'
class Sorter()
{
    public function __invoke($a, $b) {
    // Sort
    }
}
$sorter = new Sorter();
usort($sorter);
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
echo '<h3></h3>';
showcode(<<<'CODE'

CODE
);
