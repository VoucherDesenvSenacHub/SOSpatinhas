<?php 
require_once 'app/models/FrmDevModel.php';

class FrmDevController {
    public function loadForm($acao, $frmName, $id) {
        $model = new FrmDevModel();
        $fields = $model->pegaCampos($frmName);
        if($id != null){
            $formData = $model->pegaCamposComResultado($frmName, $id);
        }
        
        include("app/componentes/frmDev.php");
    }
}
?>