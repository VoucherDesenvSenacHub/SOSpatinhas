<?php
require_once '../../config/connect.php';

class FormularioDev extends Connect{
    public function pegaCampos($formName) {
        $stmt = $this->connection->prepare("SELECT * FROM FORMULARIO_CRIAR_EDITAR WHERE FORMULARIO = ? ORDER BY ORDEM ASC");
        $stmt->execute([$formName]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function pegaCamposComResultado($formName, $id) {
        $columnName = "ID_" . $formName;
        $stmt = $this->connection->prepare("SELECT * FROM `$formName` WHERE `$columnName` = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}