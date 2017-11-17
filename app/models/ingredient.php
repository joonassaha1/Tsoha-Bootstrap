<?php

class Ingredient extends BaseModel {

    //attribuutit
    public $foodstuff_id, $nick;

    public function __construct($attributes) {
        parent::__construct($attributes);
    }

    public static function all() {
        $query = DB::connection()->prepare('SELECT * FROM Ingredient');
        $query->execute();
        $rows = $query->fetchAll();
        $ingredients = array();

        foreach ($rows as $row) {
            $ingredients[] = new Ingredient(array(
                'foodstuff_id' => $row['id'],
                'nick' => $row['nick'],
            ));
        }

        return $ingredients;
    }

    public static function findByFoodstuff($id) {
        $query = DB::connection()->prepare('SELECT * FROM Ingredient WHERE foodstuff_id = :foodstuff_id LIMIT 1');
        $query->execute(array('id' => $id));
        $row = $query->fetch();

        if ($row) {
            $ingredient = new Ingredient(array(
                'foodstuff_id' => $row['foodstuff_id'],
                'nick' => $row['nick'],
            ));
            return $ingredient;
        }

        return null;
    }

}
