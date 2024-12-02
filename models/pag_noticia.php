<?php
require_once "../config/database.php";

class PagNoticia {
    private $conexao;
    private $tabela = 'pag_noticia'

    public $id_noticia;
    public $titulo;
    public $foto;
    public $link;

    public function __construct($bd){
        $this->conexao = $bd;
    }

    public function getIdNoticia($id_noticia){
        $query = "SELECT * FROM {$this->tabela} WHERE id = {$this->id_noticia}";
        $resultado = $this->conexao->query($query);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function create(){
        $query = "INSERT INTO {$this->tabela} (titulo, foto, link) VALUES ($this->titulo, $this->foto, '$this->link');";
        $resultado = $this->conexao->query($query);
        return $resultado;
    }

    public function read(){
        $query = "SELECT * FROM {$this->tabela} WHERE id_noticia = '{$this->id_noticia}';";
        $resultado = $this->conexao->query($query);
        return $resultado;
    }

    public function update($valores){
        $query = "UPDATE {$this->tabela} SET";
        $colunasArray = array_keys($valores);
            for($contador = 0; $contador < count($valores); $contador++){
                $coluna = $colunasArray[$contador];
                $valor = $valores[$coluna];

                $query .= $contador != (count($valores) - 1) ? $coluna .' = "'. $valor . '", ' : $coluna .' = "'. $valor .'" ';
            }
            $query += " WHERE id_noticia = {$this->id_noticia};";
            $resultado = $this->conexao->query($query);
            return $resultado;
    }

    public function delete(){
        $query =  "DELETE FROM {$this->tabela} WHERE id_noticia = {$this->id_noticia}";
        $resultado = $this->conexao->query($query);      
        return $resultado;
    }
}
?>