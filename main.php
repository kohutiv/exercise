<?php
error_reporting(-1);

require_once __DIR__ . '/vendor/functions.php';
require_once __DIR__ . '/autoload.php';

use App\Models\Chapters;

use App\Models\Book;




$books = Book::findAll();



foreach ($books as $book){


    echo $book->title;

//    $all_chapters = Chapters::getAllChaptersByBookId($book->id);

    die();
}

















