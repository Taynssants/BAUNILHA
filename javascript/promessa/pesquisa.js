document.addEventListener("DOMContentLoaded",function (){
    const inputPesquisa=document.getElementById('pesquisar');
    const listaNomes=document.getElementById('listaNomes');
    const nomes=Array.from(document.querySelectorAll('#listaNomes li'));

    inputPesquisa.addEventListener('input',function(){
        const termoPesquisa=inputPesquisa.ariaValueMax.toLowerCase();
        //procedimento -> toda função que não tem retorno
        //função -> toda função que tem retorno
       const  nomesFiltrados=nomes.filter(nome => nome.textContent.toLowerCase().
       includes(termoPesquisa));
        listaNomes.innerHTML="";

        nomesFiltrados.map(nome =>{
            const novoItem=document.createElement('li');
            novoItem.textContent=nome.textContent;
            listaNomes.appendChild(novoItem);
     
        })

            
    });
})