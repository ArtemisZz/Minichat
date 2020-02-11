window.addEventListener("load",dessinerCarte);

// fonction de mise en place de la carte.
// Suppose qu'il existe dans le document
// un élément possédant id="cartecampus"
function dessinerCarte(){
    // création de la carte, centrée sur le point 50.60976, 3.13909, niveau de zoom 16
    // cette carte sera dessinée dans l'élément HTML "cartecampus"
    var map = L.map('carteCampus').setView([50.60976, 3.13909], 16);

    // ajout du fond de carte OpenStreetMap
    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '©️ <a href="http://osm.org/copyright">OpenStreetMap>/a> contributors'
    }).addTo(map);

    // positionnement d'un marqueur au point 50.609614, 3.136635  avec un popup associé
    var marker = L.marker([50.609614, 3.136635]).addTo(map)
        .bindPopup('Le bâtiment M5 <p>Formations en Informatique</p> ...');
}