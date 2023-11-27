<?php
 require_once 'LoggerTrait.php';
class Book2
{
    use LoggerTrait;
}

$mybook = new Book2();
//var_dump($mybook);
echo $mybook->log("This is my log message");
