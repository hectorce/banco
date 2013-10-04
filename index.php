<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class banco {
    
    private $dtVencimento;
    private $dtBase;
            
    public function __construct() {
        echo "inicio..." . nl2br("\n");
    }
    
    public function fat_Venc($param) {
        $this->dtBase = "07/10/1997";
        $this->dtVencimento = $param;
        //$dias = date_diff strtotime($this->dtBase) , strtotime($this->dtVencimento);
    return $dias;
    }
    
    public function calc_digito($args) {
        
        
    }
    
    public function calc_digito_geral($args) {
        
        
    }
    
    public function retorno_codigo($args) {
        
        
    }
    
    public function __destruct() {
        echo nl2br("\n");
        echo "tchau";
    }
    
    // ----------------------------------------------------------------------
    
    public function teste() {
        $datetime1 = date_create('2009-10-11');
        $datetime2 = date_create('2009-10-13');
        $interval = date_diff($datetime1, $datetime2);
        echo $interval->format('%R%a days');        
    }
}

// chamanda
$cls = new banco();
//echo $cls ->fat_Venc("30/08/2013");
echo $cls->teste();

?>
