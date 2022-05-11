<?php

class User{

    public $nome;
    public $cognome;
    public $email;
    public $pagamento;
    public $sconto; 


    public function __construct($_nome, $_cognome, $_email, $_pagamento){
        $this -> nome  = $_nome;
        $this -> cognome = $_cognome;
        $this -> email = $_email;
        $this -> pagamento = $_pagamento;
    }
    
    public function setSconto( $nome ){
       if($nome = Simone) {
           $this->sconto = 20;
       }
    }
    
    public function getSconto( ){
        return $this -> sconto;
    }
}




?>