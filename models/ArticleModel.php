<?php

namespace models;

use classes\Model;


class ArticleModel extends Model {


    public function PageArticle() {

        $sql = "SELECT `id`, `date`, `architecte`, `réalisations`, `rubrique`, `lieu`, `departement`, `contenu` FROM `actu` WHERE `id` = :id";

        $this->_stmt = $this->pdo->prepare($sql);

        $this->_stmt->bindValue($_GET['id']);


        $datarow = $this->setResult();

        return $datarow;
    }
}