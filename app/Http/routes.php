<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
Route::get('hocla',function(){
    echo 'Test';
});
Route::get('lap-trinh/laravel5.html',function(){
    echo 'Lap trinh laravel 5';
});
Route::get('lap-trinh/bai-tap-{id}.html',function($id){
    echo 'Lap trinh laravel 5 - ID : ' . $id;
});
Route::get('lap-trinh/bai-tap/{id}/mon-hoc/{monhoc?}',function($id,$monhoc){
    echo 'Lap trinh laravel 5 - ID : ' . $id .' - ' . $monhoc;
})->where([
    'id' => '[0-9]{1,10}',
    'monhoc' => '[a-zA-Z]+'
]);
Route::get('thongtin','WelcomeController@thongtin');