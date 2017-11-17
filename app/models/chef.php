<?php

class Chef extends BaseModel {

    public $id, $nick, $password;

    public function __construct($attributes) {
        parent::__construct($attributes);
    }

    public static function all() {
        $query = DB::connection()->prepare('SELECT * FROM Chef');
        $query->execute();
        $rows = $query->fetchAll();
        $chefs = array();

        foreach ($rows as $row) {
            $chefs[] = new Chef(array(
                'id' => $row['id'],
                'nick' => $row['nick']
            ));
        }

        return $chefs;
    }

    public static function find($id) {
        $query = DB::connection()->prepare('SELECT * FROM Chef WHERE id = :id LIMIT 1');
        $query->execute(array('id' => $id));
        $row = $query->fetch();

        if ($row) {
            $chef = new Chef(array(
                'id' => $row['id'],
                'nick' => $row['nick'],
            ));
        }

        return $chef;
    }

}
