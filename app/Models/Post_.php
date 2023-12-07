<?php

namespace App\Models;

class Post 
{
    private static $car_rent = [
        [
            "brand"=> "Toyota",
            "model"=> "Fortuner",
            "image"=> "https://images.unsplash.com/photo-1664783856972-ac9922d7b2d3?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjZ8fGZvcnR1bmVyfGVufDB8fDB8fHww",
            "rental rate"=> "Rp500.000,-/day",
            "number plate"=> "BN 1234 AP",
            "slug"=> "bn-1234-ap"
        ],[
            "brand"=> "Suzuki",
            "model"=> "Ertiga",
            "image"=> "https://images.unsplash.com/photo-1664783856972-ac9922d7b2d3?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjZ8fGZvcnR1bmVyfGVufDB8fDB8fHww",
            "rental rate"=> "RP300.000.-/day",
            "number plate"=> "BN 4321 PA",
            "slug" => "bn-4321-pa"
        ],[
            "brand"=> "Toyota",
            "model"=> "Inova",
            "image"=> "https://images.unsplash.com/photo-1664783856972-ac9922d7b2d3?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjZ8fGZvcnR1bmVyfGVufDB8fDB8fHww",
            "rental rate"=> "Rp500.000,-/day",
            "number plate"=> "BN 6789 AP",
            "slug"=> "bn-6789-ap"
        ],[
            "brand"=> "Suzuki",
            "model"=> "XL7",
            "image"=> "https://images.unsplash.com/photo-1664783856972-ac9922d7b2d3?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjZ8fGZvcnR1bmVyfGVufDB8fDB8fHww",
            "rental rate"=> "RP300.000.-/day",
            "number plate"=> "BN 9876 PA",
            "slug" => "bn-9876-pa"
        ]
    ];

    public static function all() {
        return collect(self::$car_rent);
    }

    public static function find($slug) {
        $allCar = static::all();
        return $allCar->firstWhere("slug", $slug);
    }
}