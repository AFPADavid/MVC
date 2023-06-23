<?php
/////////////////////////////////////
//   Constantes pour connaitre     //
//   le répertoire du site sur     //
//   le serveur                    //
/////////////////////////////////////
function getUrlWithoutFilename() {
    $url = $_SERVER["SCRIPT_NAME"];
    $zones = explode("/", $url);
    $resultat = "";
    for ($i=1; $i < count($zones)-1  ; $i++) { 
        $resultat .= "/". $zones[$i];
    }
    return $resultat;
 }
// define("REPERTOIRE_BASE", ""); // Mettre "" si le site est installé à la racine du serveur
// define("REPERTOIRE_BASE", "/DWWM22031/MVC_Orleans_Exemple_Debut_DEPOT"); // Mettre "" si le site est installé à la racine du serveur
//                                 // sinon mettre "/<chemin complet du site>" sans finir par /

define("REPERTOIRE_BASE", getUrlWithoutFilename());
?>