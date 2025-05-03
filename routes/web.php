<?php

use RobertWesner\SimpleMvcPhp\Route;

$server = [
    'uri' => $_SERVER['REQUEST_URI'],
];

Route::get('/', function () use ($server) {
    return Route::render('index.twig', ['server' => $server]);
});

Route::get('/projects/?', function () use ($server) {
    return Route::render('projects.twig', ['server' => $server]);
});

Route::get('/blog/?', function () use ($server) {
    return Route::render('blog.twig', ['server' => $server]);
});

Route::get('.*', function () {
    return Route::render('404.twig', status: 404);
});
