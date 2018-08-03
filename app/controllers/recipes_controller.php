<?php

class RecipeController extends BaseController {

    public static function index() {
        $recipes = Recipe::all();
        View::make('recipes/index.html', array('recipes' => $recipes));
    }

    //Toimiiko
    public static function show($id) {
        $recipe = Recipe::find($id);
        //korjaa alla oleva vielä
        View::make('recipe/recipe_show.html', array('recipe' => $recipe));
    }
    
    public static function create() {
        $recipes = Recipe::all();
        View::make('recipe/new.html', array('recipes' => $recipes));
    }

    public static function store() {
        $params = $_POST;
        $recipe = new Recipe(array(
            //'chef_id' => $params['chef_id'],
            //'foodstuff_id' => $params['foodstuff_id'],
            'nick' => $params['nick'],
            'description' => $params['description'],
            'status' => $params['status'],
            'published' => $params['published']
        ));


        $recipe->save();

        Redirect::to('/recipe/' . $recipe->id, array('message' => $recipe->nick . ' on lisätty!'));
    }

}
