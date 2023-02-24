<?php

namespace Database\Seeders;

use App\Models\Biere;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bieres_ids=Biere::all("id")->pluck("id")->toArray();
        $users_ids=User::all("id")->pluck("id")->toArray();
        $faker=Faker\Factory::create("fr_FR");
        $couple=[];
        for($i = 0 ; $i <1000 ; $i++)
        {
            $com = [];
            $com[]=$faker->randomElement($array=$users_ids);
            $com[]=$faker->unique()->randomElement($array=$users_ids);
            $couple[]=$com;

        }
        foreach ($couple as $com )
        {
            factory(Notation::class)->create([
                "user_id"=>$com[0],
                "biere_id"=>$com[1]
            ]);
        }
    }
}
