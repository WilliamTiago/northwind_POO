<?php
$sFileHeader = dirname(__DIR__) . '/header.php';
$sFilePersBancoDados = dirname(__DIR__) . '/Persistencia/PersistenciaBancoDados.php';
$sFilePersTerritorio = dirname(__DIR__) . '/Persistencia/PersistenciaTerritorio.php';
$sFileFooter = dirname(__DIR__) . '/footer.php';
require_once($sFileHeader);
include_once($sFilePersBancoDados);
include_once($sFilePersTerritorio);
?>
<br>
<div class = "divFormCadTerritorios">
    <form class = "container" action = "/William/desenvolvimento_web_2/northwind_POO/Controller/ControllerTerritorioAdd.php" method = "POST">
        <div class = "divGambiarra01">
            <div class = "container">
                <div class="form-group">
                    <label for="id_territorio">Identificador da Territorio</label>
                    <input type="number" class="form-control" name="IDTerritorio" placeholder="Código da Região">
                </div>
                <div class="form-group">
                    <label for="id_regiao">Identificador da Regiao</label>
                    <input type="number" class="form-control" name="IDRegiao" placeholder="Código da Região">
                </div>
                <div class="form-group">
                    <label for="nome_fun">Nome do Territorio</label>
                    <input type="text" class="form-control" name="DescricaoTerritorio" placeholder="Nome">
                </div>                               
            </div>

        </div>
        <button type="submit" class="btn btn-default">Confirmar</button>
        <a class="btn btn-default" href = "/William/desenvolvimento_web_2/northwind_POO/View/ViewConsultaTerritorio.php">Cancelar</a>
        <button class="btn btn-default" >Limpar</button>
    </form>
</div>
<?php
include_once($sFileFooter);