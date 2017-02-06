<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/version', function () use ($app) {
    return $app->version();
});

# コントローラに処理させるパターン
$app->get('/', 'TopPageController@index');

# そのままviewを表示させるパターン
$app->get('/no-controller', function () use ($app) {
    return view('top_page', ['h1' => 'lumen + twig']);
});