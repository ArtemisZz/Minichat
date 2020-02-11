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
    $array_prix = $array_data[$i]['prix'][0];
    $prix = new Prix($array_prix['idCarburant'],$array_prix['libelleCarburant'],$array_prix['valeur'],$array_prix['maj']);
    $stations[$i] = new Station($array_data[$i]['id'],$array_data[$i]['latitude'],$array_data[$i]['longitude'],$array_data[$i]['pop'],$array_data[$i]['automate24'],$array_data[$i]['adresse'],$array_data[$i]['cp'],$array_data[$i]['ville'],$array_data[$i]['nom'],$array_data[$i]['marque'],$prix,$array_data[$i]['services']);
}


$html_res = '<div class="data" style="display: none;">';
$html_res .= '<h1>Bello</h1>';

$html_res .= '</div>';

require('../view/cartocarbu-map.php');