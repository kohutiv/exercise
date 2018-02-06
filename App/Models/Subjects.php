<?php

require_once 'App/Model.php';

class Subjects
{

    public function getSubjectsInfo($subjects_id){


//    echo $subjects_id;


        $db = new Db;

        $sql = "SELECT *
             	 FROM subjects              	       	           	 
             	 WHERE id =  $subjects_id            	 
             	 ";

        $result = $db->query($sql);



        return $result;


    }
}