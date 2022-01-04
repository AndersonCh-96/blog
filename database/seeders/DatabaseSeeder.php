<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;
// crear carpeta en directorio
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //crea el directorio


        Storage::deleteDirectory('public/posts');

        Storage::makeDirectory('public/posts');
        // \App\Models\User::factory(10)->create();

        $this->call(RolSeeder::class);
        $this->call(UserSeeder::class);

        Category::factory(4)->create();
        Tag::factory(8)->create();
        $this->call(PostSeeder::class);

    }
}
