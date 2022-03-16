<?php

namespace App\Models;

class Post
{
    private static $blog_post = [
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

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
