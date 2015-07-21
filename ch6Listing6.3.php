<?php
include_once('index.php');

echo ('<h2>H6 - paragraph Reading files with file handles</h2>');
echo ('<h3>Listing 6.3: open for reading and writing</h3>');
showcode(<<<'CODE'
$f = fopen('file.csv', 'a+');
while ($row = fgetcsv($f)) {
// handle values,
// NB: Appearently getcsv starts reading from the start, regardless of the 'a+'
}
$values = array(
    "Davey Shafik",
    "http://zceguide.com",
    "Win Prizes!"
);
// append line to csv file
fputcsv($f, $values);
fclose($f);

echo 'If all went well, a file has now been created named file.csv, containing the arrayvalues.
Look for the file and check the contents.
Try refreshing and see what happens';
CODE
);
showcode(<<<'CODE'
CODE
);
