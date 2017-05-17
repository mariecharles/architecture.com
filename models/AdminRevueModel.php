<?php

namespace models;

use classes\Model;


class AdminRevueModel extends Model {


    public function deleteElementAction() {

        $sql = "DELETE FROM `magazine` WHERE id = :id LIMIT 1";

        $this->_stmt = $this->pdo->prepare($sql);

        $this->_stmt->bindValue(':id', $_POST['id']);


        $this->_stmt->execute();

        header("Location: globalInterfaceView");

    }
}