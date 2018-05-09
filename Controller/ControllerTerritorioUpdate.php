<?php 
    $sFileHeader          = dirname(__DIR__).'/header.php';
    $sFilePersBancoDados  = dirname(__DIR__).'/Persistencia/PersistenciaBancoDados.php';
    $sFilePersTerritorio = dirname(__DIR__).'/Persistencia/PersistenciaTerritorio.php';
    
    require_once($sFileHeader);
    include_once($sFilePersBancoDados);
    include_once($sFilePersTerritorio);
    
    $oConexao = new PersistenciaBancoDados("localhost", "root", "", "northwind");
    $oTerritorio = new PersistenciaTerritorio($oConexao); 
    $aCampos = [
        "IDTerritorio"       => $_POST["IDTerritorio"],
        "Nome"           => $_POST["Nome"]
    ];
    
    $oFunc = $oTerritorio->alterarCampos($aCampos);
    
  if(!$oFunc) {
        ?>
        <script>
        alert("Funcionário não alterado!");
        window.location.href = '/William/desenvolvimento_web_2/northwind_POO/View/ViewConsultaTerritorio.php';
        </script>
        <?php 
    } else {
    ?>
        <script>
            alert("Funcionário alterado com sucesso!");
            window.location.href = '/William/desenvolvimento_web_2/northwind_POO/View/ViewConsultaTerritorio.php';
        </script>
    <?php
    }
  