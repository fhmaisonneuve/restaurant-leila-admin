<?php

/**
 *  Manipulation des categories du menu des plats du restaurant
 */


/**
 * Cherche les categories du menu par categorie
 *
 * 
 * @return array : tableau de tableau contenant les enregistremenst
 */


function  lireTout()
{
    $db = ouvrirConnection();
    $sql = "select *
         from categorie;";
    return lire($db, $sql);

}

function ajouter(){
    $db = ouvrirConnection();
    $sql = "insert INTO categorie VALUES ();";
    return creer($db, $sql);
}

function changer($categorie){
    $db = ouvrirConnection();
    $sql = "insert INTO categorie VALUES ();";
    return creer($db, $sql);
}

function enlever($idCategorie){
    $db = ouvrirConnection();
    $sql = "insert INTO categorie VALUES ();";
    return creer($db, $sql);
}
