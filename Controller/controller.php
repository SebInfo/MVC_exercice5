<?php
require_once("Model/Pompier.php");

function pompier($id)
{
    $pompiers = new Pompier();
    $unPompier = $pompiers->getPompier($id);
    require_once("Views/UnPompier.php");
}

function listePompiers() 
{
    $pompier = new Pompier();
    if ($pompiers = $pompier->getAllPompiers())
    {
        require_once("Views/view.php");
    }
}

function erreur($msgErreur) 
{
    require_once("Views/erreur.php");
}