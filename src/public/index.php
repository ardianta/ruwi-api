<?php

require __DIR__.'/../../vendor/autoload.php';

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


$app = new \Slim\App();

$app->get('/lokasi[/[{id}]]', function (Request $request, Response $response, $args) {

    if( count($args) ){
        $data = array('data' => Lokasi::where([
            ['jenis','=','Tempat Wisata'],
            ['id_lokasi','=',$args['id']]
        ])->get());
    } else {
        $data = array('data' => Lokasi::where('jenis','Tempat Wisata')->get());
    }

    return $response->withJson($data);
});

$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});

$app->get('/', function () {
    echo "<h2>Welcom to ruwi API</h2>";
});


$app->run();
