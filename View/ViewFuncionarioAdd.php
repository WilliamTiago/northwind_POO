<?php
$sFileHeader = dirname(__DIR__) . '/header.php';
$sFilePersBancoDados = dirname(__DIR__) . '/Persistencia/PersistenciaBancoDados.php';
$sFilePersFuncionario = dirname(__DIR__) . '/Persistencia/PersistenciaFuncionario.php';
$sFileFooter = dirname(__DIR__) . '/footer.php';
require_once($sFileHeader);
include_once($sFilePersBancoDados);
include_once($sFilePersFuncionario);
?>
<div class = "divFormCadFuncionarios">
    <form class = "container" action = "/William/desenvolvimento_web_2/northwind_POO/Controller/ControllerFuncionarioAdd.php" method = "POST">
        <div class = "divGambiarra01">
            <div class = "container">
                <div class="form-group">
                    <label for="id_funcionario">Identificador do Funcionário</label>
                    <input type="number" class="form-control" name="IDFuncionario" placeholder="Código do Funcionário" required>
                </div>
                <div class="form-group">
                    <label for="nome_fun">Nome do Funcionário</label>
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
                    <input type="text" class="form-control" name="TituloCortesia" placeholder="Titulo Cortesia">
                </div>
                <div class="form-group">
                    <label for="data_nasc">Data de Nascimento</label>
                    <input type="date" class="form-control" name="DataNac" placeholder="Data Nascimento" required>
                </div>
                <div class="form-group">
                    <label for="data_adm">Data de Adminissão</label>
                    <input type="date" class="form-control" name="DataAdmissao" placeholder="Data Admissão" required> 
                </div>
            </div>

            <div class = "container">
                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" name="Endereco" placeholder="Endereço">
                </div>
                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" name="Cidade" placeholder="Cidade">
                </div>
                <div class="form-group">
                    <label for="regiao">Região</label>
                    <input type="text" class="form-control" name="Regiao" placeholder="Região">
                </div>
                <div class="form-group">
                    <label for="cep">Cep</label>
                    <input type="text" class="form-control" name="Cep" placeholder="Cep">
                </div>
                <div class="form-group">
                    <label for="pais">País</label>
                    <input type="text" class="form-control" name="Pais" placeholder="País">
                </div>
                <div class="form-group">
                    <label for="text">Telefone Residencial</label>
                    <input type="text" class="form-control" name="TelefoneResidencial" placeholder="Telefone">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-default">Confirmar</button>
        <a class="btn btn-default" href = "/William/desenvolvimento_web_2/northwind_POO/View/ViewConsultaFuncionario.php">Cancelar</a>
        <button class="btn btn-default" >Limpar</button>
    </form>
</div>
<?php
include_once($sFileFooter);