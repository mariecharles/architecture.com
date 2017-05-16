<?php

namespace models;

use classes\Model;


class AdminGlobalListModel extends Model {


    public function listRevues() {

        $sql = "SELECT `id`, `zone`, `img`, `date`, `num` FROM `magazine`";

        $this->_stmt = $this->pdo->prepare($sql);

        $datarow = $this->setResult();

        return $datarow;
    }

    public function listActu() {

        $sql = "SELECT `id`, `date`, `architecte`, `réalisations`, `rubrique`, `lieu`, `departement`, `contenu` FROM `actu`";

        $this->_stmt = $this->pdo->prepare($sql);

        $datarow = $this->setResult();


        return $datarow;

    }


}