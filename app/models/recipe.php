<?php

class Recipe extends BaseModel {

    //attribuutit
    public $chef_id, $foodstuff_id, $nick, $description, $status, $published;

    public function __construct($attributes) {
        parent::__construct($attributes);
    }

    public static function all() {
        $query = DB::connection()->prepare('SELECT * FROM Recipe');
        $query->execute();
        $rows = $query->fetchAll();
        $recipes = array();

        foreach ($rows as $row) {
            $recipes[] = new Recipe(array(
                'chef_id' => $row['chef_id'],
                'foodstuff_id' => $row['foodstuff_id'],
                'nick' => $row['nick'],
                'description' => $row['description'],
                'status' => $row['status'],
                'published' => $row['publihed']
            ));
        }

        return $recipes;
    }

    public static function findByChef($id) {
        $query = DB::connection()->prepare('SELECT * FROM Recipe WHERE chef_id = :chef_id LIMIT 1');
        $query->execute(array('id' => $id));
        $row = $query->fetch();

        if ($row) {
            $recipe = new Recipe(array(
                'chef_id' => $row['chef_id'],
                'foodstuff_id' => $row['foodstuff_id'],
                'nick' => $row['nick'],
                'description' => $row['description'],
                'status' => $row['status'],
                'published' => $row['published']
            ));
        }

        return $recipe;
    }

}
