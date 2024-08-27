<?php


    // Define a classe Contato.
    class Contato {
        //Declara variáveis privadas para armazenar os atributos do contato.
        private $nome;
        private $email;
        private $telefone;

        // Construtor da classe que inicializa os atributos com os valores fornecidos.
        public function __construct($nome, $email, $telefone) {
            $this -> nome = $nome;
            $this -> email = $email;
            $this -> telefone = $telefone;

        }


        public function getNome() {
 
            // Retorna o valor armazenado no atributo $nome.
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

