<?php 

class Enderecoevento {
    private $tabela = 'endereco_evento';

    public $id_endereco_evento;
    public $rua;
    public $bairro;
    public $complemento;

    public function __construct($infoEnderecoEvento){
        $this->id_endereco_evento = $infoEnderecoEvento['id_endereco_evento'];
        $this->rua = $infoEnderecoEvento['rua'];
        $this->bairro = $infoEnderecoEvento['bairro'];
        $this->complemento = $infoEnderecoEvento['complemento'];
    }

    public function create() {
        $query = "INSERT INTO {$this->tabela} (id_endereco_evento, rua, bairro, complemento) VALUES ('{$this->id_endereco_evento}', '{$this->rua}', '{$this->bairro}', '{$this->complemento}');";
        return $query;
    }

    public function read(){
        $query = "SELECT * FROM {$this->tabela} WHERE id_endereco_evento = '{$this->id_endereco_evento}';";
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

        $query += "WHERE id_endereco_evento = {$this->id_endereco_evento};";
        return $query;
    }

    public function delete(){
        $query = "DELETE FROM {$this->tabela} WHERE id_endereco_evento = {$this->id_endereco_evento};";
        return $query;
    }
}
?>