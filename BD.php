<?php

class db
{

    private $db;

    /**
     * Подключение к БД
     */
    public function __construct()
    {
        $this->db = new PDO('mysql:host=10.100.3.80;dbname=20269_courses', '20269', 'xiiiiq');
    }



}