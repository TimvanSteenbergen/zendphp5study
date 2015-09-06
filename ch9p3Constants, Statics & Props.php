<?php
include_once('generalIncludes.php');
echo '<input id="chapter" type="hidden" value="9">';
echo '<h2>Chapter 9 OOP Programming in PHP - Paragraph paragraph Constants, Statics & Propsp</h2>';
echo '<h3>Listing 9.9: Static properties - The wrong way</h3>';
showcode(<<<'CODE'
class foo
{
    static $bar = "bat";
    public static function baz() {
        echo "Hello World\n";
    }
}
$foo = new foo();
$foo->baz();
echo $foo->bar;
CODE
);

echo '<h3>Listing 9.9: Static properties - The correct way with the paanayim nekudotayim ::</h3>';
showcode(<<<'CODE'
class foo2
{
    static $bar = "bat";
    public static function baz() {
        echo "Hello World";
    }
}
$foo = new foo2();
$foo::baz();
echo $foo::$bar;
CODE
);

echo '<h3>Listing 9.10: Static binding</h3>';
showcode(<<<'CODE'
class a
{
    public static function test() {
        self::foo();
        self::bar();
    }
    public static function foo() {
        echo __METHOD__ . " called by foo->a\n";
    }
    private static function bar() {
        echo __METHOD__ . " called by bar->a\n";
    }
}
class b extends a { }
class c extends a
{
    public static function foo() {
        echo __METHOD__ . " called by foo->c\n";
    }
    private static function bar() {
        echo __METHOD__ . " called by bar->c\n";
    }
}
a::test(); // a::foo called \n // a::bar called
b::test(); // a::foo called \n // a::bar called
c::test(); // a::foo called \n // a::bar called
CODE
);

echo '<h3>Listing 9.11: Late static binding</h3>';
showcode(<<<'CODE'
class x
{
    public static function test() {
        static::foo();
        static::bar();
    }
    public static function foo() {
        echo __METHOD__ . " called by foo->x\n";
    }
    private static function bar() {
        echo __METHOD__ . " called by bar->x\n";
    }
}
class y extends x { }
class z extends x
{
    public static function foo() {
        echo __METHOD__ . " called by foo->z\n";
    }
    private static function bar() {
        echo __METHOD__ . " called by bar->z\n";
    }
}
x::test(); // x::foo called \n // x::bar called
y::test(); // x::foo called \n // x::bar called
z::test(); // z::foo called \n // Fatal error: Call to private method
// z::bar() from context 'x'
CODE
);

echo '<h3>Listing 9.14: Using reflection</h3>';
showcode(<<<'CODE'

/**
 * Say Hello
 *
 * @param string $to
 */
function hello($to = "World") {
    echo "Hello $to";
}
$funcs = get_defined_functions();
?><h1>Documentation</h1>
<?php
/**
 * Do Foo
 *
 * @param string $bar Some Bar
 * @param array $baz An Array of Baz
 */
function foo($bar, $baz = array()) { }
$funcs = get_defined_functions();
foreach ($funcs['user'] as $func) {
    try {
        $func = new ReflectionFunction($func);
    } catch (ReflectionException $e) {
// ...
    }
    $prototype = $func->name . ' ( ';
    $args = array();
    foreach ($func->getParameters() as $param) {
        $arg = "";
        if ($param->isPassedByReference()) {
            $arg = '&';
        }
        if ($param->isOptional()) {
            $arg = '[' . $param->getName()
                . ' = '
                . $param->getDefaultValue() . ']';
        } else {
            $arg = $param->getName();
        }
        $args[] = $arg;
    }
    $prototype .= implode(", ", $args) . ' )';
    echo "<h2>$prototype</h2>
<p>
Comment:
</p>
<pre>" . $func->getDocComment() . "</pre>
<p>
File: " . $func->getFileName() . "<br />
Lines: " . $func->getStartLine() . " - " . $func->getEndLine() . "
</p>";
}
CODE
);

echo '<h3></h3>';
showcode(<<<'CODE'
CODE
);

