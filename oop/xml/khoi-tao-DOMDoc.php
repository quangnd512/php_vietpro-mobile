<?php
// xử dụng lớp DOM document
    $domdoc = new DOMDocument('1.0','utf-8'); //Khởi tạo đối tượng
    $domdoc->formatOutput = TRUE; //Định dạng XML đúng chuẩn

// Tạo Element cha
    $books = $domdoc->createElement('Books');
    $domdoc->appendChild($books); //Add element con vào element cha

    $book = $domdoc->createElement('Book');
    $books->appendChild($book);

    //Tạo thuộc tính
    $atb = $domdoc->createAttribute('ID');
    $atb->appendChild($domdoc->createTextNode('01'));
    $book->appendChild($atb);

// Tạo Element có chứa nội dung
    $title = $domdoc->createElement('Title');
    $title->appendChild($domdoc->createTextNode('Hoc lap trinh PHP'));
    $book->appendChild($title);

    $author = $domdoc->createElement('Author');
    $author->appendChild($domdoc->createTextNode('QuangND'));
    $book->appendChild($author);





//Tạo Element thứ 2
    $book = $domdoc->createElement('Book');
    $books->appendChild($book);

    $atb = $domdoc->createAttribute('ID');
    $atb->appendChild($domdoc->createTextNode('02'));
    $book->appendChild($atb);

    $title = $domdoc->createElement('Title');
    $title->appendChild($domdoc->createTextNode('Hoc lap trinh Wordpress'));
    $book->appendChild($title);

    $author = $domdoc->createElement('Author');
    $author->appendChild($domdoc->createTextNode('512'));
    $book->appendChild($author);
    



    $domdoc->save('books.xml'); //Save xml
?>