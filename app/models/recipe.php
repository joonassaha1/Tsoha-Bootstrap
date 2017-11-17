<?php

class Recipe extends BaseModel {

    public $id, $chef_id, $foodstuff_id, $nick, $description, $status, $published;

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
                'id' => $row['id'],
                'chef_id' => $row['chef_id'],
                'foodstuff_id' => $row['foodstuff_id'],
                'nick' => $row['nick'],
                'description' => $row['description'],
                'status' => $row['status'],
                'published' => $row['published']
            ));
        }

        return $recipes;
    }

    public static function find($id) {
        $query = DB::connection()->prepare('SELECT * FROM Recipe WHERE id = :id LIMIT 1');
        $query->execute(array('id' => $id));
        $row = $query->fetch();

        if ($row) {
            $recipe = new Recipe(array(
                'id' => $row['id'],
                'chef_id' => $row['chef_id'],
                'foodstuff_id' => $row['foodstuff_id'],
                'nick' => $row['nick'],
                'description' => $row['description'],
                'status' => $row['status'],
                'published' => $row['published']
            ));

            return $recipe;
        }

        return null;
    }

    public function save() {
        $query = DB::connection()->prepare('INSERT INTO Recipe (nick, description, published) VALUES (:nick, :description, :published) RETURNING chef_id');
        $query->execute(array('nick' => $this->nick, 'published' => $this->published, 'description' => $this->description));
        $row = $query->fetch();
        $this->chef_id = $row['chef_id'];
    }

    public static function findByChef($chef_id) {
        $query = DB::connection()->prepare('SELECT * FROM Recipe WHERE chef_id = :chef_id LIMIT 1');
        $query->execute(array('id' => $id));
        $row = $query->fetch();

        if ($row) {
            $recipe = new Recipe(array(
                'id' => $row['id'],
                'chef_id' => $row['chef_id'],
                'foodstuff_id' => $row['foodstuff_id'],
                'nick' => $row['nick'],
                'description' => $row['description'],
                'status' => $row['status'],
                'published' => $row['published']
            ));
            return $recipe;
        }

        return null;
    }

}
