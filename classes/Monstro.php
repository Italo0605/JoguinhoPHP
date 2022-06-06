<?php
class Monstro{
    public $nome;
    public $vidaTotal;
    public $vida;
    public $ataque;


    function __construct($tipo){
       switch ($tipo) {
            case '1':
                $this->nome = "Litten";
                $this->vidaTotal = 100;
                $this->ataque = 30;
                break;
            case '2':
                $this->nome = "Bubassaur";
                $this->vidaTotal = 140;
                $this->ataque = 25;
                break;
            case '3':
                $this->nome = "Froakie";
                $this->vidaTotal = 150;
                $this->ataque = 45; 
                break;
       }
       $this->vida = $this->vidaTotal;
    }

    function atacar($oponente){
        $oponente->vida -= $this->ataque;
    }

    function recuperar(){
        if($this->vida <= ($this->vidaTotal * (10/100))) /*só pode recuperar a vida se ela for menor que 10% da vida total*/{
            $this->vida+= $this->vida * (10/100);
        }
    }
}
?>