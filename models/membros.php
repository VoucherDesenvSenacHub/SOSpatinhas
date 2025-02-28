<?php
class Membros {
    private $conexao;
    private $tabela = 'membro';

    public $id_membro; 
    public $nome;
    public $email;
    public $senha;
    public $telefone;

    public function __construct($db){
        $this->conexao = $db;
    }

    public function getIdMembro($id_membro){
        $query = "SELECT * FROM {$this->tabela} WHERE id = {$this->id_membro}";
        $resultado = $this->conexao->query($query);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
    public function atualizar($atualizarMembro) {
        $query = 'UPDATE membro SET';
        $colunasArray = array_keys($atualizarMembro);
        if($atualizarMembro){
            for($contador = 0; $contador < count($); $contador++){
                $coluna = $colunasArray[$contador];
                $valor = $s[$coluna];

                $query .= $contador != (count($valores) - 1) ? $coluna .' = "'. $valor .'", ' : $coluna .' = "'. $valor .'" ';
            }

            return $query .= 'WHERE nome = "' . $this->nome . '";';
        }else{
            throw new Exception('Erro ao atualizar o membro:  '.$this->livro, 3);
        }
    }
    public function deletar($deletarMembro){
        if($deletarMembro){
            echo "DELETE FROM membro WHERE nome = '" . $this->nome . "';";
        }else{
            throw new Exception('Erro ao excluir o membro: '. $this->nome, 4);
        }
    }

    //daqui pra baixo quem ta fazendo sou eu (pedro)

    public function create($criarMembro){
        if($criarMembro){
            $query = "INSERT INTO membro (nome, email, senha, telefone) VALUES ('".$this->nome."', '".$this->email."', '".$this->senha."', '".$this->telefone."'";
            $query .= ")";
            }else{
                throw new Exception('Erro ao criar o membro: '. $this->nome, 5);
            }
        }
    public function read($buscarMembro){
    }
}
?>