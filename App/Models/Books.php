<?php

namespace App\Models;


class Books
{
    public $author;
    public $alias;
    public $url;
    public $book_type;
    public $class_id;
    public $year;
    public $title;






//    public static function getAllBooks()
//    {
//
//        try {
//            $dbh = static::getDB();
//
//            $result = $dbh->prepare("
//                SELECT author, alias, url, book_type, class_id, year, title
//                FROM books
//            ");
//
//
//
//            $result->execute();
//
//            $books = $result->fetchAll(PDO::FETCH_ASSOC);
//
//
//        } catch (\PDOException $e) {
//            echo $error = 'Error fetching books: ' . $e->getMessage();
//            exit();
//        }
//
//
//        return $books;
//    }

}