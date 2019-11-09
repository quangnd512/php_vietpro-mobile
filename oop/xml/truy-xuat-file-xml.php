<?php
$domdoc = new DOMDocument('1.0','utf-8');
$domdoc->formatOutput = TRUE;
$domdoc->preserveWhiteSpace = FALSE;
$domdoc->load('books.xml');


//Truy xuất từ Element bên ngoài tới Element bên trong
$books = $domdoc->getElementsByTagName('Books')->item(0); //Truy xuất tới Element cha
$book = $books->getElementsByTagName('Book')->item(0); //Truy xuất tới Element con đầu tiên
$title = $book->getElementsByTagName('Title')->item(0)->nodeValue; 
    //nodeValue: TRuy xuất đến giá trị của Element  
    //Truy xuất tới Element title
echo $title;
echo '<br>';


//Truy xuất trực tiếp tới Element cần lấy
$title04 = $domdoc->getElementsByTagName('Title')->item(2)->nodeValue;
echo $title04;
echo '<br>';

//Sửa Tag của Element
$domdoc->getElementsByTagName('Title')->item(2)->nodeValue = "Học đồ họa với Photoshop";

//Truy xuất lấy thuộc tính
$id = $book->getAttribute('ID');
echo $id;

//Sửa thuộc tính
$id_new = $book->setAttribute('ID', '08');

$domdoc->save('books.xml');