<?php
include_once('generalIncludes.php');
echo '<input id="chaspter" type="hidden" value="6">';

echo ('<h2>H6 - paragraph Accessing network resources as files</h2>');
echo ('<h3>Listing 6.4: Accessing network resources as files</h3>');
showcode(<<<'CODE'
$f = fopen('https://example.com', 'r');
$page = '';
if ($f) {
    while ($s = fread($f, 1000)) {
        $page .= $s;
    }
} else {
    throw new Exception(
        "Unable to open connection to https://example.com"
    );
}
var_dump($page);
CODE
);
showcode(<<<'CODE'
CODE
);
