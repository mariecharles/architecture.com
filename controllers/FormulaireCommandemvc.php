<?php require_once "../helper/connect.php";

class Commande
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::getPdo();
    }

    public function insert($param)
    {
        $sql = "INSERT INTO formulaire_client(
                    raisonsociale, 
                    fonction, 
                    activite, 
                    nom, 
                    adresse, 
                    codepostal, 
                    pays, 
                    telephone, 
                    fax, 
                    mail, 
                    zonegeographique, 
                    choixrevue )
                VALUES
               (:raisonsociale,:fonction,:activite, :nom, :adresse, :codepostal, :pays, :telephone, :fax, :mail, :zonegeographique, :choixrevue)";


        $requete = $this->pdo->prepare($sql);
        $requete->execute(array(
            'raisonsociale'     => $param['raisonsociale'],
            'fonction'          => $param['fonction'],
            'activite'          => $param['activite'],
            'nom'               => $param['nom'],
            'adresse'           => $param['adresse'],
            'codepostal'        => $param['codepostal'],
            'pays'              => $param['pays'],
            'telephone'         => $param['telephone'],
            'fax'               => $param['fax'],
            'mail'              => $param['mail'],
            'zonegeographique'  => $param['zonegeographique'],
            'choixrevue'        => $param['choixrevue']
        ));
    }
}
