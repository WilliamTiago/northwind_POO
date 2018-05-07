<?php
    $AddFuncionario = true;

    $sFileHeader          = dirname(__DIR__).'/header.php';
    $sFilePersBancoDados  = dirname(__DIR__).'/Persistencia/PersistenciaBancoDados.php';
    $sFilePersFuncionario = dirname(__DIR__).'/Persistencia/PersistenciaFuncionario.php';
    $sFileFoote           = dirname(__DIR__).'/footer.php';
    require_once($sFileHeader);
    include_once($sFilePersBancoDados);
    include_once($sFilePersFuncionario);	
   
    $oPersConexao      = new PersistenciaBancoDados("localhost", "root", "", "northwind");
    $oPersFuncionario  = new PersistenciaFuncionario($oPersConexao);

?>

<table  class ="table table-striped table-bordered">
    <tr>
        <td>Codigo</td>
        <td>Nome</td>
        <td>Titulo</td>
        <td>Data Nasc</td>
        <td>Data Adm</td>
        <td>Pais</td>
        <td>Endereço</td>
        <td>Cidade</td>
        <td>Ações</td>
    </tr>

    <?php
        $oConsulta = $oPersFuncionario->selectAllFuncionarios();
        foreach($oConsulta as $oFuncionario):
    ?>

    <tr>
        <td><?= $oFuncionario["IDFuncionario"] ?></td>
        <td><?= $oFuncionario["Nome"] ?></td>
        <td><?= $oFuncionario["Titulo"] ?></td>
        <td><?= $oFuncionario["DataNac"] ?></td>
        <td><?= $oFuncionario["DataAdmissao"] ?></td>
        <td><?= $oFuncionario["Pais"] ?></td>
        <td><?= $oFuncionario["Endereco"] ?></td>
        <td><?= $oFuncionario["Cidade"] ?></td>
        <td>
            <a href="<?php print("formUpdateProduto.php?id=".$oFuncionario["IDFuncionario"]) ?>" class="btn btn-primary">Alterar</a>
            <a href="<?php print("formUpdateProduto.php?id=".$oFuncionario["IDFuncionario"]) ?>" class="btn btn-primary">Excluir</a>
        </td>
    </tr>
    <?php
        endforeach;
    ?>
</table>
<?php
    include_once($sFileFoote);
?>