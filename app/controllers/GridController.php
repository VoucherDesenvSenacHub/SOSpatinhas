<?php
require_once 'app/models/GridModel.php';

class GridController {
    public function mostraGrid($obj){
        $model = new GridModel();
        $cols = $model->getColuna($obj);
        $dataCols = $model->getInfoColuna($obj);
        include('app/componentes/grid.php');
    }
}
?>