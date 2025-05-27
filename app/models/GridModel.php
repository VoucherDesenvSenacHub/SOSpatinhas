<?php
require_once 'app/config/connect.php';

class GridModel extends Connect{
    private function getObgController($obj, $acao, $id = null) {
        $modelName = ucfirst(strtolower($obj)) . "Model";
        $modelFile = 'app/models/' . $modelName . '.php';

        if (!file_exists($modelFile)) {
            throw new Exception("Não foi encontrado o arquivo");
        }

        require_once $modelFile;

        if (!class_exists($modelName)) {
            throw new Exception("Não foi encontrada a classe: $modelName");
        }

        $model = new $modelName();

        if (!method_exists($model, 'CRUD')) {
            throw new Exception("Não foi encontrado um medoto 'CRUD' para $modelName");
        }

        $data = ['ACAO' => $acao];
        if ($id !== null) {
            $data['ID'] = $id;
        }
        $jsonData = json_encode($data);

        return $model->CRUD($jsonData);
    }

    public function getColuna($obj){
        return $this->getObgController($obj, 'G');
    }

    public function getInfoColuna($obj){
        return $this->getObgController($obj, 'R');
    }

    public function deletar($obj, $id){
        return $this->getObgController($obj, 'D', $id);
    }
}
?>
