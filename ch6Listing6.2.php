<?php
include_once('index.php');

echo ('<h2>H6 - paragraph Detecting end-of-file</h2>');
echo ('<h3>Listing 6.2: Detecting end-of-file</h3>');
showcode(<<<'CODE'
if (!file_exists ("counter.txt")) {
    throw new Exception ("The file counter.txt does not exist. Create it!");
}
$file = fopen("counter.txt", "r");
$txt = '';
while (!feof($file)) {
    $txt .= fread($file, 1);
}
echo "Listing 6.2 says:
There have been $txt hits to Listing 6.1 of this site.";
CODE
);
showcode(<<<'CODE'
CODE
);
