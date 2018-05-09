<?php

    $sFileHeader          = dirname(__DIR__).'/header.php';
    $sFilePersBancoDados  = dirname(__DIR__).'/Persistencia/PersistenciaBancoDados.php';
    $sFilePersRegiao = dirname(__DIR__).'/Persistencia/PersistenciaRegiao.php';
    $sFileFooter          = dirname(__DIR__).'/footer.php';
    require_once($sFileHeader);
    include_once($sFilePersBancoDados);
    include_once($sFilePersRegiao);
    
    
    $oConexao     = new PersistenciaBancoDados("localhost", "root", "", "northwind");
    $oRegiao = new PersistenciaRegiao($oConexao);
    
    $iId = $_GET["id"];
    $oReg = $oRegiao->buscaRegiao($iId);
?>

<br>

<div class = "container">
    <form class = "container" action = "/William/desenvolvimento_web_2/northwind_POO/Controller/ControllerRegiaoUpdate.php" method = "POST">
        <div class = "divGambiarra01">
            <div class = "container">
                <div class="form-group">                    
                    <input class="form-control" name="IDRegiao" value="<?php print $oReg['IDRegiao'] ?>">
                </div>
                <div class="form-group">
                    <label for="nome_fun">Nome da Região</label>
                    <input type="text" class="form-control" name="Nome" value="<?php print $oReg['DescricaoRegiao'] ?>" >
                </div>                
            </div>
        </div>
        <button type="submit" class="btn btn-default">Confirmar</button>
        <a class="btn btn-default" href="/William/desenvolvimento_web_2/northwind_POO/View/ViewConsultaRegiao.php">Cancelar</a>
        <button type="reset" class="btn btn-default">Limpar</button>   
    </form>
</div>

<?php
    include_once($sFileFooter);