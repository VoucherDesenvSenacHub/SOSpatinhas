<?php 
require_once 'app/models/FrmDevModel.php';

class FrmDevController {
    public function loadForm($tabela, $id = null) {
        $model = new FormularioDev();
        $fields = $model->pegaCampos($tabela);
        if($id){
            $formData = $model->pegaCamposComResultado($tabela, $idObj);
        }
    }
}
?>