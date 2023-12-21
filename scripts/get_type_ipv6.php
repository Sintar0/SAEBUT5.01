<?php

function get_type_ipv6($adresse) {

    $adresseBinaire = "";
    $groups = explode(":", $adresse);

    foreach ($groups as $group){
        $group = base_convert($group, 16,2);
        $adresseBinaire = $adresseBinaire . str_pad($group, 16, "0", STR_PAD_LEFT);
    }

    // Extraire le préfixe binaire
    $prefixeBinaire = substr($adresseBinaire, 0, 16);

    if ($prefixeBinaire === str_pad(base_convert("2000", 16, 2), 16, "0", STR_PAD_LEFT)) {
        return "Global Unicast";
    } elseif ($prefixeBinaire === base_convert("fe80", 16, 2)) {
        return "Link-Local : Unicast";
    } elseif ($prefixeBinaire === base_convert("fc00", 16, 2)){
        return "Unique Local";
    } elseif ($prefixeBinaire === base_convert("ff00", 16, 2)){
        return "Multicast";
    } elseif (preg_match('/[^0]/', $adresseBinaire)){
        return "Unspecified : Unicast";
    }
    else {
        return "Anycast";
    }
}

