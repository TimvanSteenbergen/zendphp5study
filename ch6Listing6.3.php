<?php
//This is the template codebitpagina
//Codebits

// open for reading and writing
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

echo 'If all went well, a file has now been created named file.csv, containing the arrayvalues.<br/>';
echo 'Look for the file and check the contents.<br/>';
echo 'Try refreshing and see what happens<br/>';

//Einde van de Codebits
include_once('indexfooter.php');