<?php 
require_once "../config/database.php";
require_once "crud.php";
class Endereco implements Crud {
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


    public function getIdEndereco($id_endereco){
        $query = "SELECT * FROM  {$this->tabela} WHERE id = {$this->id_endereco}";
        $resultado = $this->conexao->query($query);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function create(){
            $query = 'INSERT INTO {$this->tabela}(cidade, uf, rua, numero, bairro, complemento) VALUES ("' .$this->cidade . '", "' .$this->uf . '", "' .$this->rua . '", "' .$this->numero . '", "' .$this->bairro . '", "' .$this->complemento . '");';
            $resultado = $this->conexao->query($query);
            return $resultado;
    }

    public function read(){
            $query = "SELECT * FROM {$this->tabela} WHERE id_endereco = {$this->id_endereco}";
            $resultado = $this->conexao->query($query);
            return $resultado;
    }

    public function update($valores){
        $query = 'UPDATE {$this->tabela} SET';
        $colunasArray = array_keys($valores);
            for($contador = 0; $contador < count($valores); $contador++){
                $coluna = $colunasArray[$contador];
                $valor = $valores[$coluna];

                $query .= $contador != (count($valores) - 1) ? $coluna .' = "'. $valor . '", ' : $coluna .' = "'. $valor .'" ';
            }
            $query += "WHERE id_endereco = {$this->id_endereco};";
            $resultado = $this->conexao->query($query);
            return $resultado;
    }

    public function delete(){
        $query =  "DELETE FROM {$this->tabela} WHERE id_endereco = {$this->id_endereco}";
        $resultado = $this->conexao->query($query);      
        return $resultado;
    }

}
?>