<?php
require_once("models/PompierManager.class.php");
require_once("models/Pompier.class.php");

function pompier($id)
{
    $pompiers = new PompierManager();
    $unPompier = $pompiers->getPompier($id);
    require_once("views/unPompier.php");
}

function listePompiers()
{
    $lesPompiers = new PompierManager();
    if ($pompiers = $lesPompiers->getAllPompiers())
    {
        require_once("views/listePompiers.php");
    }
    else
    {
        require_once("views/erreur.php");
    }
}

function erreur($msgErreur) 
{
    require_once("views/erreur.php");
}