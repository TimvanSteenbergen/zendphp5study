<?php
//This is the template codebitpagina
//Codebits

//Listing 6.1: Reading files with file handles
$file = fopen("counter.txt", 'a+');
if ($file == false) {
    die ("Unable to open/create file");
}
if (filesize("counter.txt") == 0) {
    $counter = 0;
} else {
    $counter = (int) fgets($file);
}
ftruncate($file, 0);
$counter++;
fwrite($file, $counter);
echo "Listing 6.1 says: There has been $counter hits to this site.";

//Einde van de Codebits
include_once('indexfooter.html');