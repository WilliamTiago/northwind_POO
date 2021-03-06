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
            INSERT INTO Regiao(IDRegiao,DescricaoRegiao)
                 VALUES(" . $aCampos["IDRegiao"]. ",'" . $aCampos["DescricaoRegiao"]. "')";
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
               
        $sSql = "UPDATE Regiao
                    SET DescricaoRegiao  = '" . $aCampos["Nome"] . "'
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
        $sSql = "Delete from Regiao
                        where IDRegiao = " .  $Id;        
        print_r($sSql);
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
