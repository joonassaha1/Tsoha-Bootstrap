<?php

class ChefController extends BaseController {

    public static function index() {
        $chefs = Chef::all();
        View::make('chefs/chefindex.html', array('chefs' => $chefs));
    }

    public static function oneChef() {
        //$chefs = Chef::all();
        View::make('chefs/chef.html');
    }

}
