<!-- pal de ma function du composeur   -->
<?php 
// chargeur automatique de Composer

use GuzzleHttp\Client;
$lien = 'http://localhost/TD-Site-d-informations-cin-ma/index.php';
require_once($_SERVER['DOCUMENT_ROOT'].'/'.$lien);
require_once './vendor/autoload.php';
function Gguzzle(){
    $client = new Client([
        'base_uri' => 'http://httpbin.org',
        'timeout'  => 2.0,
    ]);
    
}





?>