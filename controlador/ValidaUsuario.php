<?php

include '../librerias.php';

$oUsu=new Usuario($_REQUEST["nomusuario"],$_REQUEST["clave"]);

if($oUsu->VerificaLocal())
    echo "todo bien";
else
    echo "todo mal";