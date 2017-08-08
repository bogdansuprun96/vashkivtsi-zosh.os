<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function news()
    {
        $news = News::getAllNews();
        return view('news', ['news' => $news]);
    }

    public function newsbycategoryid($category_id)
    {
        $news = News::getAllByCategoryId($category_id);
        return view('viewnews', ['news' => $news]);
    }

    public function newsById($category_id, $id)
    {

        $news = News::getAllById($category_id, $id);
        return view('viewnew', ['news' => $news]);
    }


    public function category()
    {
        return view('category');
    }
}
