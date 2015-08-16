<?php
include_once('generalIncludes.php');
echo '<input id="chapter" type="hidden" value="8">';

echo '<h2>Chapter 8 - paragraph SimpleXML</h2>Parsing XML Documents<br/>NB. the file \'library.xml\' is in the root\xml of this project.<br/>';
echo 'Load an XML string, the procedural way';
showcode(<<<'CODE'
// Load an XML string
$xmlstr = file_get_contents('xml\library.xml');
$library = simplexml_load_string($xmlstr);
print_r($library);
CODE
);
echo 'Load an XML file, the procedural way';
showcode(<<<'CODE'
// Load an XML file
$library = simplexml_load_file('xml\library.xml');
print_r($library);
CODE
);
echo 'Load an XML string, the OO way';
showcode(<<<'CODE'
// Load an XML string
$xmlstr = file_get_contents('xml\library.xml');
$library = new SimpleXMLElement($xmlstr);
print_r($library);
CODE
);
echo 'Load an XML file, the OO way';
showcode(<<<'CODE'
// Load an XML file
$library = new SimpleXMLElement('xml\library.xml', NULL, true);
print_r($library);
CODE
);
echo '<h3>Listing 8.8: SimpleXML usage</h3>';
showcode(<<<'CODE'
$library = new SimpleXMLElement('xml\library.xml', NULL, true);
foreach ($library->book as $book) {
    echo $book['isbn'] . "\n";
    echo $book->title . "\n";
    echo $book->author . "\n";
    echo $book->publisher . "\n\n";
}
CODE
);
echo '<h3>Listing 8.9: Iterating with SimpleXML</h3>';
showcode(<<<'CODE'
$library = new SimpleXMLElement('xml\library.xml', NULL, true);
foreach ($library->children() as $child) {
    echo $child->getName() . ":\n";
    // Get attributes of this element
    foreach ($child->attributes() as $attr) {
        echo ' ' . $attr->getName() . ': ' . $attr . "\n";
    }
    // Get children
    foreach ($child->children() as $subchild) {
        echo ' ' . $subchild->getName() . ': ' . $subchild . "\n";
    }
    echo "\n";
}
CODE
);

echo '<h2>XPath Queries</h2>';
echo '<h3>Listing 8.10: XPath queries in SimpleXML</h3>';
showcode(<<<'CODE'
$library = new SimpleXMLElement('xml\library.xml', NULL, true);
// Search the root element
$results = $library->xpath('/library/book/title');
foreach ($results as $title) {
    echo $title . "\n";
}
// Search the first child element
$results = $library->book[0]->xpath('title');
foreach ($results as $title) {
    echo $title . "\n";
}
CODE
);

echo '<h3>Listing 8.11: Adding children in SimpleXML</h3>';
showcode(<<<'CODE'
$library = new SimpleXMLElement('xml\library.xml', NULL, true);
$book = $library->addChild('book');
$book->addAttribute('isbn', '0812550706');
$book->addChild('title', "Ender's Game");
$book->addChild('author', 'Orson Scott Card');
$book->addChild('publisher', 'Tor Science Fiction');
//header('Content-type: text/xml'); This doc is text/html
echo $library->asXML();
CODE
);
echo '<h3>Listing 8.12: xml\library.xml</h3>';
showXMLdoc(<<<'CODE'
<?xml version="1.0"?>
<library xmlns="http://example.org/library"
xmlns:meta="http://example.org/book-meta"
xmlns:pub="http://example.org/publisher"
xmlns:foo="http://example.org/foo">
<book meta:isbn="0345342968">
<title>Fahrenheit 451</title>
<author>Ray Bradbury</author>
<pub:publisher>Del Rey</pub:publisher>
</book>
</library>
CODE
);
echo '<h3>Listing 8.13: Returning document namespaces and Listing 8.14: Returning used namespaces</h3>' ;
echo '';
showcode(<<<'CODE'
$library2 = new SimpleXMLElement('library2.xml', NULL, true);
//Listing 8.13
$namespaces = $library2->getDocNamespaces();
foreach ($namespaces as $key => $value) {
echo "{$key} => {$value}\n";
}
echo "\n
And listing 8.14\n";
$namespaces = $library2->getNamespaces(true);
foreach ($namespaces as $key => $value) {
echo "{$key} => {$value}\n";
}
CODE
);
echo '<h2></h2>';
echo '';
showcode(<<<'CODE'
CODE
);

