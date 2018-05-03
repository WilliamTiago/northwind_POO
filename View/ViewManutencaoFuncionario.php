<?php

    $sFileHeader          = dirname(__DIR__).'/header.php';
    $sFilePersBancoDados  = dirname(__DIR__).'/Persistencia/PersistenciaBancoDados.php';
    $sFilePersFuncionario = dirname(__DIR__).'/Persistencia/PersistenciaFuncionario.php';
    $sFileFooter          = dirname(__DIR__).'/footer.php';
    require_once($sFileHeader);
    include_once($sFilePersBancoDados);
    include_once($sFilePersFuncionario);
    
?>
<div class = "divFormCadFuncionarios">
    <form class = "container" action = "/william/WEB-II---Projeto-Dois/Controller/ControllerFuncionarioAdd.php" method = "POST">
        <div class = "divGambiarra01">
            <div class = "container">
                <div class="form-group">
                    <label for="id_funcionario">Identificador do Funcion�rio</label>
                    <input type="number" class="form-control" name="IDFuncionario" placeholder="Nome">
                </div>
                <div class="form-group">
                    <label for="nome_fun">Nome do Funcion�rio</label>
                    <input type="text" class="form-control" name="Nome" placeholder="Nome">
                </div>
                <div class="form-group">
                    <label for="sobrenome_fun">Sobrenome</label>
                    <input type="text" class="form-control" name="Sobrenome" placeholder="Sobrenome">
                </div>
                <div class="form-group">
                    <label for="titulo_cortesia">Titulo</label>
                    <input type="text" class="form-control" name="Titulo" placeholder="Nome do Produto">
                </div>
                <div class="form-group">
                    <label for="preco">Titulo Cortesia</label>
                    <input type="text" class="form-control" name="TituloCortesia" placeholder="Preço do Produto">
                </div>
                <div class="form-group">
                    <label for="data_nasc">Data de Nascimento</label>
                    <input type="date" class="form-control" name="DataNac" placeholder="Preço do Produto">
                </div>
                <div class="form-group">
                    <label for="data_adm">Data de Adminiss�o</label>
                    <input type="date" class="form-control" name="DataAdmissao" placeholder="Preço do Produto">
                </div>
            </div>

            <div class = "container">
                <div class="form-group">
                    <label for="endereco">Endere�o</label>
                    <input type="text" class="form-control" name="Endereco" placeholder="Código da Categoria">
                </div>
                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" name="Cidade" placeholder="Descrição do Produto">
                </div>
                <div class="form-group">
                    <label for="regiao">Região</label>
                    <input type="text" class="form-control" name="Regiao" placeholder="Código do Produto">
                </div>
                <div class="form-group">
                    <label for="cep">Cep</label>
                    <input type="text" class="form-control" name="Cep" placeholder="Nome do Produto">
                </div>
                <div class="form-group">
                    <label for="pais">País</label>
                    <input type="text" class="form-control" name="Pais" placeholder="Preço do Produto">
                </div>
                <div class="form-group">
                    <label for="tel_residencial">Telefone Residencial</label>
                    <input type="text" class="form-control" name="TelefoneResidencial" placeholder="Preço do Produto">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-default">Confirmar</button>
        <a class="btn btn-default" href = "produto_lista.php">Cancelar</a>
        <button class="btn btn-default" >Limpar</button>   
    </form>
</div>
<?php
    include_once($sFileFooter);