<?php
// Define a classe GerenciadorDeContatos.
class GerenciadorDeContatos {
    private $contatos = [];
 
    // Método público para adicionar um novo contato à lista.
    public function adicionarContato($nome, $email, $telefone) {
          // Criando um atribuição da classe Contato com os valores fornecidos.
        $contato = new Contato($nome, $email, $telefone);
        $this->contatos[] = $contato;
    }
 
    public function getContatos() {
        // Retorna o array de contatos.
        return $this->contatos;
    }
 
    public function deletarContato($indice) {
        if (isset($this->contatos[$indice])) {
            array_splice($this->contatos, $indice, 1);
        }
    }
}
?>