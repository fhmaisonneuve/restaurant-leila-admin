<?php

/**
 *  Manipulation des données du menu des plats du restaurant
 */


/**
 * Cherche les enregistrements du menu par categorie
 *
 * @param bool $groupe : true si on veux grouper
 * 
 * @return array : tableau de tableau contenant les enregistremenst
 */


function  lireTout($groupe = false) //retourne bobo
{
    $db = ouvrirConnection();
    $sql = "select c.nom as nomCategorie, p.*
         from plat p
            JOIN categorie c ON c.id = p.id_categorie
         ORDER by rang;";
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
