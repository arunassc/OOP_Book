<?php

class Book
{
    private $title;
    private $pages;
    private $releaseYear;

    public function __construct(string $title= "" , int $pages= 0 , int $releaseYear= 0)
    {
        $this->title = $title;
        $this->pages = $pages;
        $this->releaseYear = $releaseYear;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getPages()
    {
        return $this->pages;
    }
    public function getReleaseYear()
    {
        return $this->releaseYear;
    }
      
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setPages($pages)
    {
        $this->pages = $pages;
    }
    public function setReleaseYear($releaseYear)
    {
        $this->releaseYear = $releaseYear;
    }
}
?>