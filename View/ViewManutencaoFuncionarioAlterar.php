<?php

    $sFileHeader          = dirname(__DIR__).'/header.php';
    $sFilePersBancoDados  = dirname(__DIR__).'/Persistencia/PersistenciaBancoDados.php';
    $sFilePersFuncionario = dirname(__DIR__).'/Persistencia/PersistenciaFuncionario.php';
    $sFileFooter          = dirname(__DIR__).'/footer.php';
    require_once($sFileHeader);
    include_once($sFilePersBancoDados);
    include_once($sFilePersFuncionario);
    
    
    $oConexao     = new PersistenciaBancoDados("localhost", "root", "", "northwind");
    $oFuncionario = new PersistenciaFuncionario($oConexao);
    
    $iId = $_GET["id"];
    $oFunc = $oFuncionario->buscaFuncionario($iId);
?>

<div class = "divFormCadFuncionarios">
    <form class = "container" action = "/William/desenvolvimento_web_2/northwind_POO/Controller/ControllerFuncionarioUpdate.php" method = "POST">
        <div class = "divGambiarra01">
            <div class = "container">
                <div class="form-group">                    
                    <input type="hidden" class="form-control" name="IDFuncionario" value="<?php print $oFunc['IDFuncionario'] ?>">
                </div>
                <div class="form-group">
                    <label for="nome_fun">Nome do Funcion�rio</label>
                    <input type="text" class="form-control" name="Nome" value="<?php print $oFunc['Nome'] ?>" >
                </div>
                <div class="form-group">
                    <label for="sobrenome_fun">Sobrenome</label>
                    <input type="text" class="form-control" name="Sobrenome" value="<?php print $oFunc['Sobrenome'] ?>" >
                </div>
                <div class="form-group">
                    <label for="titulo_cortesia">Titulo</label>
                    <input type="text" class="form-control" name="Titulo" value="<?php print $oFunc['Titulo'] ?>" >
                </div>
                <div class="form-group">
                    <label for="preco">Titulo Cortesia</label>
                    <input type="text" class="form-control" name="TituloCortesia" value="<?php print $oFunc['TituloCortesia'] ?>">
                </div>
                <div class="form-group">
                    <label for="data_nasc">Data de Nascimento</label>
                    <input type="date" class="form-control" name="DataNac" value="<?php print $oFunc['DataNac'] ?>" >
                </div>
                <div class="form-group">
                    <label for="data_adm">Data de Adminiss�o</label>
                    <input type="date" class="form-control" name="DataAdmissao" value="<?php print $oFunc['DataAdmissao'] ?>" >
                </div>
            </div>

            <div class = "container">
                <div class="form-group">                    
                    <input type="hidden" class="form-control" name="IDFuncionario" value="<?php print $oFunc['IDFuncionario'] ?>">
                </div>
                <div class="form-group">
                    <label for="endereco">Endere�o</label>
                    <input type="text" class="form-control" name="Endereco" value="<?php print $oFunc['Endereco'] ?>" >
                </div>
                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" name="Cidade" value="<?php print $oFunc['Cidade'] ?>" >
                </div>
                <div class="form-group">
                    <label for="regiao">Região</label>
                    <input type="text" class="form-control" name="Regiao" value="<?php print $oFunc['Regiao'] ?>" >
                </div>
                <div class="form-group">
                    <label for="cep">Cep</label>
                    <input type="text" class="form-control" name="Cep" value="<?php print $oFunc['Cep'] ?>" >
                </div>
                <div class="form-group">
                    <label for="pais">País</label>
                    <input type="text" class="form-control" name="Pais" value="<?php print $oFunc['Pais'] ?>" >
                </div>
                <div class="form-group">
                    <label for="tel_residencial">Telefone Residencial</label>
                    <input type="text" class="form-control" name="TelefoneResidencial" value="<?php print $oFunc['TelefoneResidencial'] ?>" >
                </div>
<!--                <div class="form-group">
                    <label for="extensao">Extensão</label>
                    <input type="text" class="form-control" name="extensao" placeholder="Preço do Produto">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Foto de Perfil</label>
                    <input type="file" id="exampleInputFile">
                </div>-->
            </div>
        </div>
        <button type="submit" class="btn btn-default">Confirmar</button>
        <a class="btn btn-default" href = "produto_lista.php">Cancelar</a>
        <button class="btn btn-default" >Limpar</button>   
    </form>
</div>

<?php
    include_once($sFileFooter);