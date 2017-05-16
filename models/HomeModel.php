<?php

namespace models;

use classes\Model;


class HomeModel extends Model {


    public function Index() {

        $sql = "SELECT `id`, `zone`, `img`, `date`, `num` FROM `magazine`";

        $this->_stmt = $this->pdo->prepare($sql);

        $datarow = $this->setResult();

        return $datarow;
    }
}