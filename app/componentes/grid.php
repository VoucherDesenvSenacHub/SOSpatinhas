<?php 
    include("app/componentes/default/topHTML.php");    
?>

<table>
    <thead>
        <tr>
            <?php foreach ($cols as $col): ?>
                <th id="<?= $col['ID_COL'] ?>"><?= $col['NM_COL'] ?></th>
            <?php endforeach; ?>
            <th>Ação</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($dataCols as $data): ?>
            <tr>
                <?php foreach ($cols as $col): ?>
                    <?php
                        $nomeColuna = $col['ID_COL'];
                        $valor = isset($data[$nomeColuna]) ? $data[$nomeColuna] : '1';
                    ?>
                    <td><?= htmlspecialchars($valor) ?></td>
                <?php endforeach; ?>
                <td>
                    <button><a href="<?= '/SOSPatinhas/adm/formulario/editar/'.$obj.'/'.$data['ID_'.strtoupper($obj)] ?>">Editar</a></button>
                    <button>Deletar</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>