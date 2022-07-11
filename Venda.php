<?php
class Venda{
    public $produtos;
    public $valor;
    private $numProd=0;
    public $forma_de_pag;

    public function imprimir(){
        echo "Venda no valor:" .$this->valor . "<br></br>";
        $x=0;

        for($i=0; $i<$this->numProd; $i++){
            if($this->produtos[$i]->forma_de_pag==1){
                if($x==0){
                    echo "Venda a prazo: </br>";
                    $x++;
                }
                echo "Produto: " . $this->produtos[$i]->nome . "</br>";
                echo " - Valor UN: " . $this->produtos[$i]->valor . "</br>";
                echo " - Quantidade: " . $this->produtos[$i]->quant . "</br>";
                echo "Valor Total: " . $this->produtos[$i]->valorT. "</br></br>";
            }
        }
        for($i=0; $i<$this->numProd; $i++){
            if($this->produtos[$i]->forma_de_pag==2){
                if($x==1){
                    echo "Venda a vista: </br>";
                    $x++;
                }

                echo "Produto: " . $this->produtos[$i]->nome . "</br>";
                echo " - Valor UN: " . $this->produtos[$i]->valor . "</br>";
                echo " - Quantidade: " . $this->produtos[$i]->quant . "</br>";
                echo "Valor Total: " . $this->produtos[$i]->valorT. "</br></br>";
            }
        }

        for($i=0; $i<$this->numProd; $i++){
            if($this->produtos[$i]->forma_de_pag==3){
                if($x==2){
                    echo "A prazo (pagamento já efetuado): </br>";
                    $x++;
                }
                
                echo "Produto: " . $this->produtos[$i]->nome . "</br>";
                echo " - Valor UN: " . $this->produtos[$i]->valor . "</br>";
                echo " - Quantidade: " . $this->produtos[$i]->quant . "</br>";
                echo "Valor Total: " . $this->produtos[$i]->valorT. "</br></br>";
            }
        }
    }

    public function gerarP(){
        $p1 = new Produto();
        $p1->nome = "Coca cola";
        $p1->id = 1;
        $p1->quant = 2;
        $p1->valor = 8;
        $p1->forma_de_pag= 2;
        $this->numProd++;
        $p1->calcular();
   
        $p2 = new Produto();
        $p2->nome = "Carne";
        $p2->id = 2;
        $p2->quant = 3;
        $p2->valor = 25;
        $p2->forma_de_pag = 1;
        $this->numProd++;
        $p2->calcular();
   
        $p3 = new Produto();
        $p3->nome = "Carvão";
        $p3->id = 3;
        $p3->quant = 1;
        $p3->valor = 10;
        $p3->forma_de_pag = 3;
        $this->numProd++;
        $p3->calcular();
   
        $p4 = new Produto();
        $p4->nome = "Limão";
        $p4->id = 4;
        $p4->quant = 5;
        $p4->valor = 2;
        $p4->forma_de_pag= 2;
        $this->numProd++;
        $p4->calcular();
   
        $this->produtos[0] = $p1;
        $this->produtos[1] = $p2;
        $this->produtos[2] = $p3;
        $this->produtos[3] = $p4;  
     }
 
public function calcularVenda(){
    $this->valor = 0;
    for($i=0; $i<$this->numProd; $i++){
        $this->valor += $this->produtos[$i]->valorT;
    }
}

}

?>
 