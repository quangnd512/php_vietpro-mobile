<?php
$domdoc = new DOMDocument('1.0', 'utf-8');
$domdoc->formatOutput = TRUE;
$domdoc->preserveWhiteSpace = FALSE;

//Tải nội dung
$domdoc->load('books.xml');

//Xác định vị trí Element gốc
$books= $domdoc->documentElement;

//Lấy vị trí Element con cuối cùng
$book_item = $books->childNodes->item(2);

//Thêm mới Element con
$book = $domdoc->createElement('Book');
$books->appendChild($book);
$atb = $domdoc->createAttribute('ID');
$atb->appendChild($domdoc->createTextNode('03'));
$book->appendChild($atb);
$title = $domdoc->createElement('Title');
$title->appendChild($domdoc->createTextNode('Hoc lap trinh Laravel'));
$book->appendChild($title);
$author = $domdoc->createElement('Author');
$author->appendChild($domdoc->createTextNode('KMA'));
$book->appendChild($author);

//Bổ sung Element con đã thêm vào
$books->insertBefore($book, $book_item);

$domdoc->save('books.xml');