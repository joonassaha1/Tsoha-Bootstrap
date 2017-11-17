<?php

class Foodstuff extends BaseModel {

    //attribuutit
    public $id, $nick, $description;

    public function __construct($attributes) {
        parent::__construct($attributes);
    }

    public static function all() {
        $query = DB::connection()->prepare('SELECT * FROM Foodstuff');
        $query->execute();
        $rows = $query->fetchAll();
        $foodstuffs = array();

        foreach ($rows as $row) {
            $foodstuffs[] = new Foodstuff(array(
                'id' => $row['id'],
                'nick' => $row['nick'],
                'description' => $row['description']
            ));
        }

        return $foodstuffs;
    }

    public static function find($id) {
        $query = DB::connection()->prepare('SELECT * FROM Foodstuff WHERE id = :id LIMIT 1');
        $query->execute(array('id' => $id));
        $row = $query->fetch();

        if ($row) {
            $foodstuff = new Foodstuff(array(
                'id' => $row['id'],
                'nick' => $row['nick'],
                'description' => $row['description']
            ));
        }

        return $foodstuff;
    }

}
