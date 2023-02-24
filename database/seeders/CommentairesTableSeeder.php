<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bieres_ids=Biere::all("id")->pluck("id")->toArray();
        $users_ids=User::all("id")->pluck("id")->toArray();
        $faker = Faker\Factory::create("fr_FR");
        $couple=[];
        for ($i =0 ; $i <1000 ; $i++)
        {
            $com = [];
            $com [] = $faker->randomElement($array=$users_ids);
            $com [] = $faker->randomElement($array = $bieres_ids);
            $couple[]= $com ;

        }
        foreach ($couple as $com)
        {
            factory(Commentaire::class)->create(["user_id"=>$com[0],"bieres_ids"=>$com[1]]);
        }
    }
}
