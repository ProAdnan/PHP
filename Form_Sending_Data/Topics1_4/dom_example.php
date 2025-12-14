<?php


// $dom = new DOMDocument();

// $dom->loadHTML('<html><body><h1 id="title">Test Dom</h1></body></html>');

// $title = $dom->getElementById("title");

// $title->nodeValue = "Hello Adnan From Dom";

// echo $dom->saveHTML();


$dom = new DOMDocument();

$dom->loadHTML('<html><body><h1 id="head1" >Test 1 </h1><h1 >Test 2</h1><h1>Test 3</h1></body></html>');

$title = $dom->getElementsByTagName("h1");


foreach ($title as $node) {

$title->nodeValue = "<br>";


}

$new_item=$dom->createElement("h2","h2 created dynamiccly");

$dom->getElementsByTagName("body")[0]->appendChild($new_item);

$h1 = $dom->getElementById("head1");

$dom->getElementsByTagName("body")[0]->removeChild($h1);


echo $dom->saveHTML();







?>