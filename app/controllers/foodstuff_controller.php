<?php

class FoodstuffController extends BaseController {

    public static function itemi() {
        $foodstuffs = Foodstuff::all();
        View::make('list.html', array('foodstuffs' => $foodstuffs));
    }

}
