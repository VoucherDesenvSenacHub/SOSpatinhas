<?php
require_once 'app/models/EventoModel.php';

class EventoController {

    public function index(){
        include('app/views/user/eventos.php');
    }

    public function CRUD() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['ID_EVENTO'];
            $acao = $_POST['ACAO'];
            $titulo = $_POST['TITULO'];
            $descricao = $_POST['DESCRICAO'];
            $cidade = $_POST['CIDADE'];
            $estado = $_POST['ESTADO'];
            $local_evento = $_POST['LOCAL_EVENTO'];

    
            $data = [
                'ID_EVENTO' => $id,
                'ACAO' => $acao,
                'TITULO' => $titulo,   
                'DESCRICAO' => $descricao,
                'CIDADE' => $cidade,
                'ESTADO' => $estado,
                'LOCAL_EVENTO' => $local_evento,
                
            ];
    
            $jsonData = json_encode($data);
    
            $evento = new EventoModel();
            $resultado = $evento->CRUD($jsonData);
        }
    }
}
?>