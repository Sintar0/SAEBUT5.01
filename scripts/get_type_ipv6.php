<?php

function get_type_ipv6($adresse)
{

    $adresseBinaire = "";
    $groups = explode(":", $adresse);

    foreach ($groups as $group) {
        $group = base_convert($group, 16, 2);
        $adresseBinaire = $adresseBinaire . str_pad($group, 16, "0", STR_PAD_LEFT);
    }

    // Extraire le préfixe binaire
    $prefixeBinaire = substr($adresseBinaire, 0, 4);

    switch ($prefixeBinaire) {
        case "0010":
            $resultat = "Global Unicast";
            break;

        case (substr($adresseBinaire, 0, 10) === substr(base_convert("FE80", 16, 2), 0, 10)):
            $resultat = "Link-Local : Unicast";
            break;

        case ($adresseBinaire === str_repeat("0", strlen($adresseBinaire) - 1) . "1"):
            $resultat = "Loopback";
            break;

        case (substr($adresseBinaire, 0, 8) === base_convert("FF", 16, 2)):
            $resultat = "Multicast";
            break;

        case ((substr($adresseBinaire, 0, 8) === base_convert("FC", 16, 2)) or (substr($adresseBinaire, 0, 8) === base_convert("FD", 16, 2))):
            $resultat = "Unique Local : Unicast";
            break;

        case ($adresseBinaire === str_repeat("0", strlen($adresseBinaire))):
            $resultat = "Unspecified : Unicast";
            break;

        default:
            $resultat = "Anycast";
    }

    return $resultat;

}

