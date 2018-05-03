<?php

/**
  * Classe utilizada para realizar a concexão com o Banco de Dados
  * 
  * @author Roberto Oswaldo Klann
  * @since  25/04/2018
 */
class PersistenciaBancoDados {
    
    private $oConexao;
    
    /**
     * Construtor da Classe.
     * 
     * @param type $oHost
     * @param type $oRoot
     * @param type $oSenha
     * @param type $oBanco
     */
    public function __construct($oHost, $oRoot, $oSenha, $oBanco) {
        $this->setConexao($oHost, $oRoot, $oSenha, $oBanco);
    }
    
    /**
     * Retorna a conexão com o banco de dados.
     * 
     * @return type
     */
    public function getConexao() {
        $this->oConexao = (is_null($this->oConexao)) ? $this->setConexao($oHost, $oRoot, $oSenha, $oBanco) : $this->oConexao;
        return $this->oConexao;
    }
    
    /**
     * Seta a conexão com o banco de dados.
     * 
     * @param type $oHost
     * @param type $oRoot
     * @param type $oSenha
     * @param type $oBanco,
     */
    public function setConexao($oHost, $oRoot, $oSenha, $oBanco) {
        $this->oConexao = mysqli_connect($oHost, $oRoot, $oSenha, $oBanco);
    }
    
}