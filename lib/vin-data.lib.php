<?php

/**
 *  Manipulation des données de la carte des vinsdu restaurant
 */


/**
 * Cherche les vin du menu par categorie
 *
 * @param bool $groupe : true si on veux grouper
 * 
 * @return array : tableau de tableau contenant les enregistremenst
 */


function  lireTout($groupe = false) //retourne bobo
{
    $db = ouvrirConnection();
    $sql = "select c.nom as nomCategorie, v.*
         from vin v
            JOIN categorie c ON c.id = v.id_categorie
         ORDER by rang, prix;";
    $articles = lire($db, $sql);

    if ($groupe) {
        $articlesGroupes = [];
        foreach ($articles as $article) {
            $articlesGroupes[$article['nomCategorie']][] = $article;
        }
        return $articlesGroupes;
        
    }
    return $articles;
}
