<?php
require_once '../models/FormularioPerguntaModel.php';

class FormularioPerguntaController {

    public function CRUD() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $acao = $_POST['ACAO'];
            $idFormularioPergunta = $_POST['ID_FORMULARIO_PERGUNTA'];
            $dsFormularioPergunta = $_POST['DS_FORMULARIO_PERGUNTA'];

            $data = [
                'ACAO' => $acao,
                'ID_FORMULARIO_PERGUNTA' => $idFormularioPergunta,
                'DS_FORMULARIO_PERGUNTA' => $dsFormularioPergunta
            ];
    
            $jsonData = json_encode($data);
    
            $formularioPergunta = new FormularioPerguntaModel();
            $resultado = $formularioPergunta->CRUD($jsonData);
        }
    }
}
?>
