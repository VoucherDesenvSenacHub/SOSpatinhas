<?php 

class Admin {
    private $tabela = 'admin';

    public $id_admin;
    public $nome;
    public $email;
    public $senha;
    public $foto;

    public function __construct($id_admin, $nome, $email){
        $this->id_admin = $id_admin;
        $this->nome = $nome;
        $this->email = $email;
    }

    public function create() {
        $query = "INSERT INTO {$this->tabela} (id_admin, nome, email, senha, foto) VALUES ('{$this->id_admin}', '{$this->nome}', '{$this->email}', '{$this->senha}', '{$this->foto}');";
        return $query;
    }

    public function read(){
        $query = "SELECT * FROM {$this->tabela} WHERE id_admin = '{$this->id_admin}';";
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

        $query += "WHERE id_admin = {$this->id_admin};";
        return $query;
    }

    public function delete(){
        $query = "DELETE FROM {$this->tabela} WHERE id_admin = {$this->id_admin};";
        return $query;
    }
}
?>