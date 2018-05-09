<?php
    $sFilePersBancoDados  = dirname(__DIR__).'/Persistencia/PersistenciaBancoDados.php';
    $sFilePersRegiao = dirname(__DIR__).'/Persistencia/PersistenciaRegiao.php';
    
    include_once($sFilePersBancoDados);
    include_once($sFilePersRegiao);

    $oConexao = new PersistenciaBancoDados("localhost", "root", "", "northwind");
    $bDelete  = new PersistenciaRegiao($oConexao);
    
    $Id = $_GET["id"];
    echo($Id);
    
    $Delete = $bDelete->excluiDado($Id);
    
/*    if($Delete) {
?>
<script>
    alert("Funcionário deletado com sucesso!");
    window.location.href = '/William/desenvolvimento_web_2/northwind_POO/View/ViewConsultaRegiao.php';
</script> 
<?php       
    }else{
?>
<script>
    alert("Algum erro aconteceu!");
    window.location.href = '/William/desenvolvimento_web_2/northwind_POO/View/ViewConsultaRegiao.php';
</script>
<?php
}*/
    