<?php

$routes->get('/', function() {
    HelloWorldController::index();
});

$routes->get('/hiekkalaatikko', function() {
    HelloWorldController::sandbox();
});

$routes->get('/list', function() {
    HelloWorldController::lista();
});

$routes->get('/item', function() {
    HelloWorldController::itemi();
});

$routes->get('/edit', function() {
    HelloWorldController::editti();
});

$routes->get('/login', function() {
    HelloWorldController::logini();
});
