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

    public function pageFromAbonnement() {

        $sql = "SELECT `id`, `raisonsociale`, `fonction`, `activite`, `nom`, `adresse`, `codepostal`, `pays`, `telephone`, `fax`, `mail`, `zonegeographique`, `duree` FROM `abonnement` WHERE `id` = :id";

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

    public function addElementAction() {


        $sql = "INSERT INTO 
              `commande`
            (`raisonsociale`, `fonction`, `activite`, `nom`, `adresse`, `codepostal`, `pays`, `telephone`, `fax`, `mail`, `zonegeographique`, `choixrevue`, `quantite`) 
            VALUES 
            (:raisonsociale, :fonction, :activite, :nom, :adresse, :codepostal, :pays, :telephone, :fax, :mail, :zonegeographique, :choixrevue, :quantite)
            ;";

        $this->_stmt = $this->pdo->prepare($sql);

        $this->_stmt->bindValue(':raisonsociale', $_POST['raisonsociale']);
        $this->_stmt->bindValue(':fonction', $_POST['fonction']);
        $this->_stmt->bindValue(':activite', $_POST['activite']);
        $this->_stmt->bindValue(':nom', $_POST['nom']);
        $this->_stmt->bindValue(':adresse', $_POST['adresse']);
        $this->_stmt->bindValue(':codepostal', $_POST['codepostal']);
        $this->_stmt->bindValue(':pays', $_POST['pays']);
        $this->_stmt->bindValue(':telephone', $_POST['telephone']);
        $this->_stmt->bindValue(':fax', $_POST['fax']);
        $this->_stmt->bindValue(':mail', $_POST['mail']);
        $this->_stmt->bindValue(':zonegeographique', $_POST['zonegeographique']);
        $this->_stmt->bindValue(':choixrevue', $_POST['choixrevue']);
        $this->_stmt->bindValue(':quantite', $_POST['quantite']);


        $this->_stmt->execute();

        if ($this->_stmt->errorCode() !== '00000') {
            die($this->_stmt->errorInfo()[2]);
        }

        header("Location: ../views/user/confirm.php");

    }

    public function addElementAction2() {


        $sql = "INSERT INTO 
              `abonnement`
            (`raisonsociale`, `fonction`, `activite`, `nom`, `adresse`, `codepostal`, `pays`, `telephone`, `fax`, `mail`, `zonegeographique`, `duree`) 
            VALUES 
            (:raisonsociale, :fonction, :activite, :nom, :adresse, :codepostal, :pays, :telephone, :fax, :mail, :zonegeographique, :duree)
            ;";

        $this->_stmt = $this->pdo->prepare($sql);

        $this->_stmt->bindValue(':raisonsociale', $_POST['raisonsociale']);
        $this->_stmt->bindValue(':fonction', $_POST['fonction']);
        $this->_stmt->bindValue(':activite', $_POST['activite']);
        $this->_stmt->bindValue(':nom', $_POST['nom']);
        $this->_stmt->bindValue(':adresse', $_POST['adresse']);
        $this->_stmt->bindValue(':codepostal', $_POST['codepostal']);
        $this->_stmt->bindValue(':pays', $_POST['pays']);
        $this->_stmt->bindValue(':telephone', $_POST['telephone']);
        $this->_stmt->bindValue(':fax', $_POST['fax']);
        $this->_stmt->bindValue(':mail', $_POST['mail']);
        $this->_stmt->bindValue(':zonegeographique', $_POST['zonegeographique']);
        $this->_stmt->bindValue(':duree', $_POST['duree']);


        $this->_stmt->execute();

        if ($this->_stmt->errorCode() !== '00000') {
            die($this->_stmt->errorInfo()[2]);
        }

        header("Location: ../views/user/confirm.php");

    }
}