<?php 

class Endereco {
    private $tabela = 'endereco';

    public $id_endereco;
    public $cidade;
    public $uf;
    public $rua;
    public $numero;
    public $bairro;
    public $complemento;

    public function __construct($infosEndereco){
        $this->id_endereco = $infosEndereco['id_endereco'];
        $this->cidade = $infosEndereco['cidade'];
        $this->uf = $infosEndereco['uf'];
        $this->rua = $infosEndereco['rua'];
        $this->numero = $infosEndereco['numero'];
        $this->bairro = $infosEndereco['bairro'];
        $this->complemento =$infosEndereco['complemento'];
    }

    public function create() {
        $query = "INSERT INTO {$this->tabela} (id_endereco, cidade, uf, rua, numero, bairro, complemento) VALUES ('{$this->id_endereco}', '{$this->cidade}', '{$this->uf}', '{$this->rua}', '{$this->numero}', '{$this->bairro}', '{$this->complemento}');";
        return $query;
    }

    public function read(){
        $query = "SELECT * FROM {$this->tabela} WHERE id_endereco = '{$this->id_endereco}';";
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

        $query += "WHERE id_endereco = {$this->id_endereco};";
        return $query;
    }

    public function delete(){
        $query = "DELETE FROM {$this->tabela} WHERE id_endereco = {$this->id_endereco};";
        return $query;
    }
}
?>