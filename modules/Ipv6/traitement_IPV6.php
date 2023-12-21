<?php

include "../../scripts/get_type_ipv6.php";
include "../../scripts/simplify_ipv6.php";

$past = time() - 3600;
foreach ($_COOKIE as $key => $value )
{
    setcookie($key, $value, $past);
}

echo strlen($_POST['inputIpv6']);

if (isset($_POST['inputIpv6']) and strlen($_POST['inputIpv6']) == 39) {

    $adresse = $_POST['inputIpv6'];

    $r = get_type_ipv6($adresse);

    setcookie("typeIpv6", $r, time() + 60 * 60);

    $q = simplify_ipv6($adresse);

    setcookie("simplifyIpv6", $q, time() + 60 * 60);

    header("Location: module_Ipv6.php");
    exit;

} else {
    setcookie("badValue", "Entrez une ipv6 valide", time() + 60 * 60);
    header("Location: module_Ipv6.php");
    exit;
}