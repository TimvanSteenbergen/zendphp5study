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
//@TODO erratum: baz = array() results in a Notice 'Array to string conversion'
showcode(<<<'CODE'
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 3-8-2015
 * Time: 11:46
 */
/**
 * Say Hello
 *
 * @param string $to
 */
function hello($to = "World") {
    echo "Hello $to";
}
//$funcs = get_defined_functions();

?><h1>Documentation</h1>
<?php
/**
 * Do Foo
 *
 * @param string $bar Some Bar
 * @param array $baz An Array of Baz
 */
function foo($bar, $baz = array(2=>8,4)) { }
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
            $defValue = $param->getDefaultValue();
            if(is_Object($defValue)){
                $defValue = 'Object';
            }
            if(is_Array($defValue)){
//                $defValue = '[' . implode(',', $defValue) . ']';
                $defValue = serialize($defValue);
            }
            echo 'sdfsdf';
            $arg = '[' . $param->getName()
                . ' = '
                . $defValue  . ']';
        } else {
            $arg = $param->getName();
        }
        $args[] = $arg;
    }
    print_r($args);
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

echo '<h3>Listing 9.15: Using reflection with classes</h3>';
showcode(<<<'CODE'
/**
* Greeting Class
*
* Extends a greeting to someone/thing
*/
class Greeting
{
/**
* Say Hello
*
* @param string $to
*/
function hello($to = "World") {
echo "Hello $to";
}
}
$class = new ReflectionClass("Greeting");
?>
<h1>Documentation</h1>
<h2><?php echo $class->getName(); ?></h2>
<p>
Comment:
</p>
<pre>
<?php echo $class->getDocComment(); ?>
</pre>
<p>
File: <?php echo $class->getFileName(); ?>
<br />
Lines: <?php echo $class->getStartLine(); ?>
- <?php echo $class->getEndLine(); ?>
</p>
<?php
foreach ($class->getMethods() as $method) {
$prototype = $method->name . ' ( ';
$args = array();
foreach ($method->getParameters() as $param) {
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
echo "<h3>$prototype</h3>";
echo "
<p>
Comment:
</p>
<pre>
" . $method->getDocComment() . "
</pre>
<p>
File: " . $method->getFileName() . "
<br />
Lines: " . $method->getStartLine() . " - "
. $method->getEndLine() . "
</p>";
}
CODE
);

