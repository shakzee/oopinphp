<?php
require_once 'Literature.php';
class Novel extends Literature
{
    private  $content;
    public function __construct($title,$content)
    {
        parent::__construct($title);
        $this->content = $content;
    }
    public function getContent()
    {
        return $this->content;
    }
}

$mynovel = new Novel('Here is my Title','Hee is my Contetn');
echo $mynovel->getTitle();
echo '<br>';
echo '<br>';
    echo $mynovel->getContent();
