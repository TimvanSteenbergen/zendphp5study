<?php
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
        print_r($param->getDefaultValue() );
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