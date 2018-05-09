<?php
    $AddRegiao = true;

    $sFileHeader          = dirname(__DIR__).'/header.php';
    $sFilePersBancoDados  = dirname(__DIR__).'/Persistencia/PersistenciaBancoDados.php';
    $sFilePersRegiao = dirname(__DIR__).'/Persistencia/PersistenciaRegiao.php';
    $sFileFoote           = dirname(__DIR__).'/footer.php';
    require_once($sFileHeader);
    include_once($sFilePersBancoDados);
    include_once($sFilePersRegiao);	
   
    $oPersConexao      = new PersistenciaBancoDados("localhost", "root", "", "northwind");
    $oPersRegiao  = new PersistenciaRegiao($oPersConexao);

?>

<table  class ="table table-striped table-bordered">
    <tr>
        <td>Codigo</td>
        <td>Nome</td>       
    </tr>

    <?php
        $oConsulta = $oPersRegiao->selectAllRegiaos();
        foreach($oConsulta as $oRegiao):
    ?>

    <tr>
        <td><?= $oRegiao["IDRegiao"] ?></td>
        <td><?= $oRegiao["DescricaoRegiao"] ?></td>
        <td>
            <a href="<?php print("/William/desenvolvimento_web_2/northwind_POO/View/ViewManutencaoRegiaoAlterar.php?id=".$oRegiao["IDRegiao"]) ?>" class="btn btn-primary">Alterar</a>
            <a href="<?php print("/William/desenvolvimento_web_2/northwind_POO/Controller/ControllerRegiaoDelete.php?id=".$oRegiao["IDRegiao"]) ?>" class="btn btn-primary">Excluir</a>
        </td>
    </tr>
    <?php
        endforeach;
    ?>
</table>
<?php
    include_once($sFileFoote);
?>