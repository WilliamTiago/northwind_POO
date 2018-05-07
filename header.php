<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset = "utf-8">
    <title>North Wind</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/William/desenvolvimento_web_2/northwind_POO/css/loja.css">
    <link rel="stylesheet" type="text/css" href="/William/desenvolvimento_web_2/northwind_POO/css/bootstrap.css">
</head>

<!-- Header Fixo para todas as paginas -->
<body>
    <div class ="navbar navbar-inverse navbar-fixed-top">
        <div class ="container">
            <div class ="navbar-header">
                <a href = "/William/desenvolvimento_web_2/northwind_POO/index.php" class ="navbar-brand">North Wind</a>
            </div>
            <div>
                <ul class ="nav navbar-nav">
                    <li><a href ="/William/desenvolvimento_web_2/northwind_POO/View/ViewConsultaFuncionario.php">Funcionários</a></li>
                    <li><a href ="/William/desenvolvimento_web_2/northwind_POO/View/ViewManutencaoRegiao">Regiões</a></li>
                    <li><a href ="/William/desenvolvimento_web_2/northwind_POO/View/ViewManutencaoTerritorio">Territórios</a></li>
                    <?php
                    if(isset($AddRegiao)){
                        echo'<li><a href ="/William/desenvolvimento_web_2/northwind_POO/View/ViewManutencaoRegiao">Cadastrar Região</a></li>';
                    }; 
                    if(isset($AddFuncionario)){
                        echo'<li><a href ="/William/desenvolvimento_web_2/northwind_POO/View/ViewManutencaoFuncionario.php">Cadastrar Funcionario</a></li>';
                    };
                    if(isset($AddRegiao)){
                        echo'<li><a href ="/William/desenvolvimento_web_2/northwind_POO/View/ViewManutencaoTerritorio">Cadastrar Território</a></li>';
                    };
                    ?>
                    <li style="float:rigth;"><a href ="">Sobre</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>