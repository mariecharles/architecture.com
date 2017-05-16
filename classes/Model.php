<?php
namespace classes;

use PDO;

abstract class Model {

    protected $_stmt;
    protected $db_host = 'localhost';
    protected $db_name = 'architecture';
    protected $db_user = 'root';

    protected $pdo;
    protected $errorMessage;




    public function __construct()
    {

        $source = 'mysql:host=' . $this->db_host . ';dbname=' . $this->db_name;  // On set le DSN en fonction de ce que l'on a assigné

        try {

            $this->pdo = new PDO($source, $this->db_user, $this->db_user);

        } catch(PDOException $exception) {

            die($this->errorMessage = 'ERROR :'. $exception->getMessage());
        }

        $this->pdo->exec("SET NAMES UTF8");

    }


    public function setResult() {

        $this->_stmt->execute();
        return $this->_stmt->fetchAll(PDO::FETCH_ASSOC);

    }
}