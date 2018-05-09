<?php

/**
 * Classe Controladora de todas as funcções utilizadas na aplicações.
 * 
 * @author William Tiago Velho da Silva Goebel
 * @since  28/04/2018 
 */
class PersistenciaRegiao {
    
    private $oFuncao;
    
    /**
     * Construtor da Classe.
     * 
     * @param type $oConexao
     */
    public function __construct($oConexao) {
        $this->oFuncao = $oConexao;
    }   
    
    /**
     * Utilizado para buscar todos os funcionários cadastrados
     * 
     * return type Array[]
     */
    public function selectAllRegiaos() {
        $aRegiaos = [];

        $sSql = "
            SELECT IDRegiao,
                   DescricaoRegiao                   
              FROM Regiao
        ";

        return mysqli_query($this->oFuncao->getConexao(), $sSql);
    }

    /**
     * Insere os funcion�rios.
     * 
     * @param type $aCampos
     * @return type
     */
    public function insereRegiao($aCampos) {
        $sSql = "
            INSERT INTO Regiaos(IDRegiao, Sobrenome, Nome, Titulo, TituloCortesia, DataNac, DataAdmissao, Endereco, Cidade, Regiao, Cep, Pais, TelefoneResidencial)
                 VALUES(" . $aCampos["IDRegiao"]. ",'" . $aCampos["Sobrenome"]. "','" . $aCampos["Nome"]. "','" . $aCampos["Titulo"]. "','". $aCampos["TituloCortesia"]. "','" . $aCampos["DataNac"]. "','"
                . $aCampos["DataAdmissao"]. "','" . $aCampos["Endereco"]. "','" . $aCampos["Cidade"]. "','" . $aCampos["Regiao"]. "','" . $aCampos["Cep"]. "','" . $aCampos["Pais"]. "','" . $aCampos["TelefoneResidencial"] . "')";
        return mysqli_query($this->oFuncao->getConexao(), $sSql);
    }
    
    /**
     * Realiza o UPDATE no funcion�rio desejado.
     * 
     * @param type $oConexao
     * @param type $aCampos
     * @return type
     */
    public function alterarCampos($aCampos) {
               
        $sSql = "UPDATE Regiaos
                    SET IDRegiao       = " . $aCampos["IDRegiao"] . ",
                        Nome                = '" . $aCampos["Nome"] . "',
                        Sobrenome           = '" . $aCampos["Sobrenome"] . "',
                        Titulo              = '" . $aCampos["Titulo"] . "',
                        TituloCortesia      = '" . $aCampos["TituloCortesia"] . "',
                        DataNac             = '" . $aCampos["DataNac"] . "',
                        DataAdmissao        = '" . $aCampos["DataAdmissao"] . "',
                        Endereco            = '" . $aCampos["Endereco"] . "',
                        Cidade              = '" . $aCampos["Cidade"] . "',
                        Regiao              = '" . $aCampos["Regiao"] . "',
                        Cep                 = '" . $aCampos["Cep"] . "',
                        Pais                = '" . $aCampos["Pais"] . "',
                        TelefoneResidencial = '" . $aCampos["TelefoneResidencial"] . "'
                  WHERE IDRegiao = " . $aCampos["IDRegiao"];

        echo"<pre>";
        print_r($sSql);
        
        return mysqli_query($this->oFuncao->getConexao(), $sSql);
    }
    
    /**
     * Realiza o DELETE do funcion�rio desejado.
     * 
     * @param type $oConexao
     * @param type $iId
     * @return type
     */

    public function excluiDado($Id) {
        $sSql = "Delete from Regiaos
                        where IDRegiao = " .  $Id;        
        return mysqli_query($this->oFuncao->getConexao(),  $sSql);
    }
    
    public function buscaRegiao($iId) {
        $aRegiao = [];
        $sSql = "
            SELECT DescricaoRegiao,
                   IDRegiao                   
                   FROM Regiao
             WHERE IDRegiao = " . $iId;
        
        $oRegiao = mysqli_query($this->oFuncao->getConexao(), $sSql);
        while($oLinhas = mysqli_fetch_array($oRegiao)) {
            $aRegiao[] = $oLinhas;
        }
        
        return $aRegiao[0];
    }
    
}
