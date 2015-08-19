<?php
include_once('generalIncludes.php');
echo '<input id="chapter" type="hidden" value="9">';
echo '<h2>Chapter 9 OOP Programming in PHP - Paragraph OOP fundamentals</h2>';

echo '<h2>Listing 9.1: Class inheritance</h2>';
echo 'Try removing any of the parameters, or $options from the call. Or the key from the data which might return a array, if JSON_FORCE_OBJECT is not set:';
showcode(<<<'CODE'
class a
{
    function test() {
        echo __METHOD__ . " called\n";
    }
    function func() {
        echo __METHOD__ . " called\n";
    }
}
class b extends a
{
    function test() {
        echo __METHOD__ . " called\n";
    }
}
class c extends b
{
    function test() {
        parent::test();
    }
}
class d extends c
{
    function test() {
        b::test();
    }
}
$vara = new a();
$varb = new b();
$varc = new c();
$vard = new d();
$vara->test(); // Outputs "a::test called"
$varb->test(); // Outputs "b::test called"
$varb->func(); // Outputs "a::func called"
$varc->test(); // Outputs "b::test called"
$vard->test(); // Outputs "b::test called"
CODE
);
echo '<h3 id="p2">Listing 9.3: Using $this</h3>';
showcode(<<<'CODE'
class myClass
{
    function myFunction($data) {
        echo "The value is $data\n";
    }
    function callMyFunction($data) {
        // Call myFunction()
        $this->myFunction($data);
    }
}
$obj = new myClass();
$obj->callMyFunction(123);
echo "\nOr called with a variable method\n";
$method = 'callMyFunction';
$obj->$method(123);
echo "\nOr called dynamically\n";
$obj->{$method}(123);
$method = 'callMy';
$obj->{$method . 'Function'}(123);
CODE
);

echo '<h3>Listing 9.4: Class constructors</h3>';
showcode(<<<'CODE'
class foo
{
    function __construct() {
        echo __METHOD__;
    }
    function foo() {
        // PHP 4 style constructor, not called since 5.3
    }
}
new foo();
CODE
);

echo '<h3>Listing 9.5: Class destructors</h3>';
showcode(<<<'CODE'
class bar
{
    function __construct() {
        echo __METHOD__ . PHP_EOL;
    }
    function __destruct() {
        echo __METHOD__;
    }

}
new bar();


$a = new bar();
$b = $a;
unset($a);
CODE
);

echo '<h2>Magic Methods</h2>';
showcode(<<<'CODE'
class baz{
    protected $existing;
    public function setExisting($existing){
        return $this->existing = $existing;
    }
    public function getExisting(){
        return $this->existing;
    }
    public function  __get($nonexistingvar){
        return 'MagicGet for '. $nonexistingvar . '!';
    }
    public function  __construct(){
        $this->setExisting('I exist');
    }

}
$me = new baz();
echo "\nUnknown var: $me->getUnknownvar";
echo "\nExisting var: $me->getExisting";
CODE
);
echo '<h3>Listing 9.6: Visibility example</h3>';
showcode(<<<'CODE'
class foo2
{
    public $foo = 'bar2';
    protected $baz = 'bat';
    private $qux = 'bingo';
    function __construct() {
        print_r(get_object_vars($this));
    }
}
class bar2 extends foo2
{
    function __construct() {
        print_r(get_object_vars($this));
    }
}
class baz2
{
    function __construct() {
        $foo = new foo2();
        print_r(get_object_vars($foo));
    }
}
new foo2();
new bar2();
new baz2();
CODE
);

echo '<h2></h2>';
showcode(<<<'CODE'
CODE
);


