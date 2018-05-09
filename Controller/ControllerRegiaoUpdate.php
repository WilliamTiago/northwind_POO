<?php 
    $sFileHeader          = dirname(__DIR__).'/header.php';
    $sFilePersBancoDados  = dirname(__DIR__).'/Persistencia/PersistenciaBancoDados.php';
    $sFilePersRegiao = dirname(__DIR__).'/Persistencia/PersistenciaRegiao.php';
    
    require_once($sFileHeader);
    include_once($sFilePersBancoDados);
    include_once($sFilePersRegiao);
    
    $oConexao     = new PersistenciaBancoDados("localhost", "root", "", "northwind");
    $oRegiao = new PersistenciaRegiao($oConexao); 
    $aCampos = [
        "IDRegiao"       => $_POST["IDRegiao"],
        "Nome"           => $_POST["Nome"]
    ];
    
    $oFunc = $oRegiao->alterarCampos($aCampos);
    
  /*if(!$oFunc) {
        ?>
        <script>
        alert("Funcionário não alterado!");
        window.location.href = '/William/desenvolvimento_web_2/northwind_POO/View/ViewConsultaRegiao.php';
        </script>
        <?php 
    } else {
    ?>
        <script>
            alert("Funcionário alterado com sucesso!");
            window.location.href = '/William/desenvolvimento_web_2/northwind_POO/View/ViewConsultaRegiao.php';
        </script>
    <?php
    }*/
  