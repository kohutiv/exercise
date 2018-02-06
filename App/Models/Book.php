<?php

namespace App\Models;


use App\Model;

class Book extends Model
{
    public $id;
    public $author;
    public $alias;
    public $url;
    public $book_type;
    public $class_id;
    public $year;
    public $title;

    const TABLE = 'books';

}