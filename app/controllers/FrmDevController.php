<?php 
require_once 'app/models/FrmDevModel.php';

class FrmDevController {
    private $model;
    
    public function __construct(){
        $this->model = new FrmDevModel();
    }

    public function loadForm($acao, $frmName, $id) {
        try{
            $fields = $this->model->pegaCampos($frmName);
            if($id != null){
                $formData = $this->model->pegaCamposComResultado($frmName, $id);
            }
        } catch (Exception $e) {
            $_SESSION['modal_error'] = $e->getMessage();
        }
        include("app/componentes/frmDev.php");
    }
}
?>