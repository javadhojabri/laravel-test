<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
URL::asset("storage\app/public/images/*");

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    //admin
    Route::get('/', "UsersController@home")->name("admin.admin.home");

    //user
    Route::get('/users', "UsersController@index")->name("admin.users.list");
    Route::get('/users/create', "UsersController@create")->name("admin.users.create");
    Route::post('/users/create', "UsersController@store")->name("admin.users.create");
    Route::get('/users/edit/{user_id}', "UsersController@edit")->name("admin.users.edit");
    Route::post('/users/edit/{user_id}', "UsersController@update")->name("admin.users.edit");
    Route::get('/users/delete/{user_id}', "UsersController@remove")->name("admin.users.remove");

    //Players
    Route::get('/players', "PlayersController@index")->name("admin.players.list");
    Route::get('/players/create', "PlayersController@create")->name("admin.players.create");
    Route::post('/players/create', "PlayersController@store")->name("admin.players.create");
    Route::get('/players/edit/{user_id}', "PlayersController@edit")->name("admin.players.edit");
    Route::post('/players/edit/{user_id}', "PlayersController@update")->name("admin.players.edit");
    Route::get('/players/delete/{user_id}', "PlayersController@remove")->name("admin.players.remove");

    //teams
    Route::get('/teams', "TeamsController@index")->name("admin.teams.list");
    Route::get('/teams/create', "TeamsController@create")->name("admin.teams.create");
    Route::post('/teams/create', "TeamsController@store")->name("admin.teams.create");
    Route::get('/teams/edit/{team_id}', "TeamsController@edit")->name("admin.teams.edit");
    Route::post('/teams/edit/{team_id}', "TeamsController@update")->name("admin.teams.edit");
    Route::get('/teams/delete/{team_id}', "TeamsController@remove")->name("admin.teams.remove");
    Route::get('/teams/syncplayer/{player_id}', "TeamsController@syncplayer")->name("admin.teams.syncplayer");
    Route::post('/teams/syncplayer/{player_id}', "TeamsController@update_syncplayer")->name("admin.teams.syncplayer");
});
Route::group(['namespace' => 'Frontend'], function () {
    //user
    Route::get('/', "HomeController@login")->name("frontend.home.login");
    Route::get('/', "HomeController@index")->name("frontend.home.index");
    Route::get('/register', "HomeController@register")->name("frontend.home.register");
    Route::post('/register', "HomeController@doregister")->name("frontend.home.register");
    Route::get('/login', "HomeController@login")->name("frontend.home.login");
    Route::post('/login', "HomeController@dologin")->name("frontend.home.login");
//    Route::get('/users/edit/{user_id}', "UsersController@edit")->name("admin.users.edit");
//    Route::post('/users/edit/{user_id}', "UsersController@update")->name("admin.users.edit");
//    Route::get('/users/delete/{user_id}', "UsersController@remove")->name("admin.users.remove");

});