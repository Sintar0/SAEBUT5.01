<?php

function cidr_to_ip($cidr): array|string {

    /*
     * La fonction cidr_to_ip permet de convertir un masque
     * de la forme CIDR dans un format 32 bits
     * Paramètres :
     *      $cidr int -> le nombre à convertir
     * Retour :
     *      Un nombre de 32 bits
     * Exception:
     *      $cidr < 0
     */

    if ($cidr < 0) {
        throw new Exception("CIDR < 0");
    }

    $ip = str_repeat("0", 32);
    return substr_replace($ip, str_repeat("1", $cidr), 0, $cidr);
}

function dec_to_bin_32_bit($dec) {

    /*
     * La fonction dec_to_bin_32_bit permet de convertir un
     * nombre entier positif en un nombre de 32 bits
     * Paramètres:
     *      $dec int -> le nombre à convertir
     * Retour:
     *      Un nombre de 32 bits
     */

    if ($dec < 0)
        throw new Exception("\$dec < 0");

    $dec_bin = decbin($dec);
    $ip = str_repeat("0", 32 - strlen($dec_bin));
    return $ip .= $dec_bin;
}

function ip_adress_bin_to_dec($ip_adress) {

    /*
     * La fonction ip_adress_bin_to_dec permet de convertir
     * une adresse IP écrite en binaire en une adresse IP
     * écrite en nombre entier
     * Paramètres:
     *      $ip_adress str -> l'ip à convertir
     * Retour:
     *     Adresse IP sous forme entier
     * Exception:
     *      Longueur de $ip_adress != 32
     */

    if (strlen($ip_adress) != 32) {
        throw new Exception("Ip invalide");
    }

    $ip_adress = str_split($ip_adress, 8);

    for ($i = 0; $i < sizeof($ip_adress); $i++) {
        $ip_adress[$i] = bindec($ip_adress[$i]);
    }

    $ip_adress = implode(".", $ip_adress);

    return $ip_adress;

}

function dec_to_ip_adress_bin($ip_adress) {

    /*
     * La fonction ip_adress_bin_to_dec permet de convertir
     * une adresse IP écrite en entier en une adresse IP
     * écrite en binaire
     * Paramètres:
     *      $ip_adress str -> l'ip à convertir
     * Retour:
     *     Adresse IP sous forme binaire
     * Exception:
     *      Longueur de $ip_adress != 32
     */

    $ip_adress = explode(".", $ip_adress);

    for ($i = 0; $i < sizeof($ip_adress); $i++) {
        $ip_adress[$i] = str_pad(decbin($ip_adress[$i]), 8, "0", STR_PAD_LEFT);
    }

    $ip_adress = implode("", $ip_adress);

    return $ip_adress;

}

function get_ip_network_from_ip_mask($ip, $mask) {

    /*
     * La fonction get_ip_network_from_ip_mask effectue une
     * opération & entre $ip et $mask
     * Paramètres:
     *      $ip str ->      Une adresse IP
     *      $mask str ->    Un masque de réseau
     * Retour:
     *      Le résultat de l'opération &
     * Exception:
     *      Longueur $ip != Longueur $mask
     */

    if (strlen($ip) != strlen($mask)) {
        throw new Exception('IP ou Mask invalide');
    }

    $ip_network = "";

    for ($i = 0; $i < strlen($ip); $i++) {
        $ip_network .= strval(intval($ip[$i]) & intval($mask[$i]));
    }

    return $ip_network;

}

function addition_bin($bin1, $bin2) {

    /*
     * La fonction addition_bin effectue une
     * opération ^ entre $ip et $mask
     * Paramètres:
     *      $ip str ->      Une adresse IP
     *      $mask str ->    Un masque de réseau
     * Retour:
     *      Le résultat de l'opération &
     * Exception:
     *      Longueur $ip != Longueur $mask
     */

    if (strlen($bin1) != strlen($bin2)) {
        throw new Exception('Longueur non valide');
    }

    $bin = "";
    $retenue = 0;

    for ($i = strlen($bin1) - 1; $i >= 0; $i--) {

        $value = intval($bin1[$i]) ^ intval($bin2[$i]);

        $bin .= $value ^ $retenue;

        if (intval($bin1[$i]) === 1 and intval($bin2[$i]) === 1) {
            $retenue = 1;
        } else {
            $retenue = 0;
        }

    }

    return strrev($bin);

}

function verif_available($mask, $nb_machines): bool {

    /*
     * La fonction verif_available permet de comparer
     * $mask et $nb_machines. Si le $mask est supérieur
     * à $nb_machines false est retourné sinon true
     */

    $mask = 32 - intval($mask);
    $nb_machines_dispo = pow(2, $mask) - 2;

    if ($nb_machines > $nb_machines_dispo)
        return false;

    return true;
}