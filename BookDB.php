<?php

class BookDB
{
    private $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllBooks()
    {
        $query = $this->pdo->query("SELECT * FROM books");
        return $query->fetchAll();
    }

    public function addBook($title,$author,$year)
    {
        $query = $this->pdo->prepare("INSERT INTO books (title,author,published_year) VALUES(:title,:author,:published_year)");
        $query->execute(
                    [
                        'title'=>$title,
                        'author'=>$author,
                        'published_year'=>$year,
                    ]
                    );
        return $this->pdo->lastInsertId();
    }

    public function updateBook($title,$author,$year,$id)
    {
        $query = $this->pdo->prepare("UPDATE books SET title=:title,author=:author, published_year = :published_year WHERE id=:id");
        $query->execute(
            [
                'title'=>$title,
                'author'=>$author,
                'published_year'=>$year,
                'id'=>$id,
            ]
        );
        return $query->rowCount();
    }

    public function deleteBook($id)
    {
        $query = $this->pdo->prepare("DELETE FROM books WHERE id=:id");
        $query->execute(['id'=>$id]);
        return $query->rowCount();
    }
}//class here