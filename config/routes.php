<?php

$routes->get('/', function() {
    HelloWorldController::index();
});

$routes->get('/list', function() {
    #HelloWorldController::lista();
    RecipeController::index();
});

$routes->get('/chefs/chefindex', function() {
    ChefController::index();
});

$routes->post('/recipes', function() {
    RecipeController::store();
});

$routes->get('/recipes/new', function() {
    RecipeController::create();
});

$routes->get('/recipes/:id', function($id){
  GameController::show($id);
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
