<?php 

class ListaDevController {
    public function pegarDados($tipo) {
        $model = new ListaDevModel();
        return $model->obterDadosPorTipo($tipo);
    }
}
?>