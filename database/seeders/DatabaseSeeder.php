<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        DB::table("users")->insert([
            'name' => "utilisateur 1",
            'email' => "utilisateur1@gmail.com",
            "password" => bcrypt("azerty"),
            "overview" => "je suis fan de photo",
            "avatar" => "/img/IMG_5392.png"
        ]);
        DB::table("users")->insert([
            'name' => "utilisateur 2",
            'email' => "utilisateur2@gmail.com",
            "password" => bcrypt("azerty"),
            "overview" => "Moi aussi, je suis fan de photo",
            "avatar" => "/img/IMG_5392.png"
        ]);
        DB::table('songs')->insert([
            'title' => 'Image 1',
            'description' => 'Voici la description de l\'image 1',
            'url' => 'https://codyhouse.co/demo/squeezebox-portfolio-template/img/img.png',
            'user_id' => 1,
            'votes' => 0
        ]);

        DB::table('songs')->insert([
            'title' => 'Image 2',
            'description' => 'Ceci est la description de l\'image deux',
            'url' => 'https://codyhouse.co/demo/squeezebox-portfolio-template/img/img.png',
            'user_id' => 1,
            'votes' => 0
        ]);
    }
}
