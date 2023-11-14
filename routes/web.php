<?php

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

function getPosts() {
    return [
        "1" => ["title" => "Title 1", "author" => "Some author 1"],
        "2" => ["title" => "Title 2", "author" => "Some author 2"],
        "3" => ["title" => "Title 3", "author" => "Some author 3"],
        "4" => ["title" => "Title 4", "author" => "Some author 4"],
        "5" => ["title" => "Title 5", "author" => "Some author 5"],
        "6" => ["title" => "Title 6", "author" => "Some author 6"],
    ];
}

Route::get('/', function () {
    // return "<h1>HELLO WORLD!!!</h1>";
    // dd(view('welcome'));
    return view('welcome');
});

Route::get('/posts', function () {
    $allPosts = getPosts();
    $result = "";
    foreach ($allPosts as $key => $post) {
        $result .= "<table border='solid 1px black'>" . "<tr>" . "<td>" .  $post["title"] . "</td>" . "<td>" . $post["author"] . "</td>" . "</tr>" . "</table>";
    }
    return $result;
});

// Route::get('/post/{id}', function ($id) {
//     dd($id);
//     // return "<h1>HELLO WORLD!!!</h1>";
//     // // // dd(view('welcome'));
//     return view('posts.index');
// });
