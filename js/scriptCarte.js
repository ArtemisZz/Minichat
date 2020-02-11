window.addEventListener("load",dessinerCarte);

// fonction de mise en place de la carte.
// Suppose qu'il existe dans le document
// un élément possédant id="cartecampus"
function dessinerCarte(){
    var l = document.querySelectorAll("div#data>div"); //liste de toutes les lignes
    // création de la carte, centrée sur le point 50.60976, 3.13909, niveau de zoom 16
    // cette carte sera dessinée dans l'élément HTML "cartecampus"
    var map = L.map('carteCampus').setView([l[0].dataset.latitude, l[0].dataset.longitude], 13);
    var pointList= [];
    // ajout du fond de carte OpenStreetMap
    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '©️ <a href="http://osm.org/copyright">OpenStreetMap>/a> contributors'
    }).addTo(map);

    for(let i = 0; i < l.length; i++){
        // positionnement d'un marqueur au point 50.609614, 3.136635  avec un popup associé
        var marker = L.marker([l[i].dataset.latitude, l[i].dataset.longitude]).addTo(map)
            .bindPopup('Adresse : ' + l[i].dataset.adresse + '<p> Ville : '+l[i].dataset.ville+'</p>' + '<p> CP : '+l[i].dataset.cp+'</p>  <button type="button" value="'+l[i].id+'">Show more</button>');
        pointList.push(marker);

    }
    //map.fitBounds(pointList);
    let firstElement = document.getElementsByClassName("info")[0];
    firstElement.classList.add("marquee");



    // Mise en place d'une gestionnaire d'évènement : activerBouton se déclenchera à chaque ouverture de popup
    map.on("popupopen",activerBouton);


    // NB : map.on() est une méthode propre à la bibliothèque Leaflet qui permet d'associer des gestionnaires
    // aux évènements concernant la carte.
    //map.on("click",afficheCoord);
}


// gestionnaire d'évènement (déclenché lors de l'ouverture d'un popup)
// cette fonction va rendre actif le bouton inclus dans le popup en lui assocaint un gestionnaire d'évènement
function activerBouton(ev) {
    var noeudPopup = ev.popup._contentNode; // le noeud DOM qui contient le texte du popup
    var bouton = noeudPopup.querySelector("button"); // le noeud DOM du bouton inclu dans le popup
    bouton.addEventListener("click",modifieListe); // en cas de click, on déclenche la fonction boutonActive
}


/*
function afficheCoord(ev) {
    alert(ev.latlng);
}
*/


// gestionnaire d'évènement (déclenché lors d'un click sur le bouton dans un popup)
// cette fonction va ajouter la classe "marquee" à la ligne de la commune concernée par le click.
// et retirer la classe marquee à la ligne qui l'avait précedemment
// la ligne marquée est ensuite déplacée en début de table
function modifieListe(ev) {
    // suppression de la classe marquee, si nécessaire
    let oldMarquee = document.querySelector("div#data>div");
    if (oldMarquee){
        oldMarquee.classList.remove("marquee");
        oldMarquee.style.display = 'none';
    }
    // this est ici le noeud DOM de <button>. La valeur associée au bouton est donc this.value
    // identifiant de la ligne correspondant au bouton cliqué :
    let identifiant = ""+this.value;

    // et récupération de l'objet DOM de la ligne :
    let ligne =  document.getElementById(identifiant);

    ligne.classList.add("marquee");

    // déplacement de la ligne pour la remonter en début de table :
    var parent = ligne.parentNode;
    parent.removeChild(ligne); //supprime la ligne
    parent.insertBefore(ligne, parent.firstChild); // et la ré-insère au debut
    ligne.style.display = 'block';
    document.querySelector("div#data>div>button").addEventListener('click',closeForm);

}

function closeForm() {
    document.getElementsByClassName("marquee")[0].style.display = "none";
}

/*
// gestionnaire d'évènement (déclenché lors d'un click sur le bouton dans un popup)
function boutonActive(ev) {
    // this est ici le noeud DOM de <button>. La valeur associée au bouton est donc this.value
    alert("Vous avez choisi : " + this.value);
}
 */