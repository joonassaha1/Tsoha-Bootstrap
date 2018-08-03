<?php

$routes->get('/', function() {
    HelloWorldController::index();
});

$routes->get('/list', function() {
    RecipeController::index();
});

$routes->post('/recipe', function() {
    RecipeController::store();
});

$routes->get('/recipe/new', function() {
    RecipeController::create();
});

//uusi metodi
$routes->get('/recipe/:id', function($id){
    RecipeController::show($id);
});

$routes->get('/chefs/chefindex', function() {
    ChefController::index();
});

$routes->get('/chefs/:id', function() {
    ChefController::oneChef();
});

$routes->get('/hiekkalaatikko', function() {
    HelloWorldController::sandbox();
});


$routes->get('/item', function() {
    #HelloWorldController::itemi();
    FoodstuffController::itemi();
});

$routes->get('/edit', function() {
    HelloWorldController::editti();
});

$routes->get('/login', function() {
    HelloWorldController::logini();
});
