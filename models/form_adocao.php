<?php
require_once "../config/database.php";

class formAdocao{
    private $conexao;
    private $tabela = 'formulario_adocao';

    protected $id_formulario_adocao;
    protected $id_animal;
    protected $id_usuario;
    protected $termos;
    protected $data_adocao;

    public function __construct($db){
        $this->conexao = $db;
    }

    public function getIdForm($id_formulario_adocao){
        $query = "SELECT * FROM {$this->tabela} WHERE id = {$this->id_formulario_adocao}";
        $resultado = $this->conexao->query($query);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function create(){
        $query = "INSERT INTO {$this->tabela}(id_formulario_adocao, id_animal, id_usuario, termos, data_adocao) VALUES ('{$this->id_formulario}', '{$this->id_animal}', '{$this->id_usuario}', '{$this->termos}', '{$this->data_adocao}';)";
        $resultado = $this->conexao->query($query);
        return $resultado;
    }

    public function read(){
        $query = "SELECT * FROM {$this->tabela} WHERE id_endereco = {$this->id_endereco}";
        $resultado = $this->conexao->query($query);
        return $resultado;
    }

    public function update($valores){
        $query = "UPDATE {$this->tabela} SET";
        $colunasArray = array_keys($valores);
            for($contador = 0; $contador < count($valores); $contador++){
                $coluna = $colunasArray[$contador];
                $valor = $valores[$coluna];

                $query .= $contador != (count($valores) - 1) ? $coluna . ' = "'. $valor . '", ' : $coluna . ' = "'. $valor . '" ';
            }
            $query += " WHERE id_formulario_adocao = {$this->id_formulario_adocao};";
            $resultado = $this->conexao->query($query);
            return $resultado;
    }

    public function delete(){
        $query = "DELETE FROM {$this->tabela} WHERE id_formulario_adocao = {$this->id_formulario_adocao}";
        $resultado = $this->conexao->query($query);
        return $resultado;
    }
}

?>