<?php
function sinTildes (string $frs){
    $cadTild = array("á","Á","é","É","í","Í","ó","Ó","ú","Ú");
    $cadVoc = array("a","A","e","E","i","I","o","O","u","U");
    $frs = str_replace ($cadTild, $cadVoc, $frs);
    return $frs;
}

function sinEspacios (string $cad){
    echo trim(preg_replace('/ +/'," " ,$cad));
}

function compCaseEsp($frs1, $frs2){
    $frs2 = trim(preg_replace('/ +/'," " ,$frs2));
    $cadTild = array("á","Á","é","É","í","Í","ó","Ó","ú","Ú");
    $cadVoc = array("a","A","e","E","i","I","o","O","u","U");
    $frs2 = str_replace ($cadTild, $cadVoc, $frs2);
    $cadComp = strcasecmp ($frs1, $frs2);
    return $cadComp;
}
?>