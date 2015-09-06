<?php
include_once('generalIncludes.php');
echo '<input id="chapter" type="hidden" value="8">';

echo '<h2>Chapter 8 Data Formats and Types - Paragraph DOM</h2>Loading and saving XML Documents, XPATH queries and Modifying XML documents<br/>
...next page for this paragraph<br/>';
echo '<h3>Listing 8.18: Adding an element with DOM</h3>';
showcode(<<<'CODE'
$dom = new DomDocument();
$dom->load("xml/library.xml");
$book = $dom->createElement("book");
$book->setAttribute("meta:isbn", "9781940111001");
$title = $dom->createElement("title");
$text = $dom->createTextNode("Mastering the SPL Library");
$title->appendChild($text);
$book->appendChild($title);
$author = $dom->createElement("author","Joshua Thijssen");
$book->appendChild($author);
$publisher = $dom->createElement(
"pub:publisher", "musketeers.me, LLC."
);
$book->appendChild($publisher);
$dom->appendChild($book);
print_r($dom);
CODE
);
//echo '<h3>Listing 8.19: Moving a node with DOM</h3>';
//showcode(<<<'CODE'
//$dom = new DomDocument();
//$dom->load("xml/library.xml");
//$xpath = new DomXPath($dom);
//$xpath->registerNamespace("lib",
//                          "http://example.org/library");
//$result = $xpath->query("//lib:book");
//$result->item(1)->parentNode->insertBefore(
//    $result->item(1), $result->item(0)
//);
//print_r($result);
//CODE
//);
echo '<h3>Listing 8.20: Appending a node with DOM</h3>';
showcode(<<<'CODE'
$dom = new DomDocument();
$dom->load("xml/library.xml");
$xpath = new DomXPath($dom);
$xpath->registerNamespace("lib",
                          "http://example.org/library");
$result = $xpath->query("//lib:book");
print_r($result->item(0));
$newchild = $result->item(0);
$result->item(1)->parentNode->appendChild($newchild);
print_r($result);
CODE
);
echo '<h3>Listing 8.21: Duplicating a node with DOM</h3>';
showcode(<<<'CODE'
$dom = new DomDocument();
$dom->load("xml/library.xml");
$xpath->registerNamespace("lib",
                          "http://example.org/library");
$result = $xpath->query("//lib:book");
$clone = $result->item(0)->cloneNode();
$result->item(1)->parentNode->appendChild($clone);
print_r($result);
CODE
);

echo '<h3>Listing 8.22: Modifying XML with DOM</h3>';
showcode(<<<'CODE'
$xml = <<<XML
<xml>
<text>some text here</text>
</xml>
XML;
$dom = new DOMDocument();
$dom->loadXML($xml);
$xpath = new DomXpath($dom);
$node = $xpath->query("//text/text()")->item(0);
$node->data = ucwords($node->data);
echo $dom->saveXML();
print_r($dom);
CODE
);

echo '';
showcode(<<<'CODE'

CODE
);