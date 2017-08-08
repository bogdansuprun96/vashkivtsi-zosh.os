<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);

Route::group(['prefix' => 'news'], function (){
    Route::get('/', ['uses' => 'IndexController@news', 'as' => 'news']);
    Route::get('/{category_id}', 'IndexController@newsbycategoryid');
    Route::get('/{category_id}/{id}', 'IndexController@newsById');
});

Route::auth();
Route::group(['prefix' => 'home'], function (){
    Route::get('/', ['uses' => 'HomeController@index', 'as' => 'admin']);
    Route::get('/news', ['uses' => 'HomeController@news']);
    Route::get('/news/update-{id}', ['uses' => 'HomeController@updateById']);
    Route::get('/turn/{id}-{is_on}', function ($id, $is_on){
        if ($is_on === '1'){
            $is_on = '0';
            \App\News::turn($id, $is_on);
        }
        elseif ($is_on === '0')
        {
            $is_on = '1';
            \App\News::turn($id, $is_on);
        }
        return redirect()->back();
    });
});
