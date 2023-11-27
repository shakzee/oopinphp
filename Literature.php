<?php

abstract  class Literature
{
    protected $title;

    public function __construct($title)
    {
        $this->title = $title;
    }
    abstract public  function getContent();
    public function getTitle(){
        return $this->title;
    }
}