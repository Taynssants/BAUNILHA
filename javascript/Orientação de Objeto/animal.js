class Animal{
    especie;
    tamanho;
    habitat;
}

class Cachorro extends Animal{
constructor (especie, habitat){
    super(especie, habitat)
    this.especie=especie,
    this.habitat=habitat
}
}

const dog=new Cachorro("cachorro");
dog.tamanho="grande";
dog.habitat="domestico";
console.log(dog)
//
class Transporte{
tamanho;
combustível;

}

class Onibus extends Transporte{
empresa;
quantidadePassageiros;
}

class Carro extends Transporte{
    cor;
    marca;
    modelo;

}
class Moto extends Transporte{
   variações;
   preço;
    
}
const motobike=new Moto("moto");
motobike.variações="vespa";
motobike.preço=18000;
console.log(motobike)