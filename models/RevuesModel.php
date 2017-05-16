<?php

namespace models;

use classes\Model;


class RevuesModel extends Model {


    public function PageRevues() {

        $sql = "SELECT `id`, `zone`, `img`, `date`, `num` FROM `magazine`";

        $this->_stmt = $this->pdo->prepare($sql);

        $datarow = $this->setResult();

        return $datarow;
    }
}