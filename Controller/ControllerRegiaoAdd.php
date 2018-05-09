<?php

    $sFileHeader          = dirname(__DIR__).'/header.php';
    $sFilePersBancoDados  = dirname(__DIR__).'/Persistencia/PersistenciaBancoDados.php';
    $sFilePersRegiao = dirname(__DIR__).'/Persistencia/PersistenciaRegiao.php';
    
    require_once($sFileHeader);
    include_once($sFilePersBancoDados);
    include_once($sFilePersRegiao);
    
    $oConexao     = new PersistenciaBancoDados("localhost", "root", "", "northwind");
    $oRegiao = new PersistenciaRegiao($oConexao);
    
    $aCampos = [
        "IDRegiao"       => $_POST["IDRegiao"],
        "DescricaoRegiao"                => $_POST["DescricaoRegiao"]        
    ];
    
    $bInsersao = $oRegiao->insereRegiao($aCampos);
    
    if($bInsersao) {
?>
<script>
    alert("Região cadastrado com Sucesso!");s
    window.location.href = '/William/desenvolvimento_web_2/northwind_POO/View/ViewConsultaRegiao.php';
</script>

<?php
    } else {
?>
<script>
    alert("Região não cadastrado!");
    window.location.href = '/William/desenvolvimento_web_2/northwind_POO/View/ViewConsultaRegiao.php';
</script>
<?php
    
}