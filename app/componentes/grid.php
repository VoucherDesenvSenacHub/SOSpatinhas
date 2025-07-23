<?php 
if((isset($cols) && $cols !== null) && (isset($dataCols) && $dataCols !== null)): 
    $itemPorPag = 10;
    $totalItems = count($dataCols);
    $totalPag = ceil($totalItems / $itemPorPag);

    $pagAtual = isset($_GET['page']) ? max((int)$_GET['page'], 1) : 1;
    $offset = ($pagAtual - 1) * $itemPorPag;

    $paginatedData = array_slice($dataCols, $offset, $itemPorPag);

?>

<div class="pesquisa-adiciona">
    <div class="container-pesquisa">
        <input type="search" class="campo-pesquisa" id="pesquisa" name="pesquisa" placeholder="Pesquisar...">
    </div>
    <button onclick="window.location.href='/SOSPatinhas/adm/formulario/criar/<?= htmlspecialchars($obj) ?>'" id="botao-adicionar">
        Adicionar <?= htmlspecialchars(ucfirst(strtolower($obj))) ?>
    </button>
</div>

<div class="container-tabela">    
    <table class="tabela">
        <thead class="cabecalho-tabela">
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
                        <div class="botoes-acao">
                            <!-- <button>Selecionar</button> -->
                            <button 
                                class="botao-icone botao-editar">
                                <a href="<?= '/SOSPatinhas/adm/formulario/editar/'.$obj.'/'.$data['ID_'.strtoupper($obj)] ?>"
                                style="text-decoration: none;">✏️</a>
                            </button>
                            <button 
                                class="botao-icone botao-excluir" 
                                onclick="deletar('<?= htmlspecialchars($obj) ?>', <?= $data['ID_'.strtoupper($obj)] ?>)">🗑️</button>
                        </div>
                    </td>
                </tr>
                <tr id="noResult" style="display: none;">
                    <td colspan="<?= count($cols) + 1 ?>" style="text-align: center;">Nenhum resultado encontrado.</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="pagination">
    <?php
    $range = 2;
    $ellipsisShownLeft = false;
    $ellipsisShownRight = false;

    if ($pagAtual > 1) {
        echo '<a href="?page=1" title="Primeira página">«</a>';
        echo '<a href="?page=' . ($pagAtual - 1) . '" title="Anterior" style="font-size: 13px;">Anterior</a>';
    }

    for ($i = 1; $i <= $totalPag; $i++) {
        if (
            $i == 1 || $i == $totalPag ||
            ($i >= $pagAtual - $range && $i <= $pagAtual + $range)
        ) {
            $activeClass = $i === $pagAtual ? 'active' : '';
            echo '<a href="?page=' . $i . '" class="' . $activeClass . '" style="font-weight: bold;">' . $i . '</a>';
        } elseif ($i < $pagAtual && !$ellipsisShownLeft && $i > 1) {
            echo '<span class="ellipsis">...</span>';
            $ellipsisShownLeft = true;
        } elseif ($i > $pagAtual && !$ellipsisShownRight && $i < $totalPag) {
            echo '<span class="ellipsis">...</span>';
            $ellipsisShownRight = true;
        }
    }

    if ($pagAtual < $totalPag) {
        echo '<a href="?page=' . ($pagAtual + 1) . '" title="Próxima" style="font-size: 13px;">Próxima</a>';
        echo '<a href="?page=' . $totalPag . '" title="Última página">»</a>';
    }
    ?>
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
                showModal('sucesso', 'Sucesso!', '<?= htmlspecialchars(ucfirst(strtolower($obj))) ?> deletado com sucesso.');
                document.getElementById('btnModal').addEventListener('click', () => {
                    location.reload();
                });
            } else {
                showModal('erro', 'Erro!', 'Falha ao tentar deletar <?= htmlspecialchars(ucfirst(strtolower($obj))) ?>')
                alert();
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

<style>
    .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #7FB3D3;
        gap: 1rem;
        border-radius: 0 0 10px 10px;
        padding: 1rem;
    }

    .pagination a,
    .pagination .ellipsis {
        text-decoration: none;
        color: white;
    }

    .pesquisa-adiciona {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 1.5rem;
    }

    .container-tabela {
        background-color: white;
        border-radius: 10px 10px 0 0;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .container-pesquisa {
        margin-bottom: 15px;
    }

    .campo-pesquisa {
        width: 300px;
        padding: 8px 15px;
        border: 2px solid #e0e0e0;
        border-radius: 25px;
        font-size: 14px;
        outline: none;
        transition: border-color 0.3s;
    }

    .campo-pesquisa:focus {
        border-color: #7FB3D3;
    }

    #botao-adicionar {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 12px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        font-weight: 500;
        transition: background-color 0.3s;
    }

    #botao-adicionar:hover {
        background-color: #45a049;
    }

    .tabela {
        width: 100%;
        border-collapse: collapse;
    }

    .cabecalho-tabela {
        background-color: #7FB3D3;
        color: white;
        border-radius: 10px 10px 0 0;
    }

    .tabela th, .tabela td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #e0e0e0;
    }

    .tabela th {
        font-weight: 500;
        font-size: 14px;
    }

    .tabela td {
        font-size: 13px;
        color: #333;
    }

    .tabela tbody tr:hover {
        background-color: #f8f9fa;
    }

    .botoes-acao {
        display: flex;
        gap: 8px;
    }

    .botao-icone {
        width: 32px;
        height: 32px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.3s;
    }

    .botao-editar {
        background-color: #e0e0e0;
    }

    .botao-editar:hover {
        background-color: #d0d0d0;
    }

    .botao-excluir {
        background-color: #e0e0e0;
    }

    .botao-excluir:hover {
        background-color: #ffcdd2;
    }
</style>