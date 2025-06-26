<?php
  $cssLink  = '/sospatinhas/public/css/painelAdm.css';
  $tipo = 'Adm';
  include('app/componentes/default/topHTML.php');
?>

 <div class="sidebar">
        <div class="nav-item active" data-section="pets">PETS</div>
        <div class="nav-item" data-section="admins">ADMINS</div>
        <div class="nav-item" data-section="adocoes">ADOÇÕES</div>
        <div class="nav-item" data-section="personalizar">PERSONALIZAR</div>
    </div>

    <div class="main-content">
        <div class="dashboard-header">
            <h1 class="dashboard-title"><span class="pets-text">Pets</span> Dashboard</h1>
            
            <div class="search-container">
                <input type="text" class="search-box" placeholder="Buscar pets..." id="searchInput">
                <button class="add-btn" onclick="openModal()">ADICIONAR ANIMAL</button>
            </div>

            <div class="tabs">
                <div class="tab active" data-tab="all">Para adoção</div>
                <div class="tab" data-tab="adopted">Adotados</div>
            </div>
        </div>

        <div class="pets-table">
            <div class="table-header">
                <div>Nome</div>
                <div>Sexo</div>
                <div>Porte</div>
                <div>Idade</div>
                <div>Resgatado em</div>
                <div>Ações</div>
            </div>
            <div id="petsTableBody">
                <!-- Dados serão inseridos dinamicamente -->
            </div>
        </div>
    </div>

    <!-- Modal para adicionar/editar pet -->
    <div class="modal" id="petModal">
        <div class="modal-content">
            <button class="close-btn" onclick="closeModal()">&times;</button>
            <div class="modal-header" id="modalTitle">Adicionar Novo Pet</div>
            
            <form id="petForm">
                <div class="form-group">
                    <label for="petName">Nome do Pet:</label>
                    <input type="text" id="petName" name="name" required>
                </div>
                
                <div class="form-group">
                    <label for="petGender">Sexo:</label>
                    <select id="petGender" name="gender" required>
                        <option value="">Selecione...</option>
                        <option value="Macho">Macho</option>
                        <option value="Fêmea">Fêmea</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="petSize">Porte:</label>
                    <select id="petSize" name="size" required>
                        <option value="">Selecione...</option>
                        <option value="Pequeno">Pequeno</option>
                        <option value="Médio">Médio</option>
                        <option value="Grande">Grande</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="petAge">Idade:</label>
                    <input type="text" id="petAge" name="age" placeholder="Ex: 2 anos" required>
                </div>
                
                <div class="modal-actions">
                    <button type="button" class="btn btn-secondary" onclick="closeModal()">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Mensagem de sucesso -->
    <div class="success-message" id="successMessage">
        Pet salvo com sucesso!
    </div>

     <script>
        // Dados dos pets
        let pets = [
            {
                id: 1,
                name: "Nome do bicho",
                gender: "Macho",
                size: "Pequeno",
                age: "+ 2 anos",
                registeredAt: "10/10/2024",
                adopted: false
            }
        ];

        let editingPetId = null;
        let currentTab = 'all';

        // Função para renderizar a tabela
        function renderTable() {
            const tbody = document.getElementById('petsTableBody');
            const filteredPets = pets.filter(pet => {
                if (currentTab === 'all') return !pet.adopted;
                if (currentTab === 'adopted') return pet.adopted;
                return true;
            });

            tbody.innerHTML = '';

            filteredPets.forEach(pet => {
                const row = document.createElement('div');
                row.className = 'table-row';
                row.innerHTML = `
                    <div class="pet-name">${pet.name}</div>
                    <div>${pet.gender}</div>
                    <div>${pet.size}</div>
                    <div>${pet.age}</div>
                    <div>${pet.registeredAt}</div>
                    <div class="pet-actions">
                        <button class="action-btn edit-btn" onclick="editPet(${pet.id})" title="Editar">✏️</button>
                        <button class="action-btn delete-btn" onclick="deletePet(${pet.id})" title="Excluir">🗑️</button>
                    </div>
                `;
                tbody.appendChild(row);
            });
        }

        // Função para abrir o modal
        function openModal(petId = null) {
            const modal = document.getElementById('petModal');
            const title = document.getElementById('modalTitle');
            const form = document.getElementById('petForm');
            
            if (petId) {
                const pet = pets.find(p => p.id === petId);
                title.textContent = 'Editar Pet';
                document.getElementById('petName').value = pet.name;
                document.getElementById('petGender').value = pet.gender;
                document.getElementById('petSize').value = pet.size;
                document.getElementById('petAge').value = pet.age;
                editingPetId = petId;
            } else {
                title.textContent = 'Adicionar Novo Pet';
                form.reset();
                editingPetId = null;
            }
            
            modal.style.display = 'block';
        }

        // Função para fechar o modal
        function closeModal() {
            document.getElementById('petModal').style.display = 'none';
            editingPetId = null;
        }

        // Função para editar pet
        function editPet(id) {
            openModal(id);
        }

        // Função para deletar pet
        function deletePet(id) {
            if (confirm('Tem certeza que deseja excluir este pet?')) {
                pets = pets.filter(pet => pet.id !== id);
                renderTable();
                showSuccessMessage('Pet excluído com sucesso!');
            }
        }

        // Função para mostrar mensagem de sucesso
        function showSuccessMessage(message) {
            const successMsg = document.getElementById('successMessage');
            successMsg.textContent = message;
            successMsg.classList.add('show');
            setTimeout(() => {
                successMsg.classList.remove('show');
            }, 3000);
        }

        // Event listeners
        document.getElementById('petForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const petData = {
                name: formData.get('name'),
                gender: formData.get('gender'),
                size: formData.get('size'),
                age: formData.get('age'),
                registeredAt: new Date().toLocaleDateString('pt-BR'),
                adopted: false
            };
            
            if (editingPetId) {
                const petIndex = pets.findIndex(p => p.id === editingPetId);
                pets[petIndex] = { ...pets[petIndex], ...petData };
                showSuccessMessage('Pet atualizado com sucesso!');
            } else {
                petData.id = Date.now();
                pets.push(petData);
                showSuccessMessage('Pet adicionado com sucesso!');
            }
            
            renderTable();
            closeModal();
        });

        // Tabs
        document.querySelectorAll('.tab').forEach(tab => {
            tab.addEventListener('click', function() {
                document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                currentTab = this.dataset.tab;
                renderTable();
            });
        });

        // Busca
        document.getElementById('searchInput').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const rows = document.querySelectorAll('.table-row');
            
            rows.forEach(row => {
                const petName = row.querySelector('.pet-name').textContent.toLowerCase();
                if (petName.includes(searchTerm)) {
                    row.style.display = 'grid';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        // Fechar modal clicando fora
        window.addEventListener('click', function(e) {
            const modal = document.getElementById('petModal');
            if (e.target === modal) {
                closeModal();
            }
        });

        // Navegação sidebar
        document.querySelectorAll('.nav-item').forEach(item => {
            item.addEventListener('click', function() {
                document.querySelectorAll('.nav-item').forEach(i => i.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Inicializar a tabela
        renderTable();
    </script>

