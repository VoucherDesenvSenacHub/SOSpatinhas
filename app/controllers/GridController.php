<?php
require_once 'app/models/GridModel.php';

class GridController {
    private $model;
    
    public function __construct(){
        $this->model = new GridModel();
    }

    public function mostraGrid($obj){
        try{
            $cols = $this->model->getColuna($obj);
            $dataCols = $this->model->getInfoColuna($obj);
        } catch (Exception $e) {
            $_SESSION['modal_error'] = $e->getMessage();
        }
        include('app/componentes/grid.php');
    }

    public function deletar($obj, $id){
        try{
            $this->model->deletar($obj, $id);
        } catch (Exception $e) {
            $_SESSION['modal_error'] = $e->getMessage();
        }
    }
}
?>