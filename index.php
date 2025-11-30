<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Controller\Pages\Home;

$obReponse = new \App\Http\Response(200,'Olá Mundo');

$obReponse->sendResponse();

exit;


echo Home::getHome();



?>