<?php
/**
 * Say Hello
 *
 * @param string $to
 */
echo "<pre>";
echo "10 September 2000: " . strtotime("10 September 2000"), "\n";
//echo "15 October 1682: " . date_add(date('Y-m-d H:i:s',time()),"-P100Y"), "\n";
$now = new DateTime();
echo "vandaag 1582: " . $now->sub(new DateInterval("P433Y"))->format(DateTime::ISO8601), "\n";
echo "vandaag +1M 1582: " . $now->add(new DateInterval("P2M"))->format('Y-m-d H:i:s'), "\n";
echo "vandaag +1M-17d 1582: " . $now->sub(new DateInterval("P17D"))->format('Y-m-d H:i:s'), "\n";
//echo "vandaag 1564: " . $now->add(new DateInterval("P1Y"))->format('Y-m-d H:i:s'), "\n";
$datum = strtotime("15 oktober 1882");
print_r($datum);
//die("");

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