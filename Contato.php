<?php

    class Contato {
        private $nome;
        private $email;
        private $telefone;

        public function __construct($nome, $email, $telefone) {
            $this -> nome = $nome;
            $this -> email = $email;
            $this -> telefone = $telefone;

        }


        public function getNome() {

            return $this -> nome;
        }

        public function getEmail() {
           return $this -> email; 
        }
        
        public function getTelefone() {
            return $this -> telefone;   
        }      
    }
      

?>

