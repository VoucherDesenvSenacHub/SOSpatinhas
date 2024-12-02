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

    

    public function create(){
        $query = "INSERT INTO {$this->tabela} (id_animal, id_usuario, termos, data_adocao) VALUES (?, ?, ?, ?)";
        $stmt = $this->conexap->prepare($query);
        $stmt->bind_param("isss", $this->id_animal, $this->id_usuario, $this->termos, $this->data_adocao);
        return $stmt->execute();
    }

    public function read(){
        $query = "SELECT * FROM {$this->tabela} WHERE id_formulario_adocao = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bind_param("i", $this->id_formulario_adocao);
        $stmt->execute();
        return $stmt->get_Result()->fetch_all(MYSQLI_ASSOC);
    }

    public function update($valores){
        $query = "UPDATE {$this->tabela} SET";
        $colunasArray = array_keys($valores);
        $tipoParam = str_repeat('s', count($valores));
        $valorParam = array_values($valores);

        foreach($colunasArray as $index => $coluna) {
            $query .= "{$coluna} = ?";
            if($index < count($colunasArray) - 1){
                $query .= ", ";
            } 
        }

        $query .= "WHERE id_formulario_adocao = ?";
        $stmt = $this->conexao->prepare($query);
        $valorParam[] = $this->id_formularo_adocao;
        $stmt->bind_param($tipoParam . 'i', ...$valorParam);
        return $stmt->execute();
    }

    public function delete(){
        $query = "DELETE FROM {$this->tabela} WHERE id_formulario_adocao = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bind_param("i", $this->id_formulario_adocao);
        return $stmt->execute();
    }
}

?>