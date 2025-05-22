// para usar as funções de máscara você deve implementar: oninput="nomeDaFuncao(this)" no input que deseja aplicar a máscara 

// rever para aplicar no input
function mascaraCPF(campo) {
    campo.value = campo.value
    .replace(/\D/g, '')               
    .replace(/(\d{3})(\d)/, '$1.$2')    
    .replace(/(\d{3})(\d)/, '$1.$2')   
    .replace(/(\d{3})(\d{1,2})$/, '$1-$2')
}

function mascaraTelefone(campo) {
    campo.value = campo.value
    .replace(/\D/g, '')
    .replace(/^(\d{2})(\d)/g, '($1) $2')
    .replace(/(\d{5})(\d{1,4})$/, '$1-$2')
}

function mascaraLetras(campo) {
    campo.value = campo.value.replace(/[^a-zA-Z\s]/g, '')
}

function mascaraNumeros(campo) {
    campo.value = campo.value.replace(/\D/g, '')
}

function mascaraData(campo) {
    campo.value = campo.value
    .replace(/\D/g, '')
    .replace(/(\d{2})(\d)/, '$1/$2')
    .replace(/(\d{2})(\d)/, '$1/$2')
    .replace(/(\d{4})\d+?$/, '$1')
}

console.log("Arquivo de máscaras carregado!");