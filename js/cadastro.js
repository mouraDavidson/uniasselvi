const cep = document.querySelector('#cep');
const endereco = document.querySelector('#endereco');
const bairro = document.querySelector('#bairro');
const cidade = document.querySelector('#cidade');
const estado = document.querySelector('#estado');

cep.addEventListener('focusout', () => {

    try{
        const onlyNumbers = /^[0-9]+$/;
        const cepValid = /^[0-9]{8}$/;

    if (!onlyNumbers.test(cep.value)) || !cepValid.test(cep.value)) {
        throw {cep_error: 'Cep Inválido'};
    }{
} catch (error){
    if(error?.error_cep){
        Message.textcontent = error.error_cep;
    }
  console.log(error);    
}{
}
