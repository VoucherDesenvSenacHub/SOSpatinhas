<?php
require "../models/endereco.php";

class Usuario{
    private $tabela = 'usuario';

    public $id_usuario;
    public $nome;
    public $email;
    public $senha;
    public $data_nasc;
    public $cpf;
    public $rg;
    public $telefone;
    public $foto;
    public $endereco;


    public function __construct($id_usuario, $nome, $email, $senha, $data_nasc, $cpf, $rg, $telefone, $foto, $infosEndereco){
        $this->id_usuario = $id_usuario;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->data_nasc = $data_nasc;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->telefone = $telefone;
        $this->foto = $foto;
        $this->endereco = new Endereco($infosEndereco);

    }

    public function create() {
        $query = "INSERT INTO {$this->tabela} (id_usuario, nome, email, senha, data_nasc, cpf, rg, telefone, foto, endereco) VALUES ('{$this->id_usuario}', '{$this->nome}', '{$this->email}', '{$this->senha}', '{$this->data_nasc}', '{$this->cpf}', '{$this->rg}', '{$this->telefone}', '{$this->foto}', '{$this->endereco->id_endereco}');";
        return $query;
    }

    public function read(){
        $query = "SELECT * FROM {$this->tabela} WHERE id_usuario = '{$this->id_usuario}';";
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

        $query += "WHERE id_usuario = {$this->id_usuario};";
        return $query;
    }

    public function delete(){
        $query = "DELETE FROM {$this->tabela} WHERE id_usuario = {$this->id_usuario};";
        return $query;
    }
}
