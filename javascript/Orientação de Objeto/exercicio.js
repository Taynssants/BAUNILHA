//crie uma classe chamada cachorro com nome, e idade; fazer construtor da classe pra inserir valores
class Cachorro{
    constructor(nome, idade){
        this.nome=nome;
        this.idade=idade;
    }
}
const cachorro1=new Cachorro("Théu", 12);




//crie uma classe chamada carro com marca, modelo e ano e faça construtor da classe
class Carro{
    estado="desligado";
    movimento="parado";
    constructor(marca, modelo, ano){
        this.marca=marca;
        this.modelo=modelo;
        this.ano=ano;
    }

    acelerar(){
        console.log('o carro acelerou');
    }
    freiar(){
        if(this.movimento=="aceleração"){
            console.log('o carro parou');      
    }
}

    ligar(){
        if(this.estado="ligado"){
            console.log("o carro já está ligado")
        }else{
            console.log('o carro ligou');
            this.estado="ligado";
        }     
    }


    desligar(){
        console.log('o carro desligou')
        this.estado="desligado";
    }
}
const Carro1=new Carro("BMW", "fusca", 2010);
Carro1.ligar()
Carro1.desligar()
Carro1.ligar()
Carro1.acelerar()
Carro1.freiar();