<?php

namespace App\Models;

use Faker\Provider\Lorem;

class Article
{
    private static $articles = [
        [
            "title" => "Ukraine vs Russia",
            "slug" => "ukraine-vs-rusia",
            "author"=> "Russia Today",
            "body" => "Russia side - Lorem ipsum dolor sit amet consectetur adipisicing elit.."
        ],
        [
            "title" => "Omicron di Indonesia",
            "slug" => "omicron-di-indonesia",
            "author"=> "Pemuda Pancasila Bogor",
            "body" => "Omicron - excepturi atque, quibusdam repudiandae error nesciunt? Ad, blanditiis quidem magni recusandae asperiores unde est."
        ],
    ];

    public static function all(){
        return self::$articles;
    }
    public static function find($slug){
        $articles = collect(static::all());
        
        return $articles->firstWhere('slug', $slug);
    }

}

