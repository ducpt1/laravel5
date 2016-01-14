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
    //echo 'Lap trinh laravel 5 - ID : ' . $id .' - ' . $monhoc;
    return 'Lap trinh laravel 5 - ID : ' . $id .' - ' . $monhoc;
})->where([
    'id' => '[0-9]{1,10}',
    'monhoc' => '[a-zA-Z]+'
]);
Route::get('thongtin','WelcomeController@thongtin');

Route::get('call-view',function(){
    $name1 = 'DucPT1';
    $name2 = 'DucPT2';
    $name3 = 'DucPT3';
    return view('view',compact('name1','name2','name3'));
});
Route::get('ho-chi-minh',['as' => 'hcm',function(){
    return "Route dinh danh";
}]);
Route::group(['prefix'=>'thuc-don'],function(){
    Route::get('bun-bo',function(){
        return 'Bun bo';
    });
    Route::get('bun-moc',function(){
        return 'Bun moc';
    });
    Route::get('bun-man',function(){
        return 'Bun mam';
    });
});
Route::get('goi-view',function(){
    return view('layout.sub.view');
});
Route::get('goi-layout',function(){
    return view('layout.sub.layout');
});
View::share('title_page','Học lập trình Laravel 5.x');
View::composer(['layout.sub.layout','layout.sub.view'],function($view){
    return $view->with('thongtin','Day la trang ca nhan');
});
Route::get('check-view',function(){
    if(view()->exists('layout.sub.layout')){
        return 'Co view';
    }else{
        return 'No view';
    }
});
Route::get('goi-master',function(){
    return view('views.layout');
});
Route::get('url/full',function(){
    return URL::full();
});
Route::get('url/asset',function(){
    //return URL::asset('css/mystyle.css');
    return asset('css/mystyle.css');
});
Route::get('url/to',function(){
    return URL::to('lap-trinh',['123']);
});
Route::get('url/secure',function(){
    return secure_url('thong-tin',['DucPT2','123456789'],true);
});
#### SCHEMA ####
#Tao bang
Route::get('schema/create',function(){
    #https://laravel.com/docs/5.2/migrations
    Schema::create('khoapham',function($table){
        $table->increments('id');
        $table->string('name',100);
        $table->integer('gia');
        $table->text('ghi_chu')->nullable();
        $table->timestamps();
    });
});
#Doi ten bang
Route::get('schema/rename',function(){
    #https://laravel.com/docs/5.2/migrations
    Schema::rename('khoapham','ducpt');
});
#Xoa bang
Route::get('schema/drop',function(){
    Schema::dropIfExists('khoapham');
});
#Thay doi thuoc tinh cot
Route::get('schema/change-col-attr',function(){
    Schema::table('ducpt',function($table){
        $table->string('name',50)->change();
    });
});
#Xoa cot
Route::get('schema/drop-col',function(){
    Schema::table('ducpt',function($table){
        #Xoa 1
        #$table->dropColumn('ghi_chu');
        #Xoa nhieu
        $table->dropColumn(['name','gia']);
    });
});