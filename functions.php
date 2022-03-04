<!-- pal de ma function du composeur   -->

<?php
require_once('./config/config.php');
// chargeur automatique de Composer


// require_once($_SERVER['DOCUMENT_ROOT'] . 'http://localhost/TD-Site-d-informations-cin-ma/index.php');
// require_once './vendor/autoload.php';

// function Gguzzle(){
//     $client = new GuzzleHttp\Client(['base_uri' => '']);
// }

// une bonne presentation du rendu 
function pretty_print_r($var): void{
    echo '<pre>' . print_r($var, true) . '</pre>';
}

require_once('./vendor/autoload.php');

use GuzzleHttp\Client;

function get_client()
{
    $client = new Client([
        'verify' => false,
        'stream' => false,
    ]);
    return $client;
}

function make_a_request(Client $client)
{
    // /movie/popular** recupere tout les films populaire  
    $response = $client->get(base_chemin . '/movie/popular?' . authentification);
    $contenu = $response->getBody()->getContents();
    $contenu_traduit = json_decode($contenu);
    // appelation des films 
    pretty_print_r($contenu_traduit);
    //  ->results[0]
}
$client = get_client();
make_a_request($client);





?>