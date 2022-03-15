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

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => "Bagus Almahenzar",
        'email' => "bagusalmahenzar@gmail.com",
        'image' => 'team-3.jpg'
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            'title' => 'Blog Post 1',
            'slug' => 'blog-post-1',
            'author' => 'Bagus Almahenzar',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio odit quod labore id facere perspiciatis numquam recusandae, sed rem cupiditate. Id corporis hic commodi temporibus laborum maiores optio quasi dolore praesentium repellendus, debitis ipsam iusto delectus perspiciatis. Magnam ullam pariatur nihil nesciunt dignissimos odit in ipsa possimus delectus id quidem est laborum blanditiis eaque amet sapiente debitis aperiam voluptatibus, ad nisi! Veritatis provident mollitia odit quas sed illo maiores sequi culpa. Fugit nemo earum, sapiente corporis quae minus dignissimos eaque.',
        ],
        [
            'title' => 'Blog Post 2',
            'slug' => 'blog-post-2',
            'author' => 'Riofebrian',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate nam optio incidunt facere beatae ratione quisquam, sed qui quam voluptatum? Dolores tenetur suscipit autem delectus. Numquam suscipit laboriosam quia omnis praesentium. Voluptatibus nobis, eaque unde, reprehenderit laboriosam totam eum repudiandae est sequi, nam ab officiis architecto quidem voluptatum in expedita? Odit vero, error quidem et explicabo perspiciatis placeat facilis omnis minus ratione! Quaerat temporibus odio eos necessitatibus inventore. Possimus ipsa, praesentium illum, quod neque veritatis architecto quas nulla vero temporibus magni libero sequi quam unde eaque nesciunt repellat tempora aliquam, voluptatem eveniet reprehenderit? Reiciendis hic sapiente, ratione et at ea.',
        ]
    ];
    return view('posts', [
        'title' => 'Posts',
        'posts' => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            'title' => 'Blog Post 1',
            'slug' => 'blog-post-1',
            'author' => 'Bagus Almahenzar',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio odit quod labore id facere perspiciatis numquam recusandae, sed rem cupiditate. Id corporis hic commodi temporibus laborum maiores optio quasi dolore praesentium repellendus, debitis ipsam iusto delectus perspiciatis. Magnam ullam pariatur nihil nesciunt dignissimos odit in ipsa possimus delectus id quidem est laborum blanditiis eaque amet sapiente debitis aperiam voluptatibus, ad nisi! Veritatis provident mollitia odit quas sed illo maiores sequi culpa. Fugit nemo earum, sapiente corporis quae minus dignissimos eaque.',
        ],
        [
            'title' => 'Blog Post 2',
            'slug' => 'blog-post-2',
            'author' => 'Riofebrian',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate nam optio incidunt facere beatae ratione quisquam, sed qui quam voluptatum? Dolores tenetur suscipit autem delectus. Numquam suscipit laboriosam quia omnis praesentium. Voluptatibus nobis, eaque unde, reprehenderit laboriosam totam eum repudiandae est sequi, nam ab officiis architecto quidem voluptatum in expedita? Odit vero, error quidem et explicabo perspiciatis placeat facilis omnis minus ratione! Quaerat temporibus odio eos necessitatibus inventore. Possimus ipsa, praesentium illum, quod neque veritatis architecto quas nulla vero temporibus magni libero sequi quam unde eaque nesciunt repellat tempora aliquam, voluptatem eveniet reprehenderit? Reiciendis hic sapiente, ratione et at ea.',
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        'title' => 'Single Post',
        'post' => $new_post
    ]);
});
