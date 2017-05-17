<?php require_once "../helper/connect.php";

class Magazine
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
                 zone,
                 img,
                 date
                FROM
                 magazine
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
                 zone,
                 img,
                 date
                FROM
                 magazine";

        $requete = $this->pdo->prepare($sql);
        $requete->execute();
        return $requete->fetchAll();
    }

    public function insert($param)
    {
        $sql = "INSERT INTO magazine(
                 zone,
                 img,
                 date)
                VALUES
               (:zone,:img,:date)";


        $requete = $this->pdo->prepare($sql);
        $requete->execute(array(
            'zone'     => $param['zone'],
            'img'      => $param['img'],
            'date'     => $param['date']
        ));
    }

    public function delete($id)
    {
        $sql = "DELETE FROM magazine WHERE id = :id";
        $requete = $this->pdo->prepare($sql);
        $requete->execute(array(
            'id' => $id
        ));
    }

    // update modifié par Souli selon le point de 18h avec Yann. à tester avec Base de données

    public function update($param)
    {
        $sql = "UPDATE 
                magazine
                SET
                 zone = :zone,
                 img = :img,
                date = :date
                WHERE
                id = :id";

        $requete = $this->pdo->prepare($sql);
        $requete->execute(array(
            'zone'     => $param['zone'],
            'img'      => $param['img'],
            'date'     => $param['date']
        ));
    }
}