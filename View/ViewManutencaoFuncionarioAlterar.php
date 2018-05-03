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
    
    $iId = $_POST["IDFuncionario"];
    $oFunc = $oFuncionario->buscaFuncionario($iId);
?>

<div class = "divFormCadFuncionarios">
    <form class = "container" action = "/william/WEB-II---Projeto-Dois/Controller/ControllerFuncionarioUpdate.php" method = "POST">
        <div class = "divGambiarra01">
            <div class = "container">
                <div class="form-group">
                    
                    <input type="hidden" class="form-control" name="IDFuncionario" value="<?php echo $oFunc[0]['IDFuncionario'] ?>">
                </div>
                <div class="form-group">
                    <label for="nome_fun">Nome do Funcion·rio</label>
                    <input type="text" class="form-control" name="Nome" value="<?php echo $oFunc[0]['Nome'] ?>" >
                </div>
                <div class="form-group">
                    <label for="sobrenome_fun">Sobrenome</label>
                    <input type="text" class="form-control" name="Sobrenome" value="<?php echo $oFunc[0]['Sobrenome'] ?>" >
                </div>
                <div class="form-group">
                    <label for="titulo_cortesia">Titulo</label>
                    <input type="text" class="form-control" name="Titulo" value="<?php echo $oFunc[0]['Titulo'] ?>" >
                </div>
                <div class="form-group">
                    <label for="preco">Titulo Cortesia</label>
                    <input type="text" class="form-control" name="TituloCortesia" value="<?php echo $oFunc[0]['TituloCortesia'] ?>">
                </div>
                <div class="form-group">
                    <label for="data_nasc">Data de Nascimento</label>
                    <input type="date" class="form-control" name="DataNac" value="<?php echo $oFunc[0]['DataNac'] ?>" >
                </div>
                <div class="form-group">
                    <label for="data_adm">Data de Adminiss„o</label>
                    <input type="date" class="form-control" name="DataAdmissao" value="<?php echo $oFunc[0]['DataAdmissao'] ?>" >
                </div>
            </div>

            <div class = "container">
                <div class="form-group">
                    <label for="endereco">EndereÁo</label>
                    <input type="text" class="form-control" name="Endereco" value="<?php echo $oFunc[0]['Endereco'] ?>" >
                </div>
                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" name="Cidade" value="<?php echo $oFunc[0]['Cidade'] ?>" >
                </div>
                <div class="form-group">
                    <label for="regiao">Regi√£o</label>
                    <input type="text" class="form-control" name="Regiao" value="<?php echo $oFunc[0]['Regiao'] ?>" >
                </div>
                <div class="form-group">
                    <label for="cep">Cep</label>
                    <input type="text" class="form-control" name="Cep" value="<?php echo $oFunc[0]['Cep'] ?>" >
                </div>
                <div class="form-group">
                    <label for="pais">Pa√≠s</label>
                    <input type="text" class="form-control" name="Pais" value="<?php echo $oFunc[0]['Pais'] ?>" >
                </div>
                <div class="form-group">
                    <label for="tel_residencial">Telefone Residencial</label>
                    <input type="text" class="form-control" name="TelefoneResidencial" value="<?php echo $oFunc[0]['TelefoneResidencial'] ?>" >
                </div>
<!--                <div class="form-group">
                    <label for="extensao">Extens√£o</label>
                    <input type="text" class="form-control" name="extensao" placeholder="Pre√ßo do Produto">
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