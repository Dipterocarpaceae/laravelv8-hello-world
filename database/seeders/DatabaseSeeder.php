<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Bagus Almahenzar',
            'email' => 'bagusalmahenzar@gmail.com',
            'password' => bcrypt('bagus123')
        ]);
        User::create([
            'name' => 'Cici Purnama',
            'email' => 'cicipurnama@gmail.com',
            'password' => bcrypt('cici123')
        ]);
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam optio aperiam, modi, eos totam sequi nihil cupiditate quis in eaque, expedita aspernatur et numquam. Ad necessitatibus a error vero assumenda qui enim dolor fugiat totam, earum amet, est hic voluptatibus corporis nostrum ab? Aut vitae eligendi deserunt eos ipsam sunt eveniet corrupti, itaque facere. Aspernatur reprehenderit ullam, illo magni, quo earum consectetur nobis, consequuntur at aut autem. Voluptate provident suscipit aliquid similique debitis deleniti autem assumenda ut, officia eius. Cumque harum animi hic exercitationem perspiciatis natus, eveniet maxime eligendi sequi, magnam sapiente quibusdam labore amet! Minus ex facere rem accusantium.',
            'category_id' => 1,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam optio aperiam, modi, eos totam sequi nihil cupiditate quis in eaque, expedita aspernatur et numquam. Ad necessitatibus a error vero assumenda qui enim dolor fugiat totam, earum amet, est hic voluptatibus corporis nostrum ab? Aut vitae eligendi deserunt eos ipsam sunt eveniet corrupti, itaque facere. Aspernatur reprehenderit ullam, illo magni, quo earum consectetur nobis, consequuntur at aut autem. Voluptate provident suscipit aliquid similique debitis deleniti autem assumenda ut, officia eius. Cumque harum animi hic exercitationem perspiciatis natus, eveniet maxime eligendi sequi, magnam sapiente quibusdam labore amet! Minus ex facere rem accusantium.',
            'category_id' => 1,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Post Ketiga',
            'slug' => 'judul-post-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam optio aperiam, modi, eos totam sequi nihil cupiditate quis in eaque, expedita aspernatur et numquam. Ad necessitatibus a error vero assumenda qui enim dolor fugiat totam, earum amet, est hic voluptatibus corporis nostrum ab? Aut vitae eligendi deserunt eos ipsam sunt eveniet corrupti, itaque facere. Aspernatur reprehenderit ullam, illo magni, quo earum consectetur nobis, consequuntur at aut autem. Voluptate provident suscipit aliquid similique debitis deleniti autem assumenda ut, officia eius. Cumque harum animi hic exercitationem perspiciatis natus, eveniet maxime eligendi sequi, magnam sapiente quibusdam labore amet! Minus ex facere rem accusantium.',
            'category_id' => 2,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Post Keempat',
            'slug' => 'judul-post-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam optio aperiam, modi, eos totam sequi nihil cupiditate quis in eaque, expedita aspernatur et numquam. Ad necessitatibus a error vero assumenda qui enim dolor fugiat totam, earum amet, est hic voluptatibus corporis nostrum ab? Aut vitae eligendi deserunt eos ipsam sunt eveniet corrupti, itaque facere. Aspernatur reprehenderit ullam, illo magni, quo earum consectetur nobis, consequuntur at aut autem. Voluptate provident suscipit aliquid similique debitis deleniti autem assumenda ut, officia eius. Cumque harum animi hic exercitationem perspiciatis natus, eveniet maxime eligendi sequi, magnam sapiente quibusdam labore amet! Minus ex facere rem accusantium.',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
