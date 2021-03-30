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
            "avatar" => "/img/profil_default.png"
        ]);
        DB::table("users")->insert([
            'name' => "utilisateur 2",
            'email' => "utilisateur2@gmail.com",
            "password" => bcrypt("azerty"),
            "overview" => "Moi aussi, je suis fan de photo",
            "avatar" => "/img/profil_default.png"
        ]);

        DB::table("users")->insert([
            'name' => "Alexis",
            'email' => "alexis@gmail.com",
            "password" => bcrypt("azerty"),
            "overview" => "J'adore ce super site, mes photos vont enfin être vues !!",
            "avatar" => "/img/profil_default.png"
        ]);


        DB::table("users")->insert([
            'name' => "Antonin",
            'email' => "antonin@gmail.com",
            "password" => bcrypt("azerty"),
            "overview" => "A la recherche de belles images",
            "avatar" => "/img/profil_default.png"
        ]);


        DB::table("users")->insert([
            'name' => "Le testeur ",
            'email' => "testeur2site@gmail.com",
            "password" => bcrypt("azerty"),
            "overview" => "Je suis la pour voir si tout vas bien",
            "avatar" => "/img/profil_default.png"
        ]);


        DB::table('songs')->insert([
            'title' => 'Ma premiere photo',
            'description' => 'Voici la description de l\'image 1',
            'url' => '/uploads/1/RoclI8s9PyXfFBcAQP9sxKVmp3c4zGR9hhw5uyIR.jpg',
            'user_id' => 1,
            'votes' => 0
        ]);

        DB::table('songs')->insert([
            'title' => 'Quelle belle photo !',
            'description' => 'Ceci est la description de l\'image deux',
            'url' => '/uploads/6/hdPeOn74txnw0yDPCRV4s8AR7YFiXtX3gkzakRtr.jpg',
            'user_id' => 2,
            'votes' => 0
        ]);
        DB::table('songs')->insert([
            'title' => 'Mon début en photo',
            'description' => 'quelle photo',
            'url' => '/uploads/1/8EGGQ8CVkpAYJxKxnHTDEqCV6kvqRjbAN36BFpld.png',
            'user_id' => 1,
            'votes' => 0
        ]);
        DB::table('songs')->insert([
            'title' => 'Vous aimez?',
            'description' => 'Ceci est la description de l\'image deux',
            'url' => '/uploads/5/WpFB9tsQCPojrGvG9e7iwZ792oqArhGm38xqN0W6.jpg',
            'user_id' => 3,
            'votes' => 0
        ]);
        DB::table('songs')->insert([
            'title' => 'Vive le vent',
            'description' => 'Ceci est la description de l\'image deux',
            'url' => '/uploads/1/8EGGQ8CVkpAYJxKxnHTDEqCV6kvqRjbAN36BFpld.png',
            'user_id' => 4,
            'votes' => 0
        ]);
        DB::table('songs')->insert([
            'title' => 'partage du jour',
            'description' => 'Ceci est la description de l\'image deux',
            'url' => '/uploads/6/hdPeOn74txnw0yDPCRV4s8AR7YFiXtX3gkzakRtr.jpg',
            'user_id' => 5,
            'votes' => 0
        ]);
        DB::table('songs')->insert([
            'title' => 'Une petite derniere ?',
            'description' => 'Ceci est la description de l\'image deux',
            'url' => '/uploads/4/BMvcKMxSBHeLQAHxuXf7vz3JsWgGMuv86qSiwehz.jpg',
            'user_id' => 3,
            'votes' => 0
        ]);
    }
}
