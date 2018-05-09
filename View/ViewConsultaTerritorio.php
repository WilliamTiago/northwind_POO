<?php
    $AddTerritorio = true;

    $sFileHeader          = dirname(__DIR__).'/header.php';
    $sFilePersBancoDados  = dirname(__DIR__).'/Persistencia/PersistenciaBancoDados.php';
    $sFilePersTerritorio = dirname(__DIR__).'/Persistencia/PersistenciaTerritorio.php';
    $sFileFoote           = dirname(__DIR__).'/footer.php';
    require_once($sFileHeader);
    include_once($sFilePersBancoDados);
    include_once($sFilePersTerritorio);	
   
    $oPersConexao      = new PersistenciaBancoDados("localhost", "root", "", "northwind");
    $oPersTerritorio  = new PersistenciaTerritorio($oPersConexao);

?>

<table  class ="table table-striped table-bordered">
    <tr>
        <td>Codigo</td>
        <td>Nome</td>       
    </tr>

    <?php
        $oConsulta = $oPersTerritorio->selectAllTerritorios();
        foreach($oConsulta as $oTerritorio):
    ?>

    <tr>
        <td><?= $oTerritorio["IDTerritorio"] ?></td>
        <td><?= $oTerritorio["DescricaoTerritorio"] ?></td>
        <td>
            <a href="<?php print("/William/desenvolvimento_web_2/northwind_POO/View/ViewManutencaoTerritorioAlterar.php?id=".$oTerritorio["IDTerritorio"]) ?>" class="btn btn-primary">Alterar</a>
            <a href="<?php print("/William/desenvolvimento_web_2/northwind_POO/Controller/ControllerTerritorioDelete.php?id=".$oTerritorio["IDTerritorio"]) ?>" class="btn btn-primary">Excluir</a>
        </td>
    </tr>
    <?php
        endforeach;
    ?>
</table>
<?php
    include_once($sFileFoote);
?>