

// Sélectionner les éléments HTML
let pokemonButton = document.getElementById('pokemon');
let refreshButton = document.getElementById('refresh');

// let offset = document.getElementById('plus').value;
let offsetButtonPlus = document.getElementById('plus');
let offset = document.getElementById('plus').value;




offsetButtonPlus.addEventListener('click', function(){

// Récupérer l'URL actuelle
let url = new URL(window.location.href);
// alert(url)
// Récupérer les paramètres de l'URL
let searchParams = new URLSearchParams(url.search);

// Récupérer la valeur de offset
let offsetValue = searchParams.get('offset');

// Ajouter 12 à la valeur de offset
let newOffsetValue = parseInt(offsetValue) + 12;

// Mettre à jour la valeur de offset dans les paramètres de l'URL
searchParams.set('offset', newOffsetValue);

// Mettre à jour l'URL
url.search = searchParams.toString();
alert(url.toString())


  $.ajax({
    // url: "https://pokeapi.co/api/v2/pokemon/" + pokemonId,
    url: url.toString(),
    dataType: "json",
    success: function(data) {
      // Traitement des données
      console.log(data);
      
    }
  });

  


});

