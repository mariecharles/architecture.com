<?php require_once "../helper/connect.php";

class Actu
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::getPdo();
    }

    public function select($id)
    {
        $sql = "SELECT 
                 id,
                 date,
                 architecte,
                 realisations,
                 rubrique,
                 lieu,
                 departement,
                 img
                FROM
                 actu
                WHERE
                id = :id";

        $requete = $this->pdo->prepare($sql);
        $requete->execute(array(
            'id' => $id
        ));
        return $requete->fetch();
    }


    public function selectAll()
    {
        $sql = "SELECT 
                 id,
                 date,
                 architecte,
                 realisations,
                 rubrique,
                 lieu,
                 departement,
                 img
                FROM
                 actu";

        $requete = $this->pdo->prepare($sql);
        $requete->execute();
        return $requete->fetchAll();
    }

    public function insert($param)
    {
        $sql = "INSERT INTO actu(
                   date, architecte, realisations,
                   rubrique, lieu, departement,img)
                VALUES
               (:date,:architecte,:realisations,:rubrique, :lieu, :departement, :img)";


        $requete = $this->pdo->prepare($sql);
        $requete->execute(array(
            'date'            => $param['date'],
            'architecte'      => $param['architecte'],
            'realisations'    => $param['realisations'],
            'rubrique'        => $param['rubrique'],
            'lieu'            => $param['lieu'],
            'departement'     => $param['departement'],
            'img'             =>$param ['img']
        ));
    }

    public function delete($id)
    {
        $sql = "DELETE FROM actu WHERE id = :id";
        $requete = $this->pdo->prepare($sql);
        $requete->execute(array(
            'id' => $id
        ));
    }

    // update modifié par Souli selon le point de 18h avec Yann. à tester avec Base de données

    public function update($param)
    {
        $sql = "UPDATE 
                actu
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
            'date'            => $param['date'],
            'architecte'      => $param['architecte'],
            'realisations'    => $param['realisations'],
            'rubrique'        => $param['rubrique'],
            'lieu'            => $param['lieu'],
            'departement'     => $param['departement'],
            'img'             => $param['img']
        ));
    }
}