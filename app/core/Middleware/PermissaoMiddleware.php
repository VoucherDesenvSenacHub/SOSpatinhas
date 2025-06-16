<?php
require_once "app/controllers/PermissaoController.php";

class PermissaoMiddleware {
    public function handle(){
        try {
            $controller = new PermissaoController();
            $resultado = $controller->checarPermissao();
            $url = $_SERVER['REQUEST_URI'];
            if($resultado){
                if(in_array($url, $resultado[0])){
                    return true;
                }
                else{
                    return false;
                };
            
            }
        } catch (Exception $e) {
            setModal('erro', 'Erro encontrado!', $e->getMessage());
        }
    }
        
}
