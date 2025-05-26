<?php
require_once 'app/config/connect.php';

class GridModel extends Connect{
    private function getObgController($obj, $acao){
        $modelName = $obj . "Model";
        require_once 'app/models/'.$modelName.'.php';
        $model = new $modelName();
        $data = ['ACAO' => $acao];
        $jsonData = json_encode($data);

        return $model->CRUD($jsonData);
    }

    public function getColuna($obj){
        return $this->getObgController($obj, 'G');
    }

    public function getInfoColuna($obj){
        return $this->getObgController($obj, 'R');
    }
}
?>
