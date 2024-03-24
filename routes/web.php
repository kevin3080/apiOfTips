<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->get('/', function (){
   return redirect('api/v1/docs');
});

$router->group(['prefix' => 'api/v1'], function ($router){
    $router->get('/', 'TipsController@redirectDocs');
    $router->get('docs', 'TipsController@docs');
    $router->get('tips', 'TipsController@redirectTips');
    $router->get('tips/all', 'TipsController@index');
    $router->get('tips/chinese-tips', 'ChineseTipController@index');
    $router->get('tips/japanese-tips', 'JapaneseTipController@index');
    $router->get('tips/greek-tips', 'GreekTipController@index');
    $router->get('tips/{id}', 'TipsController@show');
});