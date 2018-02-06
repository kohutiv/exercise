<?php

namespace App\Models;


use App\Db;

class Chapters
{
    public static function getAllChaptersByBookId($book_id) {

        $db = new Db();

        $sql = 'SELECT * FROM chapters WHERE book_id = :book_id';

    }


}