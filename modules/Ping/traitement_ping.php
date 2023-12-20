<?php

include '../../scripts/get_request.php';

$past = time() - 3600;
foreach ($_COOKIE as $key => $value )
{
    setcookie($key, $value, $past);
}

$domaine = null;
$c = null;
$q = false;
$d = false;

if(empty($_POST['inputDomain'])){
        setcookie("domaineVide", "Entrez un domaine ou une IP", time() + 60 * 60);
        header("Location: module_Ping.php");
        exit;
} else {
        $domaine = $_POST['inputDomain'];
}

if(isset($_POST['inputC']) && intval($_POST['inputC']) > 0) {
        $c = intval($_POST['inputC']);
} else {
        $c = 3;
}

if(isset($_POST['inputQ']) && $_POST['inputQ'] === "on")
        $q = true;

if(isset($_POST['inputD']) && $_POST['inputD'] === "on")
        $d = true;




$a = get_request($domaine, $c, $q, $d);

$r = shell_exec($a);


setcookie("returnRequest", $r, time() + 60 * 60);
header("Location: module_Ping.php");
exit;
