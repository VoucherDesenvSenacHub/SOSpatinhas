<?php
// Setup
$itemsPerPage = 10;
$totalItems = count($dataCols);
$totalPages = ceil($totalItems / $itemsPerPage);

// Get current page from URL (?page=1), default to 1
$currentPage = isset($_GET['page']) ? max((int)$_GET['page'], 1) : 1;
$offset = ($currentPage - 1) * $itemsPerPage;

// Slice the array for the current page
$paginatedData = array_slice($dataCols, $offset, $itemsPerPage);
?>

<h1><?= htmlspecialchars(ucfirst(strtolower($obj))) ?> Dashboard</h1>
<input type="search" name="pesquisa" id="pesquisa">

<button onclick="window.location.href='/SOSPatinhas/adm/formulario/criar/<?= htmlspecialchars($obj) ?>'">
    Adicionar <?= htmlspecialchars(ucfirst(strtolower($obj))) ?>
</button>

<?php if((isset($cols) && $cols !== null) && (isset($dataCols) && $dataCols !== null)): ?>
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
        <?php foreach ($paginatedData as $data): ?>
            <tr>
                <?php foreach ($cols as $col): ?>
                    <?php
                        $nomeColuna = $col['ID_COL'];
                        $valor = isset($data[$nomeColuna]) ? $data[$nomeColuna] : '1';
                    ?>
                    <td><?= htmlspecialchars($valor) ?></td>
                <?php endforeach; ?>
                <td>
                    <button>Selecionar</button>
                    <button><a href="<?= '/SOSPatinhas/adm/formulario/editar/'.$obj.'/'.$data['ID_'.strtoupper($obj)] ?>">Editar</a></button>
                    <button onclick="deletar('<?= htmlspecialchars($obj) ?>', <?= $data['ID_'.strtoupper($obj)] ?>)">Deletar</button>
                </td>
            </tr>
            <tr id="noResult" style="display: none;">
                <td colspan="<?= count($cols) + 1 ?>" style="text-align: center;">Nenhum resultado encontrado.</td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<div class="pagination">
    <?php for ($page = 1; $page <= $totalPages; $page++): ?>
        <a href="?page=<?= $page ?>" 
           style="<?= $page === $currentPage ? 'font-weight: bold; text-decoration: underline;' : '' ?>">
           <?= $page ?>
        </a>
    <?php endfor; ?>
</div>

<script>
    function deletar(obj, idObj){
        if(!confirm("Certeza que deseja deletar?")) return

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
        const noResultRow = document.getElementById('noResult');
        let encontrou = false;

        rows.forEach(row => {
            if (row.id === 'noResult') return;
            const cells = row.querySelectorAll('td');
            const rowText = Array.from(cells).map(cell => cell.textContent.toLowerCase()).join(' ');
            const match = rowText.includes(valorProcurado);

            row.style.display = match ? '' : 'none';
            if (match) encontrou = true;
        });

        noResultRow.style.display = encontrou ? 'none' : '';
    });
</script>
<?php endif; ?>