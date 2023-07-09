<?php

namespace App\Models;

class daftaranime 
{
    private static $daftaranime = [
        "title" => "Judul",
        "slug" => "judul",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis eos dolores asperiores aperiam ipsa mollitia numquam? Maxime, dolorem reprehenderit. Vitae, aperiam. Suscipit magnam vitae voluptatum excepturi eligendi odit ducimus laborum."
    ];

    public static function all()
    {
        return self::$daftaranime;
    }
};
