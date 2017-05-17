<?php

namespace models;

use classes\Model;


class ActuModel extends Model {


    public function listActu() {

        $sql = "SELECT `id`, `date`, `architecte`, `realisations`, `rubrique`, `lieu`, `departement`, `contenu` FROM `actu`";

        $this->_stmt = $this->pdo->prepare($sql);

        $datarow = $this->setResult();


        return $datarow;


    }
}