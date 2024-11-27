<?php
require_once "../config/database.php";
require "../models/Pagamento.php";

class Arrecadacao{
    private $conexao;
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

    public function __construct(Banco $db) {
        $this->conexao = $db;
    }

    public function criarPagamento(){
        $this->pagamento = new Pagamento($fotoQRCode, $chave, $nome_da_conta, $conta, $agencia);
        $this->conexao->query($this->criarPagamento());
    }

    public function getIdArrecadacao($id_arrecadacao) {
        $query = "SELECT * FROM {$this->tabela} WHERE id = {$id_arrecadacao}";

    }

    public function create() {
        if (!$this->pagamento instanceof Pagamento) {
            return "Pagamento não encontrado!";
        }

        $verificar = "SELECT COUNT(*) FROM {$this->tabela} WHERE id_arrecadacao = '{$this->id_arrecadacao}';";
        $resultadoVerificar = $this->conexao->query($verificar);

        if ($resultadoVerificar && $resultadoVerificar->fetch_row()[0] > 0) {
            return "Arrecadação já cadastrada!";
        }

        $query = "INSERT INTO {$this->tabela} (titulo, nomeAnimal, nomeDono, descricao, valorArrecadacao, valorArrecadado, foto, id_pagamento) VALUES ('{$this->titulo}', '{$this->nomeAnimal}', '{$this->nomeDono}', '{$this->descricao}', '{$this->valorArrecadacao}', '{$this->valorArrecadado}', '{$this->foto}', '{$this->pagamento->id_pagamento}');";

        $resultado = $this->conexao->query($query);
    }

    public function read(){
        $query = "SELECT * FROM {$this->tabela} WHERE id_arrecadacao = '{$this->id_arrecadacao}';";
        $resultado = $this->conexao->query($query);
        return $resultado;
    }

    public function update(){
        $verificaSeExiste = "SELECT COUNT(*) FROM {$this->tabela} WHERE id_arrecadacao = '{$this->id_arrecadacao}';";
        $resultadoVerificacao = $this->conexao->query($verificaSeExiste);
    
        if ($resultadoVerificacao && $resultadoVerificacao->fetchColumn() === 0) {
            return "Arrecadação não encontrada!";
        }

        $query = "UPDATE {$this->tabela} SET ";
        $colunasArray = array_keys($valores);

        for($contador = 0; $contador < count($valores); $contador ++){
            $coluna = $colunasArray[$contador];
            $valor = $valores[$coluna];

            $query .= $contador != (count($valores)-1) ? $coluna . '= "'. $valor .'", ': $coluna . '= "'. $valor .'" ';
        }

        $query += "WHERE id_arrecadacao = {$this->id_arrecadacao};";
        $resultado = $this->conexao->query($query);
        return $resultado;
    }

    public function delete(){
        $query = "DELETE FROM {$this->tabela} WHERE id_arrecadacao = {$this->id_arrecadacao};";
        $resultado = $this->conexao->query($query);
        return $resultado;
    }
}