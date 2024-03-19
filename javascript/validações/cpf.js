export default function ehCpf(campo){
    const cpf=campo.value.replace(/\.|-/g,"");
    console.log(cpf);
    validaNumerosRepetidos(cpf)
    if(validaPrimeiroDigito(cpf)==false){
        console.log('primeiro dígito correto');
    }
    else{
        console.log('o primeiro é fake');
    }
    if(validaSegundoDigito(cpf)==false){
        console.log('segundo dígito está correto');
    }
    else{
        console.log('o segundo é fake!')
    }
    }

    function validaNumerosRepetidos(cpf){
        const numerosRepetidos=[
            "00000000000",
            "11111111111",
            "11111111111111",
            "22222222222",
            "33333333333",
            "44444444444",
            "55555555555",
            "66666666666",
            "77777777777",
            "88888888888",
            "99999999999",
        ];
        console.log(numerosRepetidos.includes(cpf)) //quase a mesma função que o search no php

        //chamamos a função que criamos dentro do ehCpf
        //para que ele execute no nosso index

    }

    function validaPrimeiroDigito(cpf){
        let soma=0;
        let multiplicador=10;
        for(let tamanho=0;tamanho<9; tamanho++){
            soma+=cpf[tamanho] * multiplicador; //ele pega o valor e vai somando
            multiplicador-=1;
        }
        soma=(soma*10)%  11 //11 é o resto
        if (soma ==10 || soma==11){
            soma=0;
        }
        return soma != cpf[9]; //se der verdadeiro, o dígito do cpf da PESSOA não confere
    }

    function validaSegundoDigito(cpf){
        let soma=0;
        let multiplicador=11;
        for(let tamanho=0;tamanho<10; tamanho++){
            soma+=cpf[tamanho] * multiplicador;
            multiplicador-=1;
        }
        soma=(soma*10)%  11 
        if (soma ==10 || soma==11){
            soma=0;
        }
        return soma != cpf[10]; // o 10 indica o segundo dígito depois do traço
    }