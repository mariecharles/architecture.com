<?php
require_once "../helper/connect.php";

class Connexion
{
    private $username;

    private $password;
    private $bdd;

    public function __construct($username, $password)
    {

        $this->setUsername($username);
        $this->setPassword($password);
        $this->bdd = Database::getPdo();

    }

    public function verif()
    {

        $requete = $this->bdd->prepare("SELECT username, password FROM users WHERE username = :username");

        $requete->execute(array(
            'username' => $this->username));

        $reponse= $requete->fetch();
        if($reponse)
        {
            return "ok";
        }
        else
        {
            return "Le pseudo est inexistant";
        }

    }

    public function session()
    {
        $sql = "SELECT id FROM users WHERE username = :username";
        $requete = $this->bdd->prepare($sql);
        $requete->execute(array(
            'username'=> $this->username));
        $requete = $requete->fetch();
        $_SESSION['id'] = $requete['id'];
        $_SESSION['username'] = $this->username;

        return 1;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
}