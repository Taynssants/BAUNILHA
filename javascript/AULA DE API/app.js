//fetch -> json

async function getPokemon(index){
    try{
        const response=await axios.get(`${apiURL}/${index}`);
        const pokemonData=response.data;

        displayPokemon(pokemonData);
    }catch(error){
        console.error(`Erro ao obter informações do pokemon ${index}:`, error);
    }
}

function displayPokemon(pokemonData){
    const pokemonContainer = document.getElementById('pokemon-container');
    pokemonContainer.innerHTML = "";

    const pokemonInfo = document.createElement('div');
    pokemonInfo.innerHTML = `
    <h2>${pokemonData.name}</h2>
    <img src="${pokemonData.sprites.front_default}" alt="${pokemon.name}" />
    
    `;


}