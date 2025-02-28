<?php

class Pagamento{
    private $tabela = 'pagamento';

    public $id_pagamento;
    public $fotoQRCode;
    public $chave;
    public $nome_da_conta;
    public $conta;
    public $agencia;


    public function __construct($infosPagamento) {
       $this->fotoQRCode = $infosPagamento['fotoQRCode'];
       $this->chave = $infosPagamento['chave'];
       $this->nome_da_conta = $infosPagamento['nome_da_conta'];
       $this->conta = $infosPagamento['conta'];
       $this->agencia = $infosPagamento['agencia'];
    }
    
    public function create() {
        $query = "INSERT INTO {$this->tabela} (fotoQRCode, chave, nome_da_conta, conta, agencia) VALUES ('{$this->fotoQRCode}', '{$this->chave}', '{$this->nome_da_conta}', '{$this->conta}', '{$this->agencia}');";
        return $query;
    }

    public function read(){
        $query = "SELECT * FROM {$this->tabela} WHERE id_pagamento = '{$this->id_pagamento}';";
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

        $query += "WHERE id_pagamento = {$this->id_pagamento};";
        return $query;
    }

    public function delete(){
        $query = "DELETE FROM {$this->tabela} WHERE id_pagamento = {$this->id_pagamento};";
        return $query;
    }
}
