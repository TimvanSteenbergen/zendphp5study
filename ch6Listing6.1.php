<?php
include_once('generalIncludes.php');
echo '<input id="chapter" type="hidden" value="6">';

echo ('<h2>Chapter 6 Files, Streams, and Network Programming - Paragraph paragraph Reading files with file handles</h2>');
echo ('<h3>Listing 6.1: Reading files with file handles</h3>');
showcode(<<<'CODE'
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
echo "Listing 6.1 says:
There has been $counter hits to this site.";
CODE
);
showcode(<<<'CODE'
CODE
);
