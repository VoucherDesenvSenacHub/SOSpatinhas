<?php
require_once 'app/config/connect.php';

class FrmDevModel extends Connect{
    public function pegaCampos($formName) {
        $stmt = $this->connection->prepare("SELECT * FROM FORMULARIO_CRIAR_EDITAR WHERE ID_FORM = ? ORDER BY ORDEM ASC");
        $stmt->execute([$formName]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function pegaCamposComResultado($formName, $id) {
        $formName = strtoupper($formName);
        $columnName = "ID_" . $formName;
        $stmt = $this->connection->prepare("SELECT * FROM `$formName` WHERE `$columnName` = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}