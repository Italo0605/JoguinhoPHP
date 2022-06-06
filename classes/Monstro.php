<?php
class Monstro{
    public $nome;
    public $vida;
    public $ataque;


    function __construct($tipo){
       switch ($tipo) {
            case '1':
                $this->nome = "Litten";
                $this->vida = 100;
                $this->ataque = 30;
                break;
            case '2':
                $this->nome = "Bubassaur";
                $this->vida = 140;
                $this->ataque = 25;
                break;
            case '3':
                $this->nome = "Froakie";
                $this->vida = 150;
                $this->ataque = 45;
                break;
       }
        
    }

    function atacar($oponente){
        $oponente->vida-= $this->ataque;
    }

    function recuperar(){

        $this->vida+= $this->vida * (10/100);
    }
}
?>