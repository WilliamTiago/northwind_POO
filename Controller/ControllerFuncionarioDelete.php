<?php
    $sFilePersBancoDados  = dirname(__DIR__).'/Persistencia/PersistenciaBancoDados.php';
    $sFilePersFuncionario = dirname(__DIR__).'/Persistencia/PersistenciaFuncionario.php';
    
    include_once($sFilePersBancoDados);
    include_once($sFilePersFuncionario);

    $oConexao      = new PersistenciaBancoDados("localhost", "root", "", "northwind");
    $bDelete  = new PersistenciaFuncionario($oConexao);
    
    $Id = $_GET["ID"];
    echo($Id);
    
    $Delete = $bDelete->excluiDado($Id);
    
    if($Delete) {
?>
<script>
    alert("Funcionário deletado com sucesso!");
    window.location.href = '/William/desenvolvimento_web_2/northwind_POO/View/ViewConsultaFuncionario.php';
</script> 
<?php       
    }else{
?>
<script>
    alert("Algum erro aconteceu!");
    window.location.href = '/William/desenvolvimento_web_2/northwind_POO/View/ViewConsultaFuncionario.php';
</script>
<?php
    }
    