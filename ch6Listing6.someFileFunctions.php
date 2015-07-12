<?php
//This is the template codebitpagina
//Codebits

if(is_writable('counter.txt')){
    'counter.txt is writable!';
} else{
    'counter.txt is not writable!';
}
chmod('counter.txt', 0333);
echo 'Now I changed the rights to counter.txt';

if(is_writable('counter.txt')){
    'counter.txt is still writable!';
} else{
    'counter.txt is not writable anymore!';
}


//Einde van de Codebits
include_once('index.php');