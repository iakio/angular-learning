<?php
require __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application;
$app['debug'] = true;
$app->get('/user/{user_id}', function($user_id) use($app){
    return $app->json(["user_id" => $user_id, "name" => "Bob"]);
});
return $app;
