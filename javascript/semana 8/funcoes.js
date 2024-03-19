//função armazenada em uma constante que gera um valor aleatório
const valor = function(){ //função anônima (sem nome)
let numero = parseInt(Math.random()* 101);
return numero;
}


//função recebe uma frase e a retorna de forma inversa
function inverter(frase){
    let tamanho = frase.length;
    fraseInversa = "";
    for (let i = tamanho; i>=0; i--){
        fraseInversa += frase.charAt(i);
        //charAt pega um caractere do let, começando do último para o primeiro
    }
    return fraseInversa;
}

//Função que recebe uma frase e a retorna da forma inversa
//sem as vogais
function inverterSemVogais(frase){
    let tamanho = frase.length - 1;
    fraseInversa = "";
    for (let i= tamanho; i>=0; i--){
        let letra = frase.charAt(i);
        if(letraletra.toUpperCase()!='A' && letraletra.toUpperCase()!='E' &&
        letraletra.toUpperCase() != 'I' && letraletra.toUpperCase() != 'O' &&
        letraletra.toUpperCase() !='U'){
            fraseInversa += letra;
        }
    }
}