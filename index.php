<?php
require("controllers/controller.php");
try {
    if ( isset($_GET['action']) )
    {
        $action = htmlentities($_GET['action']);
        switch ($action) {
            case 'pompier':
                if ( isset($_GET['id']) )
                {
                    $id = htmlentities($_GET['id']);
                    pompier($id);
                };
        }
    }
    else {
        listePompiers();
    }
}
catch (Exception $e){
    $msgErreur = $e->getMessage();
    erreur($msgErreur);
}