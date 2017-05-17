<?php

namespace models;

use classes\Model;

use PDO;


class AdminRevueModel extends Model {


    public function deleteElementAction() {

        $sql = "DELETE FROM `magazine` WHERE id = :id LIMIT 1";

        $this->_stmt = $this->pdo->prepare($sql);

        $this->_stmt->bindValue(':id', $_POST['id']);


        $this->_stmt->execute();

        if ($this->_stmt->errorCode() !== '00000') {
            die($this->_stmt->errorInfo()[2]);
        }

        header("Location: globalInterfaceView");


    }


    public function editElementAction(){
        $sql = "UPDATE 
              `magazine` 
            SET 
              `zone`=:zone,
              `img`=:img,
              `date`=:date,
              `num`=:num
            WHERE `id` = :id
            LIMIT 1
            ;";

        $this->_stmt = $this->pdo->prepare($sql);

        $this->_stmt->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
        $this->_stmt->bindValue(':zone', $_POST['zone'], PDO::PARAM_STR);
        $this->_stmt->bindValue(':img', $_POST['img'], PDO::PARAM_STR);
        $this->_stmt->bindValue(':date', $_POST['date'], PDO::PARAM_STR);
        $this->_stmt->bindValue(':num', $_POST['num'], PDO::PARAM_INT);

        $this->_stmt->execute();

        if ($this->_stmt->errorCode() !== '00000') {
            die($this->_stmt->errorInfo()[2]);
        }


        header("Location: globalInterfaceView");


    }

    public function addElementAction() {

        $sql = "INSERT INTO 
              `magazine`
            (`zone`, `date`, `num`, `img`) 
            VALUES 
            (:zone, :date, :num, :img)
            ;";

        $this->_stmt = $this->pdo->prepare($sql);

        $this->_stmt->bindValue(':zone', $_POST['zone'], PDO::PARAM_STR);
        $this->_stmt->bindValue(':date', $_POST['date'], PDO::PARAM_STR);
        $this->_stmt->bindValue(':num', $_POST['num'], PDO::PARAM_INT);
        $this->_stmt->bindValue(':img', $_POST['img'], PDO::PARAM_STR);


        $this->_stmt->execute();

        if ($this->_stmt->errorCode() !== '00000') {
            die($this->_stmt->errorInfo()[2]);
        }

        header("Location: globalInterfaceView");

    }
}