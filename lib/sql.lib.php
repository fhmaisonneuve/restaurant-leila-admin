<?php

/**
 * Librairie de code pour manip SQL
 */
//require_once('/.Config/leila.cfg.php');
require_once('F:\.Config\leila.cfg.php');


function ouvrirConnection()
{
   $cnx = mysqli_connect(DB_HOTE, DB_UTIL, DB_MDP,  DB_NOM);
   mysqli_set_charset($cnx, DB_CHARSET);
   return $cnx;
}

function soumettreRequete($cnx, $req)
{
   return mysqli_query($cnx, $req);
}


/**
 * lire
 *
 * @param  MySQLi $cnx : identifiant MySQLI
 * @param  string $req : requete sql SELECT
 * @param  int $mode : Mode pour tableau associatif
 * @return array|bool
 */
function lire($cnx, $req, $mode = MYSQLI_ASSOC)
{
   $resultat = soumettreRequete($cnx, $req);
   if ($resultat) {
      return mysqli_fetch_all($resultat, $mode);
   }
   return false;
}

function creer($cnx, $req)
{
   $resultat = soumettreRequete($cnx, $req);
   if ($resultat) {
      return mysqli_insert_id($cnx);
   }
   return false;
}

function modifier($cnx, $req)
{
   $resultat = soumettreRequete($cnx, $req);
   if ($resultat) {
      return mysqli_affected_rows($cnx);
   }
   return false;
}

function supprimer($cnx, $req)
{
   //meme logique que modifier
   return modifier($cnx, $req);
}

