<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControllerFile;
use App\Http\Controllers\InsertData;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/zz', function () {
    // return view('a');
    return "<h1>Return Post Page</h1>";
});
Route::get('/post', function () {
    return view('post');
});
// Route::get('/a/b', function () {
//     return view('b');
// });
// Route::get('/a', function () {
//     return view('a');
// });
// Route::get('/b', function () {
//     return view('b');
// });

// Route::get('/post/{id?}',function($id = null){
//     return 
//     '<h1>Psot ID : ' .$id .'</h1>';
//     // return view('post');
// })->whereNumber('id');
// Route::get('/a',function(){
//     return view('a');

// })->name('AFile');
// Route::redirect('/abc','/a');
// Route::prefix('/page')->group(function(){
//     Route::get('/prefix1', function () {
//     return view('prefix1');
// });
//     Route::get('/prefix2', function () {
//     return view('prefix2');
// });
// });
// Route::fallback(function(){
//     return "<h1>Page Not Found</h1>";
// });
// Route::get('basic', function () {
//     return view('basic');
// });
// // Main Layout Folder ROutes
// Route::get('/About', function () {
//     return view('About');
// });
Route::get('/Home',function(){
    return view('Home');
});
// Route::get('/script',function(){
//     return view('script');
// });

//end
// controlleer start 
Route::controller(ControllerFile::class)->group(function(){
    Route::get('/post','postFile');
    Route::get('/About','aboutFile');
});
// controlleer end
// Building Query start
Route::get('/Student',[InsertData::class,'getTable']);
// Building Query end