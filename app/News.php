<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class News extends Model
{
    public static function getAllNews()
    {
        $news = DB::table('news')->paginate(10);

        return $news;
    }

    public static function getAllByCategoryId($category_id)
    {
        $news = DB::table('news')->where('category_id', $category_id)->paginate('10');
        return $news;
    }

    public static function getAllById($category_id, $id)
    {
        $news = DB::select('select * from news where category_id = :category_id AND id = :id', ['category_id' => $category_id, 'id' => $id]);
        return $news;
    }

    public static function selectCategorybyId($id)
    {
        $name = DB::table('categories')->where('id', $id)->first();
        return $name;
    }

    public static function turn($id, $is_on)
    {
        $result = DB::table('news')->where('id', $id)->update(['is_on' => $is_on]);
        return $result;
    }

    public static function selectbyId($id)
    {
        $results = DB::table('news')->where('id', $id)->first();
        return $results;
    }
}
