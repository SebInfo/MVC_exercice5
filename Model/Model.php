<?php
class Model {
    private $bdd;
    function __construct(){
        $dsn = "mysql:host=127.0.0.1;port=8889;dbname=DSC";
        $user = "root";
        $pass = "root"; 
        try {
            $this->bdd = new PDO ($dsn,$user,$pass);
        }
        catch(PDOException $e) {
            $bdd = null;
            $errorMessage = date('l jS \of F Y h:i:s A ');
            $errorMessage .= " Le code erreur est : ".$e->getCode();
            $errorMessage .= " Le message : ".$e->getMessage();
            $errorMessage .= " Le fichier : ".$e->getFile();
            $errorMessage .= "\n";
            // Chemin du fichier log
            $logFile = "errors.log";
            // Chemin du fichier accès non autorisé 
            $logFileAccess = "access.log";
            // Enregistrement du message d'erreur dans le fichier log
            error_log($errorMessage, 3, $logFile);
            if ($e->getCode() == 1045)
            {
                error_log($errorMessage, 3, $logFileAccess);
            }
        }
    }

    protected function executerRequete($sql, $params = null) {
        if ( $this->bdd != null) {
            if ($params == null ) {
                $resultat = $this->bdd->query($sql);
            }
            else {
                $resultat = $this->bdd->prepare($sql) or die ("pb ici");
                $resultat->execute($params) ;
            }
            return $resultat;
        }
        else
            return false;
     }
}