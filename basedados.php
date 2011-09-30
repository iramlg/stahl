<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of basedados
 *
 * @author Diego Mosela diego@agconexa.com
 */
class basedados {

    private $type = 'mysql';
    private $host = 'dbmy0005.whservidor.com';
    private $user = 'stahltalha';
    private $pass = 'lowlight';
    private $base = 'stahltalha';
    private $dbst = null;

    public function __construct() {
        $this->_open();
    }

    public function getConn(){
        return $this->dbst;
    }
    
    public function __destruct() {
        $this->close();
    }

    private function _open() {
        try {
            $this->dbst = new PDO($this->type . ":host=" . $this->host . ";dbname=" . $this->base, $this->user, $this->pass);
            $this->dbst->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            return $this->dbst;
        } catch (PDOException $ex) {
            echo "ERRO:" . $ex->getMessage();
        }
    }

    public function close() {
        $this->dbst = null;
    }

}

?>
