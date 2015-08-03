<?php
include_once('index.php');
echo '<input id="chapter" type="hidden" value="9">';
echo '<h2>Chapter 9 - paragraph Interfaces and Abstract classes</h2>';
echo '<h3>Listing 9.12: Using abstract classes</h3>';
showcode(<<<'CODE'
abstract class DataStore_Adapter
{
    private $id;
    abstract function insert();
    abstract function update();
    public function save() {
        if (!is_null($this->id)) {
            $this->update();
        } else {
            $this->insert();
        }
    }
}
class PDO_DataStore_Adapter extends DataStore_Adapter
{
    public function __construct($dsn) {
        // ...
    }
    function insert() {
        // ...
    }
    function update() {
        // ...
    }
}
CODE
);

echo '<h3>Listing 9.13: Defining interfaces</h3>';
showcode(<<<'CODE'
interface DataStore_Adapter2 {
    public function insert();
    public function update();
    public function save();
    public function newRecord($name = null);
}
class PDO_DataStore_Adapter2 implements DataStore_Adapter2
{
    public function insert() {
        // ...
    }
    public function update() {
        // ...
    }
    public function save() {
        // ...
    }
    public function newRecord($name = null) {
    }
}
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

