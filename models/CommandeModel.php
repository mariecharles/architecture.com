<?php

namespace models;

use classes\Model;


class CommandeModel extends Model {


    public function pageFromCommande() {

        $sql = "SELECT `id`, `raisonsociale`, `fonction`, `activite`, `nom`, `adresse`, `codepostal`, `pays`, `telephone`, `fax`, `mail`, `zonegeographique`, `choixrevue` FROM `commande` WHERE `id` = :id";

        $this->_stmt = $this->pdo->prepare($sql);

        $this->_stmt->bindValue(':id', $_GET['id']);


        $datarow = $this->setResult();


        return $datarow;


    }

    public function deleteElementAction() {


        $sql = "DELETE FROM `commande` WHERE id = :id LIMIT 1";

        $this->_stmt = $this->pdo->prepare($sql);

        $this->_stmt->bindValue(':id', $_POST['id']);


        $this->_stmt->execute();

        if ($this->_stmt->errorCode() !== '00000') {
            die($this->_stmt->errorInfo()[2]);
        }

        header("Location: globalInterfaceView");

    }
}