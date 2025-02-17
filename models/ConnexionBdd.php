<?php
class ConnexionBdd
{
    protected string $host = "localhost";
    protected string $username = "squizgame";
    protected string $password = "s-quiz_game";
    protected string $dbName = "yannick-bossola_s-quiz_game";

    public function connexion()
    {
        try {
            $bdd  = new PDO("mysql:host=$this->host;dbname=$this->dbName;charset=utf8", $this->username, $this->password);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $bdd;
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }
}
