<?php

class HelloWorldController extends BaseController {

    public static function index() {
        // make-metodi renderöi app/views-kansiossa sijaitsevia tiedostoja
        View::make('home.html');
        //echo 'Tämä on etusivu!';
    }

    public static function sandbox() {
        // Testaa koodiasi täällä
        #echo 'Hello World!';
        #View::make('helloworld.html');
        $ekakokki = Chef::find(1);
        $chefs = Chef::all();
        // Kint-luokan dump-metodi tulostaa muuttujan arvon
        Kint::dump($chefs);
        Kint::dump($ekakokki);
    }

    public static function lista() {
        // Testaa koodiasi täällä
        #echo 'Hello World!';
        View::make('list.html');
    }

    public static function itemi() {
        // Testaa koodiasi täällä
        #echo 'Hello World!';
        View::make('item.html');
    }

    public static function editti() {
        // Testaa koodiasi täällä
        #echo 'Hello World!';
        View::make('edit.html');
    }

    public static function logini() {
        // Testaa koodiasi täällä
        #echo 'Hello World!';
        View::make('login.html');
    }

}
