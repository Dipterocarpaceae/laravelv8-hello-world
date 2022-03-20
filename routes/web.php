<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard',
        'active' => 'dashboard',
    ]);
})->middleware('auth');


Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

// Untuk menangani CRUD
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
