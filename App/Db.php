<?php

namespace App;

use \PDO;

class Db
{
    protected $dbh;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=12baliv';
        $this->dbh = new PDO($dsn, 'root', '');
        $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->dbh->exec('SET NAMES "utf8"');
    }

    public function execute($sql)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        return $res;
    }

    public function query($sql, $class)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        if (false !== $res) {
            return $sth->fetchAll(PDO::FETCH_CLASS, $class);
        }
        return [];
    }
}