<?php
require "../models/pagamento.php";

class Arrecadacao{
    private $tabela = 'Arrecadacao';

    public $id_arrecadacao;
    public $titulo;
    public $nomeAnimal;
    public $nomeDono;
    public $descricao;
    public $valorArrecadacao;
    public $valorArrecadado;
    public $foto;
    public $pagamento;


   
    public function criarPagamento(){
        $this->pagamento = new Pagamento($fotoQRCode, $chave, $nome_da_conta, $conta, $agencia);
        $this->conexao->query($this->criarPagamento());
    }

    public function getIdArrecadacao($id_arrecadacao) {
        $query = "SELECT * FROM {$this->tabela} WHERE id = {$id_arrecadacao}";

    }

    public function __construct($titulo, $nomeAnimal, $nomeDono, $descricao, $valorArrecadacao, $valorArrecadado, $foto, $infosPagamento) {
        $this->titulo = $titulo;
        $this->nomeAnimal = $nomeAnimal;
        $this->nomeDono = $nomeDono;
        $this->descricao = $descricao;
        $this->valorArrecadacao = $valorArrecadacao;
        $this->valorArrecadado = $valorArrecadado;
        $this->foto = $foto;
        $this->pagamento = new Pagamento($infosPagamento);
    }
    

    public function create() {
        $query = "INSERT INTO {$this->tabela} (titulo, nomeAnimal, nomeDono, descricao, valorArrecadacao, valorArrecadado, foto, id_pagamento) VALUES ('{$this->titulo}', '{$this->nomeAnimal}', '{$this->nomeDono}', '{$this->descricao}', '{$this->valorArrecadacao}', '{$this->valorArrecadado}', '{$this->foto}', '{$this->pagamento->id_pagamento}');";
        return $query;
    }

    public function read(){
        $query = "SELECT * FROM {$this->tabela} WHERE id_arrecadacao = '{$this->id_arrecadacao}';";
        return $query;
    }

    public function update($valores){
        $query = "UPDATE {$this->tabela} SET ";
        $colunasArray = array_keys($valores);

        for($contador = 0; $contador < count($valores); $contador ++){
            $coluna = $colunasArray[$contador];
            $valor = $valores[$coluna];

            $query .= $contador != (count($valores)-1) ? $coluna . '= "'. $valor .'", ': $coluna . '= "'. $valor .'" ';
        }

        $query += "WHERE id_arrecadacao = {$this->id_arrecadacao};";
        return $query;
    }

    public function delete(){
        $query = "DELETE FROM {$this->tabela} WHERE id_arrecadacao = {$this->id_arrecadacao};";
        return $query;
    }
}
