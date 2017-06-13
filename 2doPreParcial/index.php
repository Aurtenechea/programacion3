<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require './vendor/autoload.php';
require './lib2.php';

$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});

$app->post('/cd[/]', function (Request $request, Response $response) {

  	$destino="./fotos/";
  	$ArrayDeParametros = $request->getParsedBody();
  	var_dump($ArrayDeParametros);
 //  	$titulo= $ArrayDeParametros['titulo'];
 //  	$cantante= $ArrayDeParametros['cantante'];
 //  	$año= $ArrayDeParametros['anio'];

 //  	$micd = new cd();
 //  	$micd->titulo=$titulo;
 //  	$micd->cantante=$cantante;
 //  	$micd->año=$año;
 //  	$micd->InsertarElCdParametros();

  	$archivos = $request->getUploadedFiles();
  	//var_dump($ArrayDeParametros);
  	//var_dump($archivos);
  	//var_dump($archivos['foto']);


	$nombreAnterior=$archivos['foto']->getClientFilename();
	$extension= explode(".", $nombreAnterior)  ;
	//var_dump($nombreAnterior);
	$extension=array_reverse($extension);

  	$archivos['foto']->moveTo($destino . 'nombre-prueba.' . $extension[0]);
    // $response->getBody()->write("cd");

    return $response;

});

$app->run();
