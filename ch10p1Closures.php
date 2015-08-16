<?php
include_once('generalIncludes.php');
echo '<input id="chapter" type="hidden" value="10">';
echo '<h2>Chapter 10 - paragraph Closures</h2>';
echo '<h3>Listing 10.1: Creating a closure</h3>';
showcode(<<<'CODE'
function createGreeter($who) {
    return function() use ($who) {
        echo "Hello $who";
    };
}
$greeter = createGreeter("World");
$greeter(); // Hello World
CODE
);

echo '<h3>Listing 10.2: Creating a closure with a reference</h3>';
showcode(<<<'CODE'
// Make sure to use reference here also
function createGreeter2(&$who) {
    return function() use (&$who) {
       echo "Hello $who \n";
       $who = null;
    };
}
$who = "world";
$greeter = createGreeter2($who); // Passed in by-reference
$who = ucfirst($who); // changes to World,
// including the closure reference
$greeter(); // Hello World, changes $who to null
var_dump($who); // null
CODE
);

echo '<h3>Listing 10.3: Using $this in closures</h3>';
showcode(<<<'CODE'
class foo
{
    public function getClosure() {
        return function() { return $this; };
    }
}
class bar
{
    public function __construct() {
        $foo = new foo();
        $func = $foo->getClosure();
        $obj = $func(); // PHP 5.3: $obj == null
        // PHP 5.4: $obj == foo, not bar
    }
}
CODE
);
echo '<h3>Listing 10.4, 10.5 and 10.6: Changing $this dynamically and binding</h3>';
showcode(<<<'CODE'
class Greeter
{
    public function getClosure() {
        return function() {
            echo $this->hello;
            $this->world();
        };
    }
}
class WorldGreeter
{
    public $hello = "Hello ";
    private function world() { echo "World"; }
}

$greeter = new Greeter();
$closure = $greeter->getClosure();
$worldGreeter = new WorldGreeter();
// Rebind $this to $worldGreeter
$newClosure = $closure->bindTo($worldGreeter,'WorldGreeter');
$newClosure();

CODE
);
echo '<h3>Listing 10.7: Using static bind()</h3>';
showcode(<<<'CODE'
class Greeter2
{
    public function getClosure() {
        return function() {
            echo $this->hello;
            $this->world();
        };
    }
}
class WorldGreeter2
{
    public $hello = "Hello ";
    private function world() { echo "World"; }
}
$greeter = new Greeter2();
$closure = $greeter->getClosure();
$worldGreeter = new WorldGreeter2();
// Rebind $this and scope to $worldGreeter
$newClosure = Closure::bind(
    $closure, $worldGreeter, 'WorldGreeter2'
    );
$newClosure(); // Hello World
CODE
);
echo '<h3></h3>';
showcode(<<<'CODE'

CODE
);
