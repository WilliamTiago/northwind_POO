<?php

/**
 * Classe Controladora de todas as funcções utilizadas na aplicações.
 * 
 * @author William Tiago Velho da Silva Goebel
 * @since  28/04/2018 
 */
class PersistenciaTerritorio {
    
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
    public function selectAllTerritorios() {
        $aTerritorios = [];

        $sSql = "
            SELECT DescricaoTerritorio,
                   IDRegiao,
                   IDTerritorio                                      
              FROM territorios
              JOIN regiao
             USING(IDRegiao)
        ";

        return mysqli_query($this->oFuncao->getConexao(), $sSql);
    }

    /**
     * Insere os funcion�rios.
     * 
     * @param type $aCampos
     * @return type
     */
    public function insereTerritorio($aCampos) {
        $sSql = "
            INSERT INTO Territorios(IDTerritorio,IDRegiao, DescricaoTerritorio)
                 VALUES(" . $aCampos["IDTerritorio"]. ",'" . $aCampos["IDRegiao"]. "','" . $aCampos["DescricaoTerritorio"]. "')";
        print_r($sSql);
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
               
        $sSql = "UPDATE Territorios
                    SET DescricaoTerritorio  = '" . $aCampos["Nome"] . "',
                        IDTerritorio         = '" . $aCampos["IDTerritorio"] . "'
                  WHERE IDTerritorio = " . $aCampos["IDTerritorio"];

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
        $sSql = "Delete from Territorios
                        where IDTerritorio = " .  $Id;        
        print_r($sSql);
        return mysqli_query($this->oFuncao->getConexao(),  $sSql);
    }
    
    public function buscaTerritorio($iId) {
        $aTerritorio = [];
        $sSql = "
            SELECT DescricaoTerritorio,
                   IDTerritorio                   
                   FROM territorios
             WHERE IDTerritorio = " . $iId;
        
        $oTerritorio = mysqli_query($this->oFuncao->getConexao(), $sSql);
        while($oLinhas = mysqli_fetch_array($oTerritorio)) {
            $aTerritorio[] = $oLinhas;
        }
        
        return $aTerritorio[0];
    }
    
}
