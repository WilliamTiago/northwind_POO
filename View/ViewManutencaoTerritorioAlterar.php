<?php

    $sFileHeader          = dirname(__DIR__).'/header.php';
    $sFilePersBancoDados  = dirname(__DIR__).'/Persistencia/PersistenciaBancoDados.php';
    $sFilePersTerritorio = dirname(__DIR__).'/Persistencia/PersistenciaTerritorio.php';
    $sFileFooter          = dirname(__DIR__).'/footer.php';
    require_once($sFileHeader);
    include_once($sFilePersBancoDados);
    include_once($sFilePersTerritorio);
    
    
    $oConexao     = new PersistenciaBancoDados("localhost", "root", "", "northwind");
    $oTerritorio = new PersistenciaTerritorio($oConexao);
    
    $iId = $_GET["id"];
    $oReg = $oTerritorio->buscaTerritorio($iId);
?>

<br>

<div class = "container">
    <form class = "container" action = "/William/desenvolvimento_web_2/northwind_POO/Controller/ControllerTerritorioUpdate.php" method = "POST">
        <div class = "divGambiarra01">  
            <div class = "container">
                <div class="form-group">                    
                    <input class="form-control" name="IDTerritorio" value="<?php print $oReg['IDTerritorio'] ?>">
                </div>
                <div class="form-group">
                    <label for="nome_fun">Nome da Região</label>
                    <input type="text" class="form-control" name="Nome" value="<?php print $oReg['DescricaoTerritorio'] ?>" >
                </div>                
            </div>
        </div>
        <button type="submit" class="btn btn-default">Confirmar</button>
        <a class="btn btn-default" href="/William/desenvolvimento_web_2/northwind_POO/View/ViewConsultaTerritorio.php">Cancelar</a>
        <button type="reset" class="btn btn-default">Limpar</button>   
    </form>
</div>

<?php
    include_once($sFileFooter);