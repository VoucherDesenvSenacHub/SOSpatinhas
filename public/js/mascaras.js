// para usar as funções de máscara você deve implementar: oninput="nomeDaFuncao(this)" no input que deseja aplicar a máscara 

function maskCPF(campo) {
  let valor = campo.value.replace(/\D/g, '');

  if (valor.length > 11) {
    valor = valor.slice(0, 11);
  }

  campo.value = valor
    .replace(/(\d{3})(\d)/, '$1.$2')
    .replace(/(\d{3})(\d)/, '$1.$2')
    .replace(/(\d{3})(\d{1,2})$/, '$1-$2');
}

function maskRG(campo) {
  let valor = campo.value.replace(/\D/g, '')

  if (valor.length > 7) {
    valor = valor.slice(0, 7);
  }

  campo.value = valor
    .replace(/(\d{2})(\d)/, '$1.$2')
    .replace(/(\d{3})(\d)/, '$1.$2')
    .replace(/(\d{3})(\d{1})$/, '$1-$2');
}

function maskTelefone(campo) {
  let valor = campo.value.replace(/\D/g, '');

  if (valor.length > 10) {
    valor = valor.slice(0, 10);
  }

  campo.value = valor
    .replace(/^(\d{2})(\d)/g, '($1) $2')
    .replace(/(\d{4})(\d{1,4})$/, '$1-$2');
}

function maskData(campo) {
  let valor = campo.value.replace(/\D/g, '');

  if (valor.length > 8) {
    valor = valor.slice(0, 8);
  }

  campo.value = valor
    .replace(/(\d{2})(\d)/, '$1/$2')
    .replace(/(\d{2})(\d)/, '$1/$2');
}

function maskApenasLetras(campo) {
  campo.value = campo.value.replace(/[^a-zA-Z\s]/g, '');
}

function maskApenasNumeros(campo) {
  campo.value = campo.value.replace(/\D/g, ''); 
}