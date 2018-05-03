<?php
    
    include_once("conect.php");
    include_once("funcoes.php");
    
    $iId = $_POST["id"];
    
    $bDelete = excluiDado($oConexao, $iId);
    
    if($bDelete) {
        
    }
    