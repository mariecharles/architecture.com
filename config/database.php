<?php

namespace config;

abstract class Database {

    private $db_host = 'localhost';
    private $db_name = 'architecture';
    private $db_user = 'root';

    private $pdo;
    private $errorMessage;




    public function __construct()
    {
        $source = 'mysql:host=' . $this->db_host . ';dbname=' . $this->db_name;

        try {

            $this->pdo = new PDO($source, $this->db_user);

        } catch(PDOException $exception) {

            die($this->errorMessage = 'ERROR :'. $exception->getMessage());
        }

        $this->pdo->exec("SET NAMES UTF8");

    }

};