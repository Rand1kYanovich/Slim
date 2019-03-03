<?php
require '../vendor/autoload.php';
$app = new Slim\App();


$app->get('/hello/{name}',function ($request, $response,$args) use($app){
$name = $args['name'];
return $response->write('Hi '.$name);
});
/*

$app->post('/add',function () {
   print_r($_POST);
});
*/
//run application
$app->run();
?>