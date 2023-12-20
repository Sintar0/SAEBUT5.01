<?php

/**
 * @throws Exception
 */
function get_request($host, $c, $q, $d) {

  /*
  La fonction ping permet de réaliser une commande ping
  avec des paramètres donnés.
  Paramètres:
          $host: str      --> L'adresse IP ou le nom de domaine
          $c: int         --> Le nombre de paquets à envoyer
          $q: bool        --> Ajoute le paramètre -q à la requête
          $d: bool        --> Ajoute le paramètre -D à la requête
  Retour:
          $request: str   --> La requête complète
  */

  $request = "ping";

  if($c > 0) {
          $request .= " -c " . strval($c) . " ";
  }

  if(!empty($host)) {
          $request .=  $host;
  } else {
          throw new Exception('HOST vide');
  }

  if($q)
            $request .= " -q ";

  if($d)
            $request .= " -D ";

  return $request;

}