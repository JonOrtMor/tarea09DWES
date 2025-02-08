function searchPokemon() {
    const searchTerm = document.getElementById('search').value;
    fetch(`api.php?name=${searchTerm}`)
        .then(response => response.json())
        .then(data => {
            let resultDiv = document.getElementById('result');
            if (data.error) {
                resultDiv.innerHTML = `<p>${data.error}</p>`;
            } else {
                resultDiv.innerHTML = `
                    <h2>${data.name}</h2>
                    <img src="${data.sprites.front_default}" alt="${data.name}">
                    <p>Height: ${data.height}</p>
                    <p>Weight: ${data.weight}</p>
                `;
            }
        })
        .catch(error => console.error('Error:', error));
}

