<?php
include 'Book.php';
class Novel extends Book
{
    public $genre;
    public function __construct($title, $author, $pages,$genre)
    {
        parent::__construct($title, $author, $pages);
        $this->genre = $genre;
    }

}

$novel1 = new Novel('Third Book','Alex',500,'Science fiction');
var_dump($novel1);
