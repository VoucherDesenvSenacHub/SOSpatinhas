<?php
require_once 'app/models/TagModel.php';

class TagController {

    public function CRUD() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_tag = $_POST['ID_TAG'];
            $acao = $_POST['ACAO'];
            $ds_tag = $_POST['DS_TAG']; 
    
            $data = [
            'ID_TAG' => $id_tag,
            'ACAO' => $acao,
            'DS_TAG' => $ds_tag,
                
            ];
    
            $jsonData = json_encode($data);
    
            $tag = new TagModel();
            $resultado = $tag->CRUD($jsonData);
        }
    }
}
?>