<?php

class Book
{
    public static $bookCount = 0;
    public $title;
    private $author;
    protected $pages;

    public function __construct($title,$author,$pages)
    {
        $this->title = $title;
        $this->author=$author;
        $this->pages = $pages;
        self::$bookCount++;
    }
    public function getAuthor(){
        return $this->author;
    }
    public static  function getBookCount(){
        return self::$bookCount;
    }
}
$firstBook = new Book('First Book','John Wick',20);
$secondBook = new Book('Second Book','Bob',80);

var_dump($firstBook);
echo '<br><br>';
var_dump($secondBook);
echo '<br><br>';
echo '<br><br>';

var_dump(Book::getBookCount());
