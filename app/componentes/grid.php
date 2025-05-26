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
                    <button onclick="deletar('<?= htmlspecialchars($obj) ?>', <?= $data['ID_'.strtoupper($obj)] ?>)">Deletar</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    function deletar(obj, idObj){
        if(!confirm("Certeza que deseja deletar?")) 
            return

        fetch(`/SOSPatinhas/adm/deletar/${obj}/${idObj}`, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(response => {
            if (response.ok) {
                alert('<?= htmlspecialchars($obj) ?> deletado com sucesso.');
                location.reload();
            } else {
                alert('Falha ao tentar deletar <?= htmlspecialchars($obj) ?>');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
</script>