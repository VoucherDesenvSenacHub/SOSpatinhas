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
        $query = "SELECT * FROM {$this->tabela} WHERE id = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bind_param("i", $id_membro);  
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    
    public function uptade($atualizarMembro) {
        if (empty($atualizarMembro)) {
            throw new Exception('Dados para atualizar não fornecidos.');
        }

        $setClauses = [];
        $params = [];
        $types = '';

        
        foreach ($atualizarMembro as $coluna => $valor) {
            $setClauses[] = "{$coluna} = ?";
            $params[] = $valor;
            $types .= is_int($valor) ? 'i' : 's';  
        }

        $query = "UPDATE {$this->tabela} SET " . implode(", ", $setClauses) . " WHERE id = ?";
        $stmt = $this->conexao->prepare($query);

       
        $params[] = $this->id_membro;
        $types .= 'i';                                                   // O ID é inteiro  0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-0-

       
        $stmt->bind_param($types, ...$params);

        // consultaaaaa
        if ($stmt->execute()) {
            return true;
        } else {
            throw new Exception('Erro ao atualizar o membro: ' . $stmt->error);
        }
    }

   
    public function delete() {
        if (empty($this->id_membro)) {
            throw new Exception('ID do membro não fornecido.');
        }

        $query = "DELETE FROM {$this->tabela} WHERE id = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bind_param("i", $this->id_membro);

        if ($stmt->execute()) {
            return true;
        } else {
            throw new Exception('Erro ao excluir o membro: ' . $stmt->error);
        }
    }
}
?>
