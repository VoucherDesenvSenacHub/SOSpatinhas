<?php 
require_once "../config/database.php";
require_once "crud.php";
class Endereco {
    private $conexao;
    private $tabela = 'endereco';

    protected $id_endereco;
    protected $cidade;
    protected $uf;
    protected $rua;
    protected $numero;
    protected $bairro;
    protected $complemento;


    public function __construct($db){
        $this->conexao = $db;
    }


    public function create(){
        $query = "INSERT INTO {$tihs->tabela} (cidade, uf, rua, numero, bairro, complemento) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conexao->prepare($query);
        $stmt->bind_param("ssssss", $this->cidade, $this->uf, $this->rua, $this->numero, $this->bairro, $this->complemento);
        return $stmt->execute();
    }

    public function read(){
        $query = "SELECT * FROM {$this->tabela} WHERE id_endereco = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bind_param("i", $this->id_endereco);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public function update($valores){
        $query = "UPDATE {$this->tabela} SET";
        $colunasArray = array_keys($valores);
        $tipoParam = str_repeat('s', count($colunasArray));
        $valorParam = array_values($valores);

        foreach($colunasArray as $index => $coluna){
            $query .= "{$coluna} = ?";
            if($index < count($colunasArray) - 1){
                $query .= ", ";
            }
        }

        $query .= " WHERE id_endereco = ?";
        $stmt = $this->conexao->prepare($query);
        $valorParam{} = $this->id_endereco;
        $stmt->bind_param($tipoParam . 'i', ...$valorParam);
        return $stmt->execute();
    }

    public function delete(){
        $query = "DELETE FROM {$this->tabela} WHERE id_endereco = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bind_param('i', this->id_endereco);
        return $stmt->execute();
    }

}
?>