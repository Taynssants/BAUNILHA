class casa {
    casa
    area
    comodos
    tipo
    cor
    pe_direito;
}

const casa1= new Casa();
casa1.area=2;
casa1.comodos=8;
casa1.tipo="geminada";
casa1.cor="azul";
casa1.pe_direito=10;

//quando uma variável recebe uma classe, 
//ela vira um objeto (ela guarda a informação do endereço, mas o que acontece ou deixa de 
//acontecer com ele não é problema dela)

class Livro{
    titulo;
    autor;
}

const livro1= new Livro();
const livro2= new Livro();

livro1.titulo="narnia";
livro1.titulo="jogos vorazes";
livro1.autor="cs lewis";
livro2.autor="susanne collins";

console.log(livro1)
console.log(livro2)

//construtor: ele vai te dizer o que tem na classe e pode ou não te obrigar a preencher algo
class Casa {
    construtor(area, pe_direito, comodos, tipo, cor){
        this.area=area;
        this.pe_direito=pe_direito;
        this.comodos=comodos;
        this.tipo=tipo;
        this.cor=cor;
    }
}

const casa1=new Casa(5,10,8,
    "geminada", "azul");
    const casa2=new Casa();

    
