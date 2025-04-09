<div class="upload-container">
    <div class="imgContainer">
        <input type="file" id="image" name="image[]" accept="image/*" multiple hidden>
        <label for="image" id="imgLabel" class="upload-box">
            <img src="../../public/images/cadastroAdocao-ADM/grampoBranco.png" alt="Upload Icon">
            <p>Enviar fotos</p>
        </label>
        <p class="file-info">Enviar até 10 arquivos: JPG, PNG, JPEG*</p>
    </div>
    <div id="filePreview"></div>
</div>

<script>
    document.getElementById('image').addEventListener('change', function (event) {
        const filePreview = document.getElementById('filePreview');
        filePreview.innerHTML = ""; 

        let files = Array.from(event.target.files);

        if (files.length > 10) {
            alert("Você só pode enviar até 10 arquivos.");
            this.value = "";
            return;
        }

        files.forEach((file, index) => {
            const fileItem = document.createElement('div');
            fileItem.classList.add('file-item');
            fileItem.innerHTML = `
                <span class="file-name" title="${file.name}">${file.name}</span>
                <button class="remove-file" data-index="${index}">X</button>
            `;
            filePreview.appendChild(fileItem);

            const removeButton = fileItem.querySelector('.remove-file');
            removeButton.addEventListener('click', () => {
                const fileInput = document.getElementById('image');
                fileInput.value = ""; 
                fileItem.remove(); 
            });
        });

        if (files.length > 5) {
            filePreview.classList.add('two-column');
        } else {
            filePreview.classList.remove('two-column');
        }
    });
</script>

<style>
    .upload-container {
        width: 100%;
        text-align: center;
        flex-direction: row;
        display: flex;
    }

    .top {
        display: flex;
        flex-direction: row;
        align-items: stretch;
        min-height: 300px;
    }

    .imgContainer{
        width: 100% !important;
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 100%;
    }

    .upload-box {
        width: 100%;
        border: 2px dashed #ccc;
        background: #e6e6e6;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border-radius: 5px;
        cursor: pointer;
        min-height: 150px;
    }

    .upload-box img {
        width: 70px;
        height: 70px;
    }

    .upload-box p {
        margin: 5px 0 0;
        font-size: 14px;
        color: #333;
    }

    .file-info {
        font-size: 15px;
        color: black;
        margin-top: 5px;
        margin-bottom: 5px;
    }

    #filePreview {
        display: grid;
        grid-template-columns: 1fr;
        gap: 10px; 
        margin-left: 20px;
        width: 94%;
    }

    #filePreview.two-column {
        grid-template-columns: 1fr 1fr; 
        column-gap: 2rem; 
    }

    .file-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: #f4f4f4;
        padding: 10px;
        border-radius: 5px;
        width: 100%;
        max-width: 606px; 
        overflow: hidden;
    }

    .file-name {
        max-width: 150px; 
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 14px;
    }

    .remove-file {
        margin-left: 10px;
        padding: 5px 10px;
        color: white;
        background-color: #f44336;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        width: 17%; 
        text-align: center;
        display: inline-block;
        font-size: 14px;
        margin-top: 5px;
    }

    .remove-file:hover {
        background-color: #d32f2f;
    }
</style>