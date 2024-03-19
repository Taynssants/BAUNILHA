import ehCpf from './cpf.js'; //o ponto barra usa para indicar que são da mesma pasta


let inputs;
inputs=document.querySelectorAll("[required]");
console.log(inputs);

//['nome','cpf','email','data','rg'];
inputs.forEach((campo)=>{
campo.addEventListener("blur",()=>{verificaCampos(campo)});
});

function verificaCampos(campo){
if(campo.name=="cpf" && campo.value.length>=11){
    ehCpf(campo);
}

}

