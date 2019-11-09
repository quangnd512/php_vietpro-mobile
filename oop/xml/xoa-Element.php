<?php
$domdoc = new DOMDocument('1.0', 'utf-8');
$domdoc->formatOutput = TRUE;
$domdoc->preserveWhiteSpace = FALSE;
$domdoc->load('books.xml');

$books = $domdoc->documentElement;
$books_item = $books->childNodes->item(0);

//Xóa Element con
$books->removeChild($books_item);

//Xóa Element cháu
$books = $domdoc->documentElement;
$book_02 = $books->childNodes->item(1);
$title = $book_02->childNodes->item(0);
$book_02->removeChild($title);


$domdoc->save('books.xml');