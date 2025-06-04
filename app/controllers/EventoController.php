<?php
require_once 'app/models/EventoModel.php';

class EventoController {

    private $model;
    
    public function __construct(){
        $this->model = new EventoModel();
    }

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
    
            try{
                $jsonData = json_encode($data);
                $resultado = $this->model->CRUD($jsonData);
            } catch (Exception $e) {
                setModal('erro', 'Erro encontrado!', $e->getMessage());
            }
        }
    }
}
?>