<?php

class RecipeController extends BaseController {

    public static function index() {
        $recipes = Recipe::all();
        View::make('recipes/index.html', array('recipes' => $recipes));
    }

    public static function store() {
        $params = $_POST;
        $recipes = new Recipe(array(
            'chef_id' => $params['chef_id'],
            'foodstuff_id' => $params['foodstuff_id'],
            'nick' => $params['nick'],
            'description' => $params['description'],
            'status' => $params['status'],
            'published' => $params['published']
        ));
        

        $recipes->save();

        Redirect::to('/list' . $recipe->chef_id, array('message' => 'Resepti on lisätty!'));
    }

}
