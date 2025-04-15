<?php
require_once("../config/connect.php");
class FormularioDev extends Connect{
    public function pegaCampos($frmID){
        $stmt = $this->connection->prepare("SELECT * FROM $this->table WHERE ID_FORM = ?");
        $stmt->execute($frmID);
    }

}