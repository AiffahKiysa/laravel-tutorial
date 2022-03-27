<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use App\Models\Author;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        // User::create([
        //     'name' => 'Aiffah Kiysa Waafi',
        //     'email' => 'kiysa.205025@mhs.its.ac.id',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Affan Kaysa Waafi',
        //     'email' => 'kaysa.205025@mhs.its.ac.id',
        //     'password' => bcrypt('123')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Data Analyst',
            'slug' => 'data-analyst'
        ]);

        Category::create([
            'name' => 'Competitive Programming',
            'slug' => 'competitive-programming'
        ]);

        Article::factory(25)->create();

        // Article::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'artikel-pertama',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem recusandae saepe deleniti possimus sint pariatur fuga, itaque quam illum obcaecati vitae dolores deserunt aliquam rem maxime accusamus omnis placeat dolor. Dolor cumque ea fugit, illum id consequatur laboriosam totam deserunt impedit saepe magni sit maxime consectetur nulla sapiente consequuntur quam! Ut quis fugiat reprehenderit cupiditate nemo necessitatibus dignissimos magnam! Ad sunt accusantium veritatis cum harum vitae minus omnis rem in, vel nemo velit nostrum obcaecati ab fuga temporibus aperiam? Ad debitis quibusdam veritatis repellendus beatae, optio nam est deleniti, et obcaecati necessitatibus sunt suscipit, cumque ducimus nesciunt eaque repellat iusto!</p>',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Article::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 1,
        //     'slug' => 'artikel-kedua',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem recusandae saepe deleniti possimus sint pariatur fuga, itaque quam illum obcaecati vitae dolores deserunt aliquam rem maxime accusamus omnis placeat dolor. Dolor cumque ea fugit, illum id consequatur laboriosam totam deserunt impedit saepe magni sit maxime consectetur nulla sapiente consequuntur quam! Ut quis fugiat reprehenderit cupiditate nemo necessitatibus dignissimos magnam! Ad sunt accusantium veritatis cum harum vitae minus omnis rem in, vel nemo velit nostrum obcaecati ab fuga temporibus aperiam? Ad debitis quibusdam veritatis repellendus beatae, optio nam est deleniti, et obcaecati necessitatibus sunt suscipit, cumque ducimus nesciunt eaque repellat iusto!</p>',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Article::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 3,
        //     'slug' => 'artikel-ketiga',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem recusandae saepe deleniti possimus sint pariatur fuga, itaque quam illum obcaecati vitae dolores deserunt aliquam rem maxime accusamus omnis placeat dolor. Dolor cumque ea fugit, illum id consequatur laboriosam totam deserunt impedit saepe magni sit maxime consectetur nulla sapiente consequuntur quam! Ut quis fugiat reprehenderit cupiditate nemo necessitatibus dignissimos magnam! Ad sunt accusantium veritatis cum harum vitae minus omnis rem in, vel nemo velit nostrum obcaecati ab fuga temporibus aperiam? Ad debitis quibusdam veritatis repellendus beatae, optio nam est deleniti, et obcaecati necessitatibus sunt suscipit, cumque ducimus nesciunt eaque repellat iusto!</p>',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Article::create([
        //     'title' => 'Judul Keempat',
        //     'category_id' => 3,
        //     'slug' => 'artikel-keempat',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem recusandae saepe deleniti possimus sint pariatur fuga, itaque quam illum obcaecati vitae dolores deserunt aliquam rem maxime accusamus omnis placeat dolor. Dolor cumque ea fugit, illum id consequatur laboriosam totam deserunt impedit saepe magni sit maxime consectetur nulla sapiente consequuntur quam! Ut quis fugiat reprehenderit cupiditate nemo necessitatibus dignissimos magnam! Ad sunt accusantium veritatis cum harum vitae minus omnis rem in, vel nemo velit nostrum obcaecati ab fuga temporibus aperiam? Ad debitis quibusdam veritatis repellendus beatae, optio nam est deleniti, et obcaecati necessitatibus sunt suscipit, cumque ducimus nesciunt eaque repellat iusto!</p>',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur',
        //     'category_id' => 3,
        //     'user_id' => 2
        // ]);
    }
}
