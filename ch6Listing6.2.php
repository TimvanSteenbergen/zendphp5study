<?php
//This is the template codebitpagina
//Codebits

//Listing 6.2: Detecting end-of-file
if (!file_exists ("counter.txt")) {
    echo 'Yep, file counter.txt does not exist yet, thus the Exception gets thrown.Manually create the file and try again.';
    throw new Exception ("The file does not exists");
}
$file = fopen("counter.txt", "r");
$txt = '';
while (!feof($file)) {
    $txt .= fread($file, 1);
}
echo "Listing 6.2 says: There have been $txt hits to Listing 6.1 of this site.";

//Einde van de Codebits
include_once('indexfooter.html');