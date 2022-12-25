<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::view('/','home.index')->name('home.index');
// Route::view('/contact','home.contact')->name('home.contact');

Route::get('/', [HomeController::class, 'home'])
    ->name('home.index');
Route::get('/contact', [HomeController::class, 'contact'])
    ->name('home.contact');
Route::get('/single', AboutController::class);


// Route::get('/', function () {
//     return view('home.index', []);
// })->name('home.index');

// Route::get('/contact', function () {
//     return view('home.contact');
// })->name('home.contact');

Route::get('/recent', function () {
    return view('home.index') ;
})->name('home.recent');

$posts = [
    1 => [
        'title' => 'intro to laravel',
        'content'=> 'this is a short intro to laravel',
        'is_new' => true
    ],
    2 => [
        'title' => 'intro to php',
        'content'=> 'this is a short intro to php',
        'is_new' => false
    ],
    3 => [
        'title' => 'intro to blob',
        'content'=> 'this is a short intro to blob',
        'is_new' => false
    ],
];


Route::resource('posts' , PostsController::class);
    //->only(['index', 'show', 'create', 'store', 'edit' , 'update']);


// Route::get('/posts', function () use($posts) {
//     //dd(request()->all()) ;
//     //dd((int)request()->input('page' , 1)) ;
//     dd((int)request()->query('page' , 1)) ;
//     //compact($posts)===['posts' => $posts]
//     return view ('posts.index' , ['posts' => $posts]);
// });
// Route::get('/posts/{id}', function ($id) use($posts) {
//     abort_if(!isset($posts[$id]), 404  );
//     return view('posts.show', ['post' => $posts[$id]]);
// })->name('home.post');

// Route::get('/recent_post/{days_ago?}', function ($dayAgo = 20)  {
//     return 'posts from'. $dayAgo . 'days ago';
// })->name('recent-post')->middleware('auth');


Route::prefix('/fun')->name('fun.')->group(function() use($posts) {
    
    Route::get('response', function () use($posts) {
        return response($posts, 201)
        ->header('content-type' , 'application/json')
        ->cookie('my-cookie', 'gull' , 311040);
    })->name('responce');
    
    Route::get('redirect', function ()  {
        return redirect('/contact');
    })->name('redirect');
    
    Route::get('back', function () {
        return back();
    })->name('back');

    Route::get('named-route', function ()  {
        return redirect()->route('posts.show', ['id' => 1]);
    })->name('named-route');

    Route::get('redirect', function ()  {
        return redirect('/contact');
    })->name('redirect');

    Route::get('away', function ()  {
        return redirect()->away('https://google.com');
    })->name('away');

    Route::get('json', function ()  {
        return response()->json($posts);
    })->name('jsonresponse');

    Route::get('download', function ()  {
        return response()->download(public_path('/364674976_46307e9a1e_z.jpg'), 'sky.jpg');
    })->name('download');
});