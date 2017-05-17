<?php

namespace models;

use classes\Model;


class ArticleModel extends Model {


    public function pageFromActu() {

        $sql = "SELECT `id`, `date`, `architecte`, `realisations`, `rubrique`, `lieu`, `departement`, `contenu` FROM `actu` WHERE `id` = :id";

        $this->_stmt = $this->pdo->prepare($sql);

        $this->_stmt->bindValue(':id', $_GET['id']);


        $datarow = $this->setResult();


        return $datarow;


    }
}