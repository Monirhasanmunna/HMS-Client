<?php

namespace App\Helper;
class Helper{
    public static function arrayCovert($array, $key){

        $ids = [];
        foreach($array as $adv){
            array_push($ids, $adv->{$key});
        }
        return $ids;
    }

}