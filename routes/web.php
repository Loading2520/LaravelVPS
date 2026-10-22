
Route::get('/', function () {

    dd(opcache_get_status());

    return view('welcome');

});
