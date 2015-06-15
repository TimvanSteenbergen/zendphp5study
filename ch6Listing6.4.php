<?php
//This is the template codebitpagina
//Codebits
//phpinfo();

//Listing 6.4: Accessing network resources as files
$f = fopen('https://www.tieka.nl', 'r');
$page = '';
if ($f) {
    while ($s = fread($f, 1000)) {
        $page .= $s;
    }
} else {
    throw new Exception(
        "Unable to open connection to www.tieka.nl"
    );
}
var_dump($page);
//Einde van de Codebits
include_once('indexfooter.html');