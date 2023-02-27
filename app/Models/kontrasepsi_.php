<?php

namespace App\Models;


class kontrasepsi 
{
   private static $post_kontrasepsi = [
    "nama" => "Raihan Anugerah Guntoro",
    "NIM" => "L200190045"
   ];

   public static function all()
   {
        return self::$post_kontrasepsi;
   }
}
