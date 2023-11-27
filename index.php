<?php
require_once 'database.php';
require_once 'BookDB.php';

$bookDb = new BookDB($pdo);

$currId = $bookDb->addBook('My New Book','John Wick',1985);
$updateRecord = $bookDb->updateBook('Update My New Book','Update John Wick',2018,$currId);
$deletedRecord = $bookDb->deleteBook(1);
echo "Deleted $deletedRecord book(s)<br>";
var_dump($currId);
//$books = $bookDb->getAllBooks();
//
//foreach ($books as $mybook) {
//    var_dump($mybook['title']);
//}