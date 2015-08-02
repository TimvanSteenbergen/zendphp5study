<?php
include_once('index.php');
echo '<input id="chapter" type="hidden" value="9">';
echo '<h2>Chapter 9 - paragraph Constants, Statics & Props.php</h2>';
echo '<h3 id="p2">Listing 9.9: Static properties - The wrong way</h3>';
showcode(<<<'CODE'
class foo
{
    static $bar = "bat";
    public static function baz() {
        echo "Hello World";
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

echo '<h2></h2>';
showcode(<<<'CODE'
CODE
);

echo '<h2></h2>';
showcode(<<<'CODE'
CODE
);

echo '<h2></h2>';
showcode(<<<'CODE'
CODE
);

