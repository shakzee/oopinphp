<?php
require_once 'Readable.php';
class Book implements Readable
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
    public function read()
    {
        return "I am Reading: ". $this->title;
    }
}

$firstBook = new Book('First Book','John Wick',20);
echo $firstBook->read();
//$secondBook = new Book('Second Book','Bob',80);

// var_dump($firstBook);
// echo '<br><br>';
// var_dump($secondBook);
// echo '<br><br>';
// echo '<br><br>';

// var_dump(Book::getBookCount());
