--TEST--
DOMCharacterData::deleteData() with count exceeding string size.
--CREDITS--
Eric Lee Stewart <ericleestewart@gmail.com>
# TestFest Atlanta 2009-05-24
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
$document = new DOMDocument;
$root = $document->createElement('root');
$document->appendChild($root);

$cdata = $document->createCDATASection('test');
$root->appendChild($cdata);
$cdata->deleteData(1, 10);
var_dump($cdata->data);
?>
--EXPECTF--
%unicode|string%(%d) "t"