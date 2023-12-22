<?php

include "../../scripts/fonctions_Ipv4.php";

$past = time() - 3600;
foreach ($_COOKIE as $key => $value )
{
    setcookie($key, $value, $past);
}

$adresse_ip = $_POST['inputIpv4'];
$mask = $_POST['inputMask'];

if (!filter_var($adresse_ip, FILTER_VALIDATE_IP)) {
    setcookie("errorIpAdress", "Mauvais format d'IPV4", time() + 60 * 60);
    header("module_Ipv4.php");
    exit;
}

$name = array();
$nb_host = array();
foreach ($_POST as $key => $value )
{
    if (str_starts_with($key, 'inputNameNet_')) {
        $name[] = $value;
    }
    if (str_starts_with($key, 'inputNbPc_')) {
        $nb_host[] = $value;
    }
}

$data = array();
for ($i = 0; $i < sizeof($nb_host); $i++) {
    $data[$name[$i]] = $nb_host[$i];
}


$somme_machine_input = array_sum(array_values($nb_host));

if (!verif_available($mask, $somme_machine_input)) {
    setcookie("errorNbMachine", "Il y a trop de machines à répartir pour votre masque réseau", time() + 60 * 60);
    header("Location: module_Ipv4.php");
    exit;
}


$network_ip = get_ip_network_from_ip_mask(dec_to_ip_adress_bin($adresse_ip), cidr_to_ip(intval($mask)));

arsort($data);

$network_ip_increment = $network_ip;
$next_network = dec_to_bin_32_bit(0);

$r = "";

foreach ($data as $name => $nb) {

    $size_needed = log(intval($nb), 2);
    $size_needed = intval($size_needed) + 1;
    $two_expose = pow(2, $size_needed);

    if ($nb > $two_expose - 2)
        $two_expose = $two_expose * 2;

    $network_ip_increment = addition_bin($network_ip_increment, $next_network);

    $start_assign = addition_bin($network_ip_increment, dec_to_bin_32_bit(1));
    $end_assign = addition_bin($start_assign, dec_to_bin_32_bit($two_expose - 3));

    $broadcast = addition_bin($end_assign, dec_to_bin_32_bit(1));


    $r .= $name . ":\n";
    $r .= "Address:\t\t\t" . ip_adress_bin_to_dec($network_ip_increment) . "\n";
    $r .= "Assignable Range:\t" . ip_adress_bin_to_dec($start_assign) . " - " . ip_adress_bin_to_dec($end_assign). "\n";
    $r .= "Broadcast:\t\t\t" . ip_adress_bin_to_dec($broadcast). "\n";
    $r .= "\n";

    $next_network = dec_to_bin_32_bit($two_expose);

}

setcookie("returnIpv4", $r, time() + 60 * 60);
header("Location: module_Ipv4.php");