<?php
    $sFilePersBancoDados  = dirname(__DIR__).'/Persistencia/PersistenciaBancoDados.php';
    $sFilePersTerritorio = dirname(__DIR__).'/Persistencia/PersistenciaTerritorio.php';
    
    include_once($sFilePersBancoDados);
    include_once($sFilePersTerritorio);

    $oConexao = new PersistenciaBancoDados("localhost", "root", "", "northwind");
    $bDelete  = new PersistenciaTerritorio($oConexao);
    
    $Id = $_GET["id"];
    echo($Id);
    
    $Delete = $bDelete->excluiDado($Id);
    
/*   if($Delete) {
?>
<script>
    alert("Território deletado com sucesso!");
    window.location.href = '/William/desenvolvimento_web_2/northwind_POO/View/ViewConsultaTerritorio.php';
</script> 
<?php       
    }else{
?>
<script>
    alert("Algum erro aconteceu!");
    window.location.href = '/William/desenvolvimento_web_2/northwind_POO/View/ViewConsultaTerritorio.php';
</script>
<?php
}*/
    