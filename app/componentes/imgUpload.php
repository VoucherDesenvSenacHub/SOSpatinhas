<div class="uploadContainer">
    <div class="imgContainer">
        <input type="file" id="image" name="CAMINHO_FOTO[]" accept="image/*" multiple hidden>
        <label for="image" id="imgLabel" class="upload-box">
            <img src="../../public/images/cadastroAdocao-ADM/grampoBranco.png" alt="Upload Icon">
            <p>Enviar fotos</p>
        </label>
        <p class="fileInfo">Enviar até 10 arquivos: JPG, PNG, JPEG*</p>
    </div>
    <div id="filePreview"></div>
</div>

<script>
    let selectedFiles = [];

    document.getElementById('image').addEventListener('change', function (event) {
        const newFiles = Array.from(event.target.files);

        const filteredNewFiles = newFiles.filter(newFile => {
            return !selectedFiles.some(existingFile =>
                existingFile.name === newFile.name && existingFile.size === newFile.size
            );
        });

        if ((selectedFiles.length + filteredNewFiles.length) > 10) {
            alert("Você só pode enviar até 10 arquivos.");
            this.value = "";
            return;
        }

        selectedFiles = selectedFiles.concat(filteredNewFiles);
        renderFilePreview();
        this.value = "";
    });

    function renderFilePreview() {
        const filePreview = document.getElementById('filePreview');
        filePreview.innerHTML = "";

        selectedFiles.forEach((file, index) => {
            const fileItem = document.createElement('div');
            fileItem.classList.add('fileItem');

            const imgPreview = document.createElement('img');
            imgPreview.src = URL.createObjectURL(file);
            imgPreview.classList.add('previewThumb');
            imgPreview.onload = () => URL.revokeObjectURL(imgPreview.src); 
            const fileDetails = document.createElement('div');
            fileDetails.classList.add('fileDetails');
            fileDetails.innerHTML = `
                <span class="fileName" title="${file.name}">${file.name}</span>
                <button class="removeFile" data-index="${index}">X</button>
            `;

            fileItem.appendChild(imgPreview);
            fileItem.appendChild(fileDetails);
            filePreview.appendChild(fileItem);

            fileDetails.querySelector('.removeFile').addEventListener('click', () => {
                selectedFiles.splice(index, 1);
                renderFilePreview();
            });
        });
        
        const fileNames = document.querySelectorAll('.fileName');
        if (selectedFiles.length > 5 && window.innerWidth > 425) {
            filePreview.classList.add('duasColunas');

            fileNames.forEach(name => {
                name.style.maxWidth = "120px";
            });
        } else if (selectedFiles.length < 5 || window.innerWidth < 425) {
            filePreview.classList.remove('duasColunas');

            fileNames.forEach(name => {
                name.style.maxWidth = ""; 
            });
        }
        // || (window.innerWidth <= 1024 && window.innerWidth > 768)
    }
</script>

<style>
    .previewThumb {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 5px;
        margin-right: 10px;
    }

    .fileDetails {
        flex: 1;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    } 

    .uploadContainer {
        width: 100%;
        text-align: center;
        flex-direction: column;
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

    .fileInfo {
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

    #filePreview.duasColunas {
        grid-template-columns: 1fr 1fr; 
        column-gap: 2rem; 
    }

    .fileItem {
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

    .fileName {
        max-width: 150px; 
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 14px;
    }

    .removeFile {
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

    .removeFile:hover {
        background-color: #d32f2f;
    }
</style>
