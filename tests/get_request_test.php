<?php

include '../scripts/get_request.php';

$c = array(0, 2);
$host = array("free.fr", "orange.fr");
$q = array(true, false);
$d = array(true, false);

$result = array(
    "ping -c 0 free.fr -q -D",
    "ping -c 0 free.fr -q",
    "ping -c 0 free.fr -D",
    "ping -c 0 free.fr",

    "ping -c 0 orange.fr -q -D",
    "ping -c 0 orange.fr -q",
    "ping -c 0 orange.fr -D",
    "ping -c 0 orange.fr",

    "ping -c 2 free.fr -q -D",
    "ping -c 2 free.fr -q",
    "ping -c 2 free.fr -D",
    "ping -c 2 free.fr",

    "ping -c 2 orange.fr-q -D",
    "ping -c 2 orange.fr -q",
    "ping -c 2 orange.fr -D",
    "ping -c 2 orange.fr",
);

$i = 0;
foreach ($c as $c_value){
    foreach ($host as $host_value){
        foreach ($q as $q_value){
            foreach ($d as $d_value){
                echo assert($result[$i], get_request($host_value, $c_value, $q_value, $d_value));
                $i = $i + 1;
            }
        }
    }
}