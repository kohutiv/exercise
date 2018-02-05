<?php

namespace App\Models;
use App\Db;


class Book
{
    public $id;
    public $author;
    public $alias;
    public $url;
    public $book_type;
    public $class_id;
    public $year;
    public $title;
    public $count;


    public static function findAll(){
        $db = new Db();

        return $db->query(
            'SELECT id, author, alias, url, book_type, class_id, year, title FROM books',
            'App\Models\Book'
        );
    }





}