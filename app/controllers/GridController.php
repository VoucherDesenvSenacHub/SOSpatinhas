<?php
require_once 'app/models/GridModel.php';

class GridController {
    public function mostraGrid($obj){
        $model = new GridModel();
        try{
            $cols = $model->getColuna($obj);
            $dataCols = $model->getInfoColuna($obj);
        } catch (Exception $e) {
            $_SESSION['modal_error'] = $e->getMessage();
        }
        include('app/componentes/grid.php');
    }

    public function deletar($obj, $id){
        $modelName = $obj . "Model";
        require_once 'app/models/'.$modelName.'.php';
        $model = new $modelName();
        
        $data = ['ACAO' => 'D', 'ID_'.strtoupper($obj) => $id];
        $jsonData = json_encode($data);
        $model->CRUD($jsonData);
    }
}
?>