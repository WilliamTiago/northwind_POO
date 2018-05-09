<?php

    $sFileHeader          = dirname(__DIR__).'/header.php';
    $sFilePersBancoDados  = dirname(__DIR__).'/Persistencia/PersistenciaBancoDados.php';
    $sFilePersTerritorio = dirname(__DIR__).'/Persistencia/PersistenciaTerritorio.php';
    
    require_once($sFileHeader);
    include_once($sFilePersBancoDados);
    include_once($sFilePersTerritorio);
    
    $oConexao     = new PersistenciaBancoDados("localhost", "root", "", "northwind");
    $oTerritorio = new PersistenciaTerritorio($oConexao);
    
    $aCampos = [
        "IDTerritorio"          => $_POST["IDTerritorio"],
        "IDRegiao"              => $_POST["IDRegiao"],
        "DescricaoTerritorio"   => $_POST["DescricaoTerritorio"]        
    ];
    
    $bInsersao = $oTerritorio->insereTerritorio($aCampos);
    
   if($bInsersao) {
?>
<script>
    alert("Território cadastrado com Sucesso!");s
    window.location.href = '/William/desenvolvimento_web_2/northwind_POO/View/ViewConsultaTerritorio.php';
</script>

<?php
    } else {
?>
<script>
    alert("Território não cadastrado!");
    window.location.href = '/William/desenvolvimento_web_2/northwind_POO/View/ViewConsultaTerritorio.php';
</script>
<?php
    
}