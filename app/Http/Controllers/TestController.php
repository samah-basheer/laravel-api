<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function palindrome($string){
        if (strrev($string) == $string){
            return 1;
        }
        else{
            return 0;
        }
    }

    public function palindromeCount($array) {
        $count = 0;
        foreach ($array as $string) {
            if(palindrome($string) == 1) {
                $count++;
            }
        }
        return response()->json([
            "status" => "Success",
            "count" => $count
        ], 200);
    }

    public function seconds() {
        $seconds = 0;
        $given_year = 1732;
        $current_year = date("Y");

        $given_month = 4;
        $current_month = date("M");

        $given_day = 14;
        $current_day = date("d");

        $seconds = (($current_year-$given_year)*365*24*60*60) + (($current_month-$given_month)*24*60*60) + (($current_day-$given_day)*60*60)  ;

        return response()->json([
            "status" => "Success",
            "seconds" => $seconds
        ], 200);
    }

    public function apiSlack() {
        $json_arr = file_get_contents('https://icanhazdadjoke.com/slack');
        $arr = json_decode($json_arr);

        return response()->json([
            "status" => "Success",
            "text" => $arr['attachments']['text']
        ], 200);

    }

    public function beerRecipe() {
        $json_arr = file_get_contents('https://api.punkapi.com/v2/beers');
        $arr = json_decode($json_arr);

        $random = rand(1,25);

        return response()->json([
            "status" => "Success",
            "beer" => $arr[$random]
        ], 200);
    }

    public function studentGroup() {
        $array = ['samah', 'hasan', 'hiba', 'haifa'];

        $group1 = array_slice($array, 0, count($array) / 2);
        $group2 = array_slice($array, count($array) / 2);

        return response()->json([
            "status" => "Success",
            "group 1" => $group1,
            "group 2" => $group2
        ], 200);
    }

    public function nominee() {
        $array = ['samah', 'hasan', 'hiba', 'haifa'];
        $random = rand(1,count($array));

        return response()->json([
            "status" => "Success",
            "nominee" => $array[$random]
        ], 200);
    }
}
