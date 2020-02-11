<?php
spl_autoload_register(function ($className) {
    include("../model/{$className}.php");
});
$commune = filter_input(INPUT_GET,"commune");
$rayon = filter_input(INPUT_GET,"rayon");
$carburants = $_GET["carburants"];

$commande = "http://webtp.fil.univ-lille1.fr/~clerbout/carburant/stations.php?commune=".$commune."&carburants=";
for($i=0;$i<sizeof($carburants);$i++){
    if($i == (sizeof($carburants)-1)){
        $commande.=$carburants[$i];
        break;
    }
    $commande.=$carburants[$i];
    $commande.=",";
}
$commande.="&rayon=";
$commande.=$rayon;

$content = file_get_contents($commande); //Form json

$array_json = json_decode($content,true);
$array_data = $array_json['data'];

$data_size = sizeof($array_data);

for($i = 0;$i<sizeof($array_data);$i++){
    $prix = null;
    for($j = 0;$j<sizeof($array_data[$i]['prix']);$j++){
        $array_prix = $array_data[$i]['prix'][$j];
        $prix[$j] = new Prix($array_prix['idCarburant'],$array_prix['libelleCarburant'],$array_prix['valeur'],$array_prix['maj']);
    }
    $stations[$i] = new Station($array_data[$i]['id'],$array_data[$i]['latitude'],$array_data[$i]['longitude'],$array_data[$i]['pop'],$array_data[$i]['automate24'],$array_data[$i]['adresse'],$array_data[$i]['cp'],$array_data[$i]['ville'],$array_data[$i]['nom'],$array_data[$i]['marque'],$prix,$array_data[$i]['services']);
}


$html_res = '<div id="data">';
for($i = 0;$i < $data_size; $i++){
    $html_res .= '<div class="info"';
    $html_res .= 'id="'.$stations[$i]->getId().'" ';
    $html_res .= 'data-latitude="'.$stations[$i]->getLatitude().'" ';
    $html_res .= 'data-longitude="'.$stations[$i]->getLongitude().'" ';
    $html_res .= 'data-adresse="'.$stations[$i]->getAdresse().'" ';
    $html_res .= 'data-ville="'.$stations[$i]->getVille().'" ';
    $html_res .= 'data-cp="'.$stations[$i]->getCp().'" ';
    $html_res .= 'data-pop="'.$stations[$i]->getPop().'" ';
    $html_res .= 'data-nom="'.$stations[$i]->getNom().'" ';
    $html_res .= 'data-automate24="'.$stations[$i]->getAutomate24().'" ';
    $html_res .= '>';
    //Price suggestion
    $html_res .= '<h3> Prix des carburants : </h3>';
    $html_res .= '<table class="price-table">';
    $html_res .= '<tr><th>ID</th><th>Libelle</th><th>Prix</th><th>Date</th></tr>';

    for($j = 0;$j < sizeof($stations[$i]->getPrix());$j++){
        $prix = $stations[$i]->getPrix()[$j];
        $html_res .= '<tr>';
        $html_res .= '<td>'.$prix->getIdCarburant().'</td>';
        $html_res .= '<td>'.$prix->getLibelleCarburant().'</td>';
        $html_res .= '<td>'.$prix->getValeur().'</td>';
        $html_res .= '<td>'.$prix->getMaj().'</td>';

        $html_res .= '</tr>';

    }

    $html_res .= '</table>';
    $html_res .= '</div>';

}

$html_res .= '</div>';

require('../view/cartocarbu-map.php');