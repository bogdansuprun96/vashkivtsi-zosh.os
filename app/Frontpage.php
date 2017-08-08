<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Frontpage extends Model
{
    public static function getHeader()
    {
        $phone = DB::table('header')->where('id', 1)->first();
        $email = DB::table('header')->where('id', 4)->first();
        $address = DB::table('header')->where('id', 7)->first();
        $title = DB::table('header')->where('id', 8)->first();

        $result = [$phone, $email, $address, $title];

        return $result;
    }

    public static function getUrls()
    {
        $urls = DB::table('urls')->get();

        return $urls;
    }

    public static function getFooter()
    {
        $block1 = DB::table('footer')->where('id', 1)->first();
        $block2 = DB::table('footer')->where('id', 2)->first();
        $block3 = DB::table('footer')->where('id', 3)->first();
        $block4 = DB::table('footer')->where('id', 4)->first();

        $result = [ 'block1' => $block1,
                    'block2' => $block2,
                    'block3' => $block3,
                    'block4' => $block4
                  ];

        return $result;
    }
}
