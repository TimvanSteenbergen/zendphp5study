<?php
include_once('index.php');

echo '<h2>Chapter 8 - paragraph DOM</h2>Loading and saving XML Documents, XPATH queries and Modifying XML documents<br/>NB. the file \'library.xml\' is in the root\xml of this project.<br/>';
echo 'Load an XML from a file';
showcode(<<<'CODE'
// Load an XML file
$dom = new DomDocument();
$dom->load("xml/library.xml");
print_r($dom);
CODE
);echo 'Load an XML string, the procedural way';
showcode(<<<'CODE'
// Load an XML string
$xml = "<?xml version=\"1.0\"?><message>Hi Mars!</message>";
$dom = new DomDocument();
$dom->loadXML($xml);
print_r($dom);
CODE
);

echo '<h3>Listing 8.15: Loading XML with DOM</h3>';
showcode(<<<'CODE'
$dom = new DomDocument();
$dom->load('xml/library.xml');
// Do something with our XML here
$use_xhtml = true; //or false if you prefer saving as XML
// Save to file
if ($use_xhtml) {
    $dom->save('xml/librarySavedDOM.xml');
    echo "saved in file 'xml/librarySavedDOM.xml'.\n";
} else {
    $dom->saveHTMLFile('xml/librarySavedXML.xml');
    echo "saved in file 'xml/librarySavedXML.xml'.\n";
}
// Output the data
if ($use_xhtml) {
    echo $dom->saveXML();
} else {
    echo $dom->saveHTML();
}
CODE
);
echo '<h3>Listing 8.16: XPath queries with DOM</h3>';
echo '@TODO make this work';
showcode(<<<'CODE'
$dom = new DomDocument();
$dom->load("xml/library.xml");
$xpath = new DomXPath($dom);
$xpath->registerNamespace(
    "lib", "../xml/library"
);
$result = $xpath->query("//lib:title/text()");
print_r($result);
foreach ($result as $book) {
    echo $book->data;
}
CODE
);
echo '';
showcode(<<<'CODE'

CODE
);
echo '';
showcode(<<<'CODE'

CODE
);
echo '';
showcode(<<<'CODE'

CODE
);
echo '';
showcode(<<<'CODE'

CODE
);