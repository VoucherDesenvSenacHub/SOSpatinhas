<?php
class ListaDevModel{
    public function obterDadosPorTipo ($tipo) {
        if ($tipo === 'formulario') {
            return [
                ["tituloFrm" => "Formulario 1", "imagemAnimal" => "../../public/images/Rumi.png", "nomeAnimal" => "Rumi", "imagemUser" => "../../public/images/icons/iconUser.png", "nomeUser" => "João"],
                ["tituloFrm" => "Formulario 2", "imagemAnimal" => "../../public/images/Nobre.png", "nomeAnimal" => "Nobre", "imagemUser" => "../../public/images/icons/iconUser.png", "nomeUser" => "Maria"],
            ];
        } elseif ($tipo === 'membro') {
            return [
                ["nome" => "Carlos", "imagem" => "../../public/images/icons/iconUser.png"],
                ["nome" => "Ana", "imagem" => "../../public/images/icons/iconUser.png"],
            ];
        }

        return [];
    }
}
?>