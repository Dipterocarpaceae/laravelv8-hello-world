<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;

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
    return view('home', [
        'title' => 'Home',
        'active' => 'home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'active' => 'about',
        'name' => "Bagus Almahenzar",
        'email' => "bagusalmahenzar@gmail.com",
        'image' => 'team-3.jpg'
    ]);
});

Route::get('/posts',  [PostController::class, 'index']);

//halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

//halaman single category
// TIDAK DIGUNAKAN LAGI
Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => 'Post by Category :' . $category->name,
        'active' => 'categories',
        'posts' => $category->posts->load([
            'author',
            'category'
        ])
    ]);
});

//halaman categories
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

// halaman single user
// TIDAK DIGUNAKAN LAGI
Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        'title' => 'Post by Author : ' . $author->name,
        'active' => 'authors',
        'posts' => $author->posts->load([
            'category',
            'author'
        ]),
    ]);
});
