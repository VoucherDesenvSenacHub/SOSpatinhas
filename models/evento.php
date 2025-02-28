<?php
require "../models/endereco_evento.php";

class Evento {
    private $tabela = 'evento';

    public $id_evento;
    public $nome;
    public $descricao;
    public $foto;
    public $enderecoEvento;

    public function __construct($id_evento, $nome, $descricao, $foto, $infoEnderecoEvento){
        $this->id_evento = $id_evento;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->foto = $foto;
        $this->enderecoEvento = new Enderecoevento($infoEnderecoEvento);
    }

    public function create() {
        $query = "INSERT INTO {$this->tabela} (id_evento, nome, descricao, foto, enderecoEvento) VALUES ('{$this->id_evento}', '{$this->nome}', '{$this->descricao}', '{$this->foto}', '{$this->enderecoEvento->id_endereco_evento}');";
        return $query;
    }

    public function read(){
        $query = "SELECT * FROM {$this->tabela} WHERE id_evento = '{$this->id_evento}';";
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

        $query += "WHERE id_evento = {$this->id_evento};";
        return $query;
    }

    public function delete(){
        $query = "DELETE FROM {$this->tabela} WHERE id_evento = {$this->id_evento};";
        return $query;
    }
}
?>