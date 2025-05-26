<?php 
    include("app/componentes/default/topHTML.php");    
?>

<h1><?= htmlspecialchars($obj) ?> Dashboard</h1>
<input type="search" name="pesquisa" id="pesquisa">

<button onclick="window.location.href='/SOSPatinhas/adm/formulario/criar/<?= htmlspecialchars($obj) ?>'">
    Adicionar <?= htmlspecialchars($obj) ?>
</button>

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
    };

    document.getElementById('pesquisa').addEventListener('input', function () {
        const valorProcurado = this.value.toLowerCase();
        const rows = document.querySelectorAll('tbody tr');

        rows.forEach(row => {
            const cells = row.querySelectorAll('td');
            const rowText = Array.from(cells).map(cell => cell.textContent.toLowerCase()).join(' ');
            row.style.display = rowText.includes(valorProcurado) ? '' : 'none';
        });
    });
</script>