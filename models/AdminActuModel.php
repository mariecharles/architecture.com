<?php

namespace models;

use classes\Model;

use PDO;


class AdminActuModel extends Model {


    public function deleteElementAction() {

        $sql = "DELETE FROM `actu` WHERE id = :id LIMIT 1";

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
              `actu` 
            SET 
              `architecte`=:architecte,
              `realisations`=:realisations,
              `rubrique`=:rubrique,
              `lieu`=:lieu,
              `departement`=:departement,
              `contenu`=:contenu
            WHERE `id` = :id
            LIMIT 1
            ;";

        $this->_stmt = $this->pdo->prepare($sql);

        $this->_stmt->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
        $this->_stmt->bindValue(':architecte', $_POST['architecte'], PDO::PARAM_STR);
        $this->_stmt->bindValue(':realisations', $_POST['realisations'], PDO::PARAM_STR);
        $this->_stmt->bindValue(':rubrique', $_POST['id'], PDO::PARAM_STR);
        $this->_stmt->bindValue(':lieu', $_POST['lieu'], PDO::PARAM_STR);
        $this->_stmt->bindValue(':departement', $_POST['departement'], PDO::PARAM_INT);
        $this->_stmt->bindValue(':contenu', $_POST['contenu'], PDO::PARAM_STR);

        $this->_stmt->execute();

        if ($this->_stmt->errorCode() !== '00000') {
            die($this->_stmt->errorInfo()[2]);
        }


        header("Location: globalInterfaceView");


    }


    public function addElementAction() {

        $sql = "INSERT INTO 
              `actu`
            (`architecte`, `realisations`, `rubrique`, `lieu`, `departement`, `contenu`) 
            VALUES 
            (:architecte, :realisations, :rubrique, :lieu, :departement, :contenu)
            ;";


        $this->_stmt = $this->pdo->prepare($sql);

        $this->_stmt->bindValue(':architecte', $_POST['architecte'], PDO::PARAM_STR);
        $this->_stmt->bindValue(':realisations', $_POST['realisations'], PDO::PARAM_STR);
        $this->_stmt->bindValue(':rubrique', $_POST['rubrique'], PDO::PARAM_STR);
        $this->_stmt->bindValue(':lieu', $_POST['lieu'], PDO::PARAM_STR);
        $this->_stmt->bindValue(':departement', $_POST['departement'], PDO::PARAM_INT);
        $this->_stmt->bindValue(':contenu', $_POST['contenu'], PDO::PARAM_STR);


        $this->_stmt->execute();

        if ($this->_stmt->errorCode() !== '00000') {
            die($this->_stmt->errorInfo()[2]);
        }

        header("Location: globalInterfaceView");

    }

}