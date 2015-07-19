<?php
include_once('index.php');

echo '<h2>Chapter 8 - paragraph Extensible Markup Language</h2>';
echo "<h3>SimpleXML</h3>Parsing XML Documents<br/>";
echo 'Load an XML string, the procedural way';
showcode(<<<'CODE'
// Load an XML string
$xmlstr = file_get_contents('library.xml');
$library = simplexml_load_string($xmlstr);
print_r($library);
CODE
);
echo 'Load an XML file, the procedural way';
showcode(<<<'CODE'
// Load an XML file
$library = simplexml_load_file('library.xml');
print_r($library);
CODE
);
echo 'Load an XML string, the OO way';
showcode(<<<'CODE'
// Load an XML string
$xmlstr = file_get_contents('library.xml');
$library = new SimpleXMLElement($xmlstr);
print_r($library);
CODE
);
echo 'Load an XML file, the OO way';
showcode(<<<'CODE'
// Load an XML file
$library = new SimpleXMLElement('library.xml', NULL, true);
print_r($library);
CODE
);
echo '<h3>Listing 8.8: SimpleXML usage</h3>';
showcode(<<<'CODE'
$library = new SimpleXMLElement('library.xml', NULL, true);
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
$library = new SimpleXMLElement('library.xml', NULL, true);
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
$library = new SimpleXMLElement('library.xml', NULL, true);
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

echo '<h2></h2>';
showcode(<<<'CODE'
CODE
);
echo '<h2></h2>';
echo '';
showcode(<<<'CODE'
CODE
);

