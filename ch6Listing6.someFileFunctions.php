<?php
include_once('generalIncludes.php');
echo '<input id="chapter" type="hidden" value="6">';

echo ('<h2>Chapter 6 Files, Streams, and Network Programming - Paragraph paragraph Accessing network resources as files</h2>');
echo ('<h3>Listing 6.4: Accessing network resources as files</h3>');
showcode(<<<'CODE'
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
CODE
);
showcode(<<<'CODE'
CODE
);
