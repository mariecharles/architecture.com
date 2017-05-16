<?php

namespace models;

use classes\Model;


class MagazineModel extends Model {


    public function pageMagazine() {

        $sql = "SELECT `id`, `zone`, `img`, `date`, `num` FROM `magazine` WHERE `id` = :id";

        $this->_stmt = $this->pdo->prepare($sql);

        $this->_stmt->bindValue(':id', $_GET['id']);


        $datarow = $this->setResult();


        return $datarow;


    }
}