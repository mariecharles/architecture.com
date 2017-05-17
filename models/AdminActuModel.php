<?php

namespace models;

use classes\Model;


class AdminActuModel extends Model {


    public function deleteElementAction() {

        $sql = "DELETE FROM `actu` WHERE id = :id LIMIT 1";

        $this->_stmt = $this->pdo->prepare($sql);

        $this->_stmt->bindValue(':id', $_POST['id']);


        $this->_stmt->execute();

        header("Location: globalInterfaceView");

    }

    public function edditElementAction($param)
    {
        $sql = "UPDATE 
                `actu`
                SET
                date = :date,
                architecte = :architecte,
                realisations = :realisations,
                rubrique = :rubrique,
                lieu = :lieu,
                departement = :departement,
                img = :img
                WHERE 
                id = :id";

        $requete = $this->pdo->prepare($sql);
        $requete->execute(array(
            'id'            => $param['id'],
            'date'            => $param['date'],
            'architecte'      => $param['architecte'],
            'realisations'    => $param['realisations'],
            'rubrique'        => $param['rubrique'],
            'lieu'            => $param['lieu'],
            'departement'     => $param['departement'],
            'img'             => $param['img']


        ));

        header("Location: globalInterfaceView");


    }

}