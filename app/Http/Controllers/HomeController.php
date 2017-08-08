<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function news()
    {
        $news = News::getAllNews();
        return view('auth.news', ['news' => $news]);
    }

    public function updateById($id)
    {
        $result = News::selectbyId($id);
        return view('auth.updatenews', ['id' => $id, 'result' => $result]);
    }
}
