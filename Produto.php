<?php
class Produto{
    public $id;
    public $nome;
    public $valor;
    public $quant;
    public $valorT;

    public function calcular(){
        $this->valorT = $this->valor * $this->quant;   
    }
}
?>