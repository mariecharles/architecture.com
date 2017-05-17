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
        $sql = "INSERT INTO formulaire-client(
                    raison_sociale, 
                    fonction, 
                    activite, 
                    nom, 
                    adresse, 
                    code_postal, 
                    pays, 
                    telephone, 
                    fax, 
                    mail, 
                    zone_geographique, 
                    choix_revue )
                VALUES
               (:raison_sociale,:fonction,:activite, :nom, :adresse, :code_postal, :pays, :telephone, :fax, :mail, :zone_geographique, :choix_revue)";


        $requete = $this->pdo->prepare($sql);
        $requete->execute(array(
            'raison_sociale'     => $param['raison_sociale'],
            'fonction'      => $param['fonction'],
            'activite'     => $param['activite'],
            'nom'     => $param['nom'],
            'adresse'      => $param['adresse'],
            'code_postal'     => $param['code_postal'],
            'pays'     => $param['pays'],
            'telephone'      => $param['telephone'],
            'fax'     => $param['fax'],
            'mail'     => $param['mail'],
            'zone_geographique'      => $param['zone_geographique'],
            'choix_revue'     => $param['choix_revue']
        ));
    }
